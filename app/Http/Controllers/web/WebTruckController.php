<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Vehicle;
use App\Services\Vehicle\VechicleSelectorService;
use Illuminate\Http\Request;

class WebTruckController extends Controller
{
    public function asignarCamionOptimo($paqueteId, VechicleSelectorService $selector)
    {
        $paquete = Package::findOrFail($paqueteId);

        $seleccion = $selector->selectOptimalTruck($paquete, 'distancia'); // o 'tiempo'

        if (!$seleccion[0]) {
            return response()->json(['error' => 'No hay rutas disponibles.'], 404);
        }

        return response()->json([
            'camion' => $seleccion[0]['camion'],
            'ruta' => $seleccion[0]['ruta'],
            'valor' => $seleccion[0]['valor'],
        ]);
    }

    public function assignOptimalVehicle(Request $request)
    {
        $package = Package::findOrFail($request->package_id);
        $package->vehicle_id = $request->vehicle_id;
        $package->save();

        return response()->json([
            'data' => $package['camion']
        ]);
    }

    public function fuelEfficiencyReport()
    {
        $vehicles = Vehicle::with('deliveries')->get();

        $report = $vehicles->map(function ($vehicle) {
            $totalDistance = $vehicle->deliveries->sum('distance_km');
            $deliveriesCount = $vehicle->deliveries->count();

            $fuelUsed = $vehicle->km_per_liter > 0 ? $totalDistance / $vehicle->km_per_liter : 0;
            $fuelPerDelivery = $deliveriesCount > 0 ? $fuelUsed / $deliveriesCount : null;

            return [
                'plate' => $vehicle->number_plate,
                'total_km' => round($totalDistance, 2),
                'fuel_used' => round($fuelUsed, 2),
                'deliveries' => $deliveriesCount,
                'fuel_per_delivery' => round($fuelPerDelivery, 3),
            ];
        })->sortBy('fuel_per_delivery');

        return view('vehicle.report.fuel_efficiency', compact('report'));
    }
}
