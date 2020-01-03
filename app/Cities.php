<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $table = 'cities';
    protected $fillable = ['id','name','departament_id'];
    public $timestamps = true;

    public function Departaments(){
        return $this->hasMany('App\Departaments','departament_id');
    }
    public function Stores(){
        return $this->hasMany('App\Stores');
    }
}
