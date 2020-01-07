<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $table = 'cities';
    protected $fillable = ['id','name','department_id'];
    public $timestamps = true;

    public function Departments(){
        return $this->belongsTo('App\Departments');
    }
    public function Stores(){
        return $this->hasMany('App\Stores');
    }
    public function AddressMain(){
        return $this->hasMany('App\AddressMain');
    }
    public function User_address(){
        return $this->hasMany('App\User_address');
    } 
}
