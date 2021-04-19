<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle_regdate extends Model
{
    use HasFactory;


    protected $table = 'vehicle_regdates';

    protected $guarded = [
        'id'
    ];

    protected $timestamps = true;

    protected $fillable = [
        'label',
        'value',
    ];
}
