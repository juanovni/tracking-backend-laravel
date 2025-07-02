<?php

namespace App\Services\Zone;

use App\Models\DangerousZone;

class ZoneService
{
    public function obtenerGeoJSONMultipolygon(): array
    {
        // Alternativa sin PostGIS: usar una lista manual
        $zonas = DangerousZone::all();

        $polygons = [];

        foreach ($zonas as $zona) {
            $geo = json_decode($zona->polygon);
            $polygons[] = array($geo);
        }

        return [
            'type' => 'MultiPolygon',
            'properties' => [
                "name" => "Zonas peligrosas"
            ],
            'coordinates' => $polygons
        ];
    }
}
