<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    public $fillable = [
        'name','description','image','price','detail'
    ];
}
