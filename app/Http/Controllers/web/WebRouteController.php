<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\DangerousZone;
use App\Models\Package;
use App\Models\Supplier;
use App\Models\Vehicle;
use App\Services\Allocator\AllocatorService;
use App\Services\OpenRoute\OpenRouteService;
use App\Services\Vehicle\VechicleSelectorService;
use App\Services\Zone\ZoneService;

class WebRouteController extends Controller
{
    public function mostrarMapa(ZoneService $zones)
    {
        $suppliers = Supplier::all();
        $vehicle = Vehicle::first();
        $package = Package::first();
        $geojson = $zones->obtenerGeoJSONMultipolygon();

        return view('routes.index', compact('vehicle', 'package', 'suppliers', 'geojson'));
    }

    public function rutaJson($vehicleId, OpenRouteService $ors, ZoneService $zonas)
    {
        $vehicle = Vehicle::where('id', $vehicleId)->first();
        $package = Package::where('id', 2)->first();

        $coords = [
            [$vehicle->lng, $vehicle->lat],
            [$package->pickup_lng, $package->pickup_lat],
            [$package->delivery_lng, $package->delivery_lat],
        ];

        $geojson = $zonas->obtenerGeoJSONMultipolygon();

        $route = $ors->getRoute($coords, $geojson);

        $result = [
            'vehicle' => $vehicle,
            'package' => $package,
            'route' => $route
        ];

        return response()->json($result);
    }

    public function batchRoutes(VechicleSelectorService $selector, ZoneService $zonas)
    {
        /*         $datos[0]['package']['id'] = 1;
        $datos[0]['distance'] = 22;
        $datos[0]['duration'] = 11;
        $datos[0]['fuel_cost'] = 21;

        $datos[1]['package']['id'] = 1;
        $datos[1]['distance'] = 22;
        $datos[1]['duration'] = 11;
        $datos[1]['fuel_cost'] = 21;

        $datos[2]['package']['id'] = 1;
        $datos[2]['distance'] = 22;
        $datos[2]['duration'] = 11;
        $datos[2]['fuel_cost'] = 21;

        $datos[3]['package']['id'] = 1;
        $datos[3]['distance'] = 22;
        $datos[3]['duration'] = 11;
        $datos[3]['fuel_cost'] = 21;

        $datos[4]['package']['id'] = 1;
        $datos[4]['distance'] = 22;
        $datos[4]['duration'] = 11;
        $datos[4]['fuel_cost'] = 21;

        $datos[5]['package']['id'] = 1;
        $datos[5]['distance'] = 22;
        $datos[5]['duration'] = 11;
        $datos[5]['fuel_cost'] = 21; */

        $datos = [];
        $packages = Package::whereNull('vehicle_id')->get(); // Truck not assigned
        foreach ($packages as $package) {
            $selection = $selector->selectOptimalTruck($package, 'distancia');
            if (is_array($selection) && count($selection) > 0) {
                $datos[] = [
                    'package' => $package,
                    'vehicle' => $selection[0]['vehicle'],
                    'ruta' => $selection[0]['ruta'],
                    'distance' => $selection[0]['distance'],
                    'duration' => $selection[0]['duration'],
                    'fuel_cost' => $selection[0]['fuel_cost'],
                ];
            }
        }
        $geojson = $zonas->obtenerGeoJSONMultipolygon();

        return view('routes.lotes', compact('datos', 'geojson'));
    }

    public function batchRoutesByPackageId($packageId, VechicleSelectorService $selector)
    {
        $package = Package::where('id', $packageId)->first();
        $data = [];
        $selections = $selector->selectOptimalTruck($package, 'distancia');
        foreach ($selections as $selection) {
            if ($selection) {
                $data[] = [
                    'package' => $package,
                    'vehicle' => $selection['vehicle'],
                    'ruta' => $selection['ruta'],
                    'distance' => $selection['distance'],
                    'duration' => $selection['duration'],
                    'fuel_cost' => $selection['fuel_cost'],
                ];
            }
        }

        return response()->json([
            'datos' => $data
        ]);
    }

    public function geojson()
    {
        $dangerousZones = DangerousZone::all();
        $features = [];
        foreach ($dangerousZones as $zone) {
            $geo = json_decode($zone->polygon); // si ya está guardado como GeoJSON
            $features[] = [
                'type' => 'Feature',
                'geometry' => $geo,
                'properties' => [
                    'nombre' => $zone->name,
                ]
            ];
        }
        return response()->json([
            'type' => 'FeatureCollection',
            'features' => $features
        ]);
    }

    // AJAX: obtener tipos de vehículos según proveedor
    public function getTipos($proveedorId)
    {
        $tipos = Vehicle::where('supplier_id', $proveedorId)
            ->with('type_vehicle')
            ->get()
            ->pluck('type_vehicle')
            ->filter()
            ->unique('id')
            ->values()
            ->map(fn($type) => [
                'id' => $type->id,
                'name' => $type->name,
            ]);

        return response()->json($tipos);
    }

    // AJAX: obtener vehículos según proveedor y tipo
    public function getVehiculos($proveedorId, $tipoId)
    {
        $vehiculos = Vehicle::where('supplier_id', $proveedorId)
            ->whereHas('type_vehicle', fn($q) => $q->where('id', $tipoId))
            ->get(['id', 'number_plate', 'lat', 'lng']);

        return response()->json($vehiculos);
    }

    public function assignVehiclePerPackage($paqueteId, AllocatorService $servicio)
    {
        $package = Package::findOrFail($paqueteId);
        $vehicle = $servicio->assignTruckToPackage($package);

        if ($vehicle) {
            return response()->json([
                'mensaje' => 'Camión asignado correctamente',
                'vehicle' => $vehicle
            ]);
        }

        return response()->json([
            'mensaje' => 'No se encontró un camión disponible'
        ], 404);
    }
}
