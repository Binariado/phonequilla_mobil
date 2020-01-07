<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    protected $table = 'departments';
    protected $fillable = ['id','name','country_id'];
    public $timestamps = true;

    public function Countries(){
        return $this->belongsTo('App\Countries','country_id');
    }
    public function Cities(){
        return $this->hasMany('App\Cities');
    }
    public function AddressMain(){
        return $this->hasMany('App\AddressMain');
    }
    public function User_address(){
        return $this->hasMany('App\User_address');
    }   

}
