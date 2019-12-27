<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['id','user_id','reference','total','state'];
    public $timestamps = true;


     public function Order_item(){
         return $this->hasMany('App\Order_item');
     }
}
