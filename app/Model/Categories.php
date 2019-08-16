<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    public $fillable = ['name','description','user_id','slug'];

    public function user(){
    	return $this->belongsTo('App\User','user_id');
    }
}
