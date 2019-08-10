<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';
    public $fillable = ['title','description','image','detail','user_id','category_id'];

    public function category(){
        return $this->belongsTo('App\Model\Categories','category_id');
    }
}
