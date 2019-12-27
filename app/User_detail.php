<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_detail extends Model
{
    protected $table = 'user_details';
    protected $fillable = ['id','user_id','document_types_id','name','username','birthday','birthplace','gender','phone','landline','document','current_place','last_connection'];
    public $timestamps = true;


    public function User(){
        return $this->belongsTo('App\User');
    }

    public function Document_Type(){
        return $this->belongsTo('App\Document_Type','document_types_id');
    }

}
