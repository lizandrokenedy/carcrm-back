<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle_version extends Model
{
    use HasFactory;


    protected $table = 'vehicle_versions';

    protected $guarded = [
        'id'
    ];

    protected $timestamps = true;

    protected $fillable = [
        'model_id',
        'brand_id',
        'label',
        'value',
    ];
}
