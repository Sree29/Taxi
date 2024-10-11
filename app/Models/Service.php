<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // Specify the table name
    protected $table = 'service';

    // Specify the fillable fields
    protected $fillable = [
        'service_icon',
        'service_name',
        'description',
    ];
}

