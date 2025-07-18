<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Vehicle;

class ApiLocationController extends Controller
{

    public function store(Request $request)
    {
        $truck = Vehicle::where('number_plate', "=", $request->device_id)->first();
        $truck->lat = $request->latitude;
        $truck->lng = $request->longitude;
        $truck->save();

        return response()->json(['status' => 'ok']);
    }
}
