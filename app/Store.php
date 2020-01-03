<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'stores';
    protected $fillable = ['id','city_id','name','address','schedule','phone'];
    public $timestamps = true;

    public function Cities(){
        return $this->belongsTo('App\Cities','city_id');
    }
}
