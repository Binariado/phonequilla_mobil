<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $table = 'product_details';
    protected $fillable = ['id','shipping_info','description','storage','mpx','pulgada','inch','color','name'];
    public $timestamps = true;


    public function Product(){
        return $this->hasMany('App\Product');
    }
}
