<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    
    // Specify the table name
    protected $table = 'booking';
    
    protected $fillable = [
        'pick_up_location',
        'drop_off_location',
        'pick_up_date',
        'drop_off_date',
        'pick_up_time',
    ];
}
