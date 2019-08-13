<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TimeReservation extends Model
{
    protected $table = 'time_reservation';
    public $fillable = ['time_reservation','seat_number'];
}
