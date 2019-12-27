<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';
    protected $fillable = ['id','name'];
    public $timestamps = true;


     public function Product(){
         return $this->hasMany('App\Product');
     }

}
