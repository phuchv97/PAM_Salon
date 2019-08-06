<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HairStylist extends Model
{
    protected $table = 'hair_stylist';
    public $fillable = ['name','description','avatar','address','gender','feedback'];
}
