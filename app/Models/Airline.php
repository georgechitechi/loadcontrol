<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'iata_code',
        'base',
        'base_iata_code',
        'settings',
    ];

    protected $casts = [
        'settings' => 'array',
    ];

    public function aircraftTypes()
    {
        return $this->hasMany(AircraftType::class);
    }

    public function flights()
    {
        return $this->hasMany(Flight::class);
    }

    public function routes()
    {
        return $this->hasMany(Route::class);
    }
}
