<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class negociation extends Model
{
    function Project(){
    	return $this->belongsTo('App\Project');
    }

    function User(){
    	return $this->belongsTo('App\User');	
    }
}
