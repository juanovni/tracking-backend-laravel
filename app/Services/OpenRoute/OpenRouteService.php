<?php

namespace App\Services\OpenRoute;

use Illuminate\Support\Facades\Http;

class OpenRouteService
{
    protected $apiKey;
    protected $baseUrl = 'https://api.openrouteservice.org/v2/directions/driving-car';

    public function __construct()
    {
        $this->apiKey = config('services.openrouteservice.key');
    }

    public function getRoute(array $coordenadas, ?array $avoidPolygons = null): ?array
    {
        $payload = [
            'coordinates' => $coordenadas,
            'instructions' => false,
        ];

        if ($avoidPolygons) {
            $payload['options'] = [
                'avoid_polygons' => $avoidPolygons
            ];
        }

        $response = Http::withHeaders([
            'Authorization' => $this->apiKey,
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->post($this->baseUrl, $payload);


        return $response->successful() ? $response->json() : null;
    }
}
