<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expimage extends Model
{
    //

    protected $fillable = ['file_name','file_mime','file_size','file_path','original_filename','exp_id'];


    public function experience(){
    	return $this->belongsTo('App\experience');
    }
}
