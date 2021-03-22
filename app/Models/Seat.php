<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory , Notifiable;

    protected $fillable = [
        'name',
        'country_wise_seat_no',
        'zilla_wise_seat_no',
        'boundary'
    ]

    
    
}
