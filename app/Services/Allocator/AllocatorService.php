<?php

namespace App\Services\Allocator;

use App\Models\Package;
use App\Models\Truck;

class AllocatorService
{
    public function asignarCamionAlPaquete(Package $paquete)
    {
        $camiones = Truck::where('available', true)->get();

        $cercano = null;
        $menorDistancia = INF;

        foreach ($camiones as $camion) {
            $distancia = $this->calcularDistancia(
                $camion->lat,
                $camion->lng,
                $paquete->lat_recogida,
                $paquete->lng_recogida
            );

            if ($distancia < $menorDistancia) {
                $menorDistancia = $distancia;
                $cercano = $camion;
            }
        }
        dd($cercano);
        if ($cercano) {
           /*  $paquete->camion_id = $cercano->id;
            $paquete->save(); */
        }

        return $cercano;
    }

    private function calcularDistancia($lat1, $lon1, $lat2, $lon2)
    {
        $radio = 6371; // km
        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);
        $a = sin($dLat / 2) * sin($dLat / 2) +
            cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
            sin($dLon / 2) * sin($dLon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        return $radio * $c;
    }
}
