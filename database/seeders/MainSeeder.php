<?php

namespace Database\Seeders;

use App\Models\Client as ModelsClient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DangerousZone;
use App\Models\Supplier;
use App\Models\TypeVehicle;
use App\Models\Vehicle;
use App\Models\VehicleAssignment;

class MainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DangerousZone::create(
            [
                'name' => 'Chambers',
                'polygon' => '[[-79.91269112271074, -2.214235048767634], [-79.91269112271074, -2.2166164424219943], [-79.9098313127464, -2.2166164424219943], [-79.9098313127464, -2.214235048767634], [-79.91269112271074, -2.214235048767634]]',
                'status' => '1',
            ]
        );
        DangerousZone::create(
            [
                'name' => 'Cristo del Consuelo',
                'polygon' => '[[-79.92486698028485, -2.2102083198840745], [-79.92486698028485, -2.212373229245415], [-79.92231048349922, -2.212373229245415], [-79.92231048349922, -2.2102083198840745], [-79.92486698028485, -2.2102083198840745]]',
                'status' => '1',
            ]
        );

        Supplier::create(
            [
                'description' => 'Servientrega',
                'contact' => '',
                'type_of_service' => 'Tercerizado',
            ]
        );
        Supplier::create(
            [
                'description' => 'Tramaco',
                'contact' => '',
                'type_of_service' => 'Tercerizado',
            ]
        );


        TypeVehicle::create(
            [
                'name' => 'Bicicleta',
                'description' => 'Entregas urbanas rápidas (pedidos pequeños)',
            ]
        );
        TypeVehicle::create(
            [
                'name' => 'Motocicleta / Scooter',
                'description' => 'Entregas rápidas de comida o documentos',
            ]
        );
        TypeVehicle::create(
            [
                'name' => 'Automóvil',
                'description' => 'Entregas medianas o de zonas más alejadas',
            ]
        );
        TypeVehicle::create(
            [
                'name' => 'Camioneta',
                'description' => 'Paquetería o entregas más voluminosas',
            ]
        );
        TypeVehicle::create(
            [
                'name' => 'Camión pequeño',
                'description' => 'Entregas comerciales o grandes volúmenes',
            ]
        );
        TypeVehicle::create(
            [
                'name' => 'Camión grande',
                'description' => 'Transporte de carga pesada o en pallets',
            ]
        );
        TypeVehicle::create(
            [
                'name' => 'Vehículo eléctrico',
                'description' => 'Alternativa ecológica para cualquier categoría',
            ]
        );


        $client = ModelsClient::create(
            [
                'name' => 'Servientrega',
                'ruc' => '0930114061',
                'email' => 'servientrega@gmail.com',
                'phone' => '09887272721',
                'address' => 'Guayaquil - Ecuador',
            ]
        );

        $vehicle1 = Vehicle::create(
            [
                'type_vehicle_id' => '5',
                'supplier_id' => '1',
                'number_plate' => 'GNY710',
                'weight' => '10',
                'mileage_per_liter' => '8.5',
                'lat' => '-2.21493',
                'lng' => '-79.9362',
                'available' => '1',
            ]
        );
        $vehicle2 = Vehicle::create(
            [
                'type_vehicle_id' => '5',
                'supplier_id' => '1',
                'number_plate' => 'GNB019',
                'weight' => '10',
                'mileage_per_liter' => '8.5',
                'lat' => '-2.21361',
                'lng' => '-79.9225',
                'available' => '1',
            ]
        );

        VehicleAssignment::create(
            [
                'client_id' => $client->id,
                'vehicle_id' => $vehicle1->id,
                'assignment_date' => '2025-06-18 20:39:05',
            ]
        );

        VehicleAssignment::create(
            [
                'client_id' => $client->id,
                'vehicle_id' => $vehicle2->id,
                'assignment_date' => '2025-06-18 20:39:05',
            ]
        );
    }
}
