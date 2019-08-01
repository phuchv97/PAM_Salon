<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'services';
    
    public $fillable = ['name','description','icon','price','user_id'];
}
