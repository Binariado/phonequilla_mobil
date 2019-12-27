<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document_Type extends Model
{
    protected $table = 'document_types';
    protected $fillable = ['id','code','description'];
    public $timestamps = true;

    public function User_detail(){
        return $this->hasMany('App\User_detail');
    }
}
