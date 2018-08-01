<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class negociation extends Model
{
	protected $dispatchesEvents = [
		"created" => BroadcastNegociation::class
	];

	protected $fillable = ['user_id', 'project_id', 'text'];

    function Project(){
    	return $this->belongsTo('App\Project');
    }

    function User(){
    	return $this->belongsTo('App\User');	
    }
}
