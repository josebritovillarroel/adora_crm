<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function users(){
      return $this->belongsToMany('App\User', 'user_project', 'project_id', 'user_id');
    }
    
    public function reminders(){
      return $this->hasMany('App\Reminder');
    }
    
    public function notes(){
      return $this->hasMany('App\Note');
    }
    
    public function client(){
      return $this->belongsTo('App\Client');
    }

    public function negociations(){
      return $this->hasMany('App\negociation');
    }
    
    public function scopeSearch($query, $title){
      return $query->where('title', 'like', '%' . $title . '%');
    }
    
    public function scopeInterno($query, $in ){
      if( $in != ''){
        return $query->where('internal', $in );
      }
      return $query;
    }
    
}