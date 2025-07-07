<?php

namespace App\Services\Vehicle;

use App\Models\Package;
use App\Models\Vehicle;
use App\Services\OpenRoute\OpenRouteService as OpenRouteOpenRouteService;
use App\Services\Zone\ZoneService;

class VechicleSelectorService
{
    protected $ors;
    protected $zonas;

    public function __construct(OpenRouteOpenRouteService $ors, ZoneService $zonas)
    {
        $this->ors = $ors;
        $this->zonas = $zonas;
    }

    public function selectOptimalTruck(Package $package, string $type = 'distancia'): array
    {
        $vehicles = Vehicle::where('available', true)->get();
        $zonasGeoJSON = $this->zonas->obtenerGeoJSONMultipolygon();

        $results = [];
        foreach ($vehicles as $vehicle) {
            $coordinates = [
                [$vehicle->lng, $vehicle->lat],
                [$package->pickup_lng, $package->pickup_lat],
            ];

            $route = $this->ors->getRoute($coordinates, $zonasGeoJSON);
            if (!$route) continue;

            $distance = $route['routes'][0]['summary']['distance'] ?? 0;
            $duration = $route['routes'][0]['summary']['duration'] ?? 0;
            $valor    = $type === 'tiempo' ? $duration : $distance;

            $cost_of_gasoline = 2.40;
            $liters = ($distance / 1000) / $vehicle->mileage_per_liter;
            $fuel_cost = $liters * $cost_of_gasoline;

            $results[] = [
                'ruta' => $route,
                'valor' => $valor,
                'vehicle' => $vehicle,
                'distance' => $distance,
                'duration' => $duration,
                'fuel_cost' => $fuel_cost,
            ];
        }

        usort($results, function ($a, $b) {
            return $a['valor'] <=> $b['valor'];
        });

        return $results;
    }
}
