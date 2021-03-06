<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    protected $fillable = ['id','name'];
    public $timestamps = true;


    public function Product(){
         return $this->hasMany('App\Product');
    }
    public function Categories(){
        return $this->belongsTo('App\Category');
    }
}
