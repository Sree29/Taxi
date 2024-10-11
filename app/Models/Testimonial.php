<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    // Specify the table associated with the model (optional if it follows Laravel's naming convention)
    protected $table = 'testimonial';

    // Specify the fillable fields
    protected $fillable = [
        'icon',      // Field for the icon class name
        'name',      // Field for the name of the person giving the testimonial
        'description', // Field for the testimonial description
    ];
}
