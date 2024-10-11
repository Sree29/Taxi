<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    // Define the table name explicitly if not pluralized
    protected $table = 'car';

    // Specify which columns are mass assignable
    protected $fillable = [
        'car_image',
        'car_name',
        'price_per_day',
    ];
}
