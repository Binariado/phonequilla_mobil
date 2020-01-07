<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddressMain extends Model
{
    protected $table = 'address_mains';
    protected $fillable = ['id','user_id','city_id','department_id','neighborhood','address','address_detail','address_detail','address_site','address_site','state','main'];
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
