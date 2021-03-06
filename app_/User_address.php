<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_address extends Model
{
    protected $table = 'user_addresses';
    protected $fillable = ['id','user_id','city_id','neighborhood','address','address_detail','address_site'];
    public $timestamps = true;


    public function User(){
        return $this->belongsTo('App\User');
    }
}
