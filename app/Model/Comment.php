<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    public $fillable = ['post_id','comment','user_id'];

    public function user(){
        return $this->belongsTo('App\User','user_id'); 
    }
    public function post(){
        return $this->belongsTo('App\Model\Posts','post_id');
    }
}
