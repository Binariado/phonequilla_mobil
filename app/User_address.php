<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_address extends Model
{
    protected $table = 'user_addresses';
    protected $fillable = ['id','user_id','city_id','department_id','neighborhood','address','address_detail','address_detail','address_site','address_site'];
    public $timestamps = true;


    public function User(){
        return $this->belongsTo('App\User','user_id');
    }
    public function Departments(){
        return $this->belongsTo('App\Departments','department_id');
    }
    public function Cities(){
        return $this->belongsTo('App\Cities','city_id');
    }
}
