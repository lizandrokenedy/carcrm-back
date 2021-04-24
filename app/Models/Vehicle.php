<?php

namespace App\Models;

use App\Casts\Json;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;


    protected $table = 'vehicles';

    protected $guarded = [
        'id'
    ];

    protected $casts = [
        'vehicle_features' => Json::class,
        'vehicle_financial' => Json::class,
    ];

    protected $fillable = [
        "user_id",
        "tag_id",
        "zipCode",
        "city",
        "city_url",
        "uf",
        "uf_url",
        "vehicle_type",
        "vehicle_brand",
        "vehicle_model",
        "vehicle_version",
        "vehicle_regdate",
        "vehicle_gearbox",
        "vehicle_fuel",
        "vehicle_streering",
        "vehicle_motorpower",
        "vehicle_doors",
        "vehicle_color",
        "vehicle_cubiccms",
        "vehicle_owner",
        "vehicle_mileage",
        "vehicle_features",
        "vehicle_moto_features",
        "vehicle_financial",
        "vehicle_price",
        "title",
        "description",
        "status",
    ];


    public function vehicle_photos()
    {
        return $this->hasMany(Vehicle_photos::class, 'vehicle_id', 'id')->orderBy('order', 'ASC');
    }
}
