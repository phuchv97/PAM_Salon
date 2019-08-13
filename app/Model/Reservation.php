<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservation';
    public $fillable = [
        'hair_stylist_id',
        'service_id',
        'name',
        'status',
        'phone_number',
        'reservation_time_id',
        'reservation_date',

    ];
    public function hairStylist(){
        return $this->belongsTo('App\Model\HairStylist','hair_stylist_id');
    }
    public function service(){
        return $this->belongsTo('App\Model\Services','service_id');
    }
    public function timeReservation(){
        return $this->belongsTo('App\Model\TimeReservation','reservation_time_id');
    }
}
