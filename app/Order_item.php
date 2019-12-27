<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    protected $table = 'order_items';
    protected $fillable = ['id','order_id','product_id','quantity','color'];
    public $timestamps = true;

    public function Order(){
        return $this->belongsTo('App\Order');
    }

    public function Product(){
        return $this->belongsTo('App\Product');
    }
}
