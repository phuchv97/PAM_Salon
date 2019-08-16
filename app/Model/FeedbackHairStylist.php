<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FeedbackHairStylist extends Model
{
    protected $table = ('feedback_hair_stylist');
    public $fillable = ['reservation_id','hair_stylist_id','feedback'];

    public function hairStylist(){
    	return $this->belongsTo('App\Model\HairStylist','hair_stylist_id');
    }
    public function reservation(){
    	return $this->belongsTo('App\Model\Reservation','reservation_id');
    }
}
