<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'products';
    protected $fillable = ['id','category_id','product_detail_id','name','img','price','discount'];
    public $timestamps = true;


    public function Category(){
         return $this->belongsTo('App\Category');
    }
    public function Brand(){
        return $this->belongsTo('App\Brand');
    }
    public function ProductDetail(){
        return $this->belongsTo('App\ProductDetail');
    }
    public function Order_item(){
        return $this->hasMany('App\Order_item');
    }
}
