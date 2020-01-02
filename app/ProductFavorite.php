<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFavorite extends Model
{
    protected $table = 'product_favorites';
    protected $fillable = ['id','user_id','product_id'];
    public $timestamps = true;


    public function Product(){
        return $this->belongsTo('App\Product','product_id');
    }
    public function User(){
        return $this->belongsTo('App\User','user_id');
    }
}
