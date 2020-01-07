<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $table = 'countries';
    protected $fillable = ['id','code','name'];

    public function Departments(){
        return $this->hasMany('App\Departments');
    }
}
