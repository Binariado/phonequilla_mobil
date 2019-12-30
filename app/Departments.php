<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    protected $table = 'departments';
    protected $fillable = ['id','name'];
    public $timestamps = true;

    public function Cities(){
        return $this->belongsTo('App\Departments');
    }
    
}
