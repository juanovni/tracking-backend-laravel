<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehicles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'type_vehicle_id',
        'supplier_id',
        'number_plate',
        'weight',
        'mileage_per_liter',
        'lat',
        'lng',
        'available',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function suppliers()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function type_vehicle()
    {
        return $this->belongsTo(TypeVehicle::class, 'type_vehicle_id');
    }
}
