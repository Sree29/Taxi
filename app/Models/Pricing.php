<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    protected $table = 'pricing'; // Specify the table name if it differs from the model name

    protected $fillable = [
        'car_name',
        'image',
        'per_hour_rate',
        'per_day_rate',
        'leasing_rate',
    ];
}
