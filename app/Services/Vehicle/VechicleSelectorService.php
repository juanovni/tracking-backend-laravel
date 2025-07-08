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

            $totalDistance = $vehicle->deliveries->sum('distance_km');
            $totalFuelUsed = $vehicle->km_per_liter > 0 ? $totalDistance / $vehicle->km_per_liter : 0;
            $deliveriesCount = $vehicle->deliveries->count();

            $route = $this->ors->getRoute($coordinates, $zonasGeoJSON);
            if (!$route) continue;

            $distance = $route['routes'][0]['summary']['distance'] ?? 0;
            $duration = $route['routes'][0]['summary']['duration'] ?? 0;
            $valor    = $type === 'tiempo' ? $duration : $distance;

            $cost_of_gasoline = 2.40;
            $liters = ($distance / 1000) / $vehicle->km_per_liter;
            $fuel_cost = $liters * $cost_of_gasoline;

            $results[] = [
                'ruta' => $route,
                'valor' => $valor,
                'vehicle' => $vehicle,
                'distance' => $distance,
                'duration' => $duration,
                'fuel_cost' => $fuel_cost,
                'delivery' => array(
                    'total_km' => $totalDistance,
                    'fuel_used_liters' => round($totalFuelUsed, 2),
                    'deliveries' => $deliveriesCount,
                    'fuel_per_delivery' => $deliveriesCount > 0 ? round($totalFuelUsed / $deliveriesCount, 3) : null,
                )
            ];
        }

        usort($results, function ($a, $b) {
            return $a['valor'] <=> $b['valor'];
        });

        return $results;
    }
}
