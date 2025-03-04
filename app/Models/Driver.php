<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'pickup_location',
        'dropoff_location',
        'pickup_date',
        'dropoff_date',
        'pickup_time',
    ];
}
