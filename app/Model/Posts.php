<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';
    public $fillable = ['title','description','image','detail','user_id','category_id'];
}
