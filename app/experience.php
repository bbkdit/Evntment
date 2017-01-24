<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
    protected $table = 'experiences';


    public function images(){

    	return $this->hasMany('App\Expimage');
    }
}
