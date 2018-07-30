<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'cargo'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function projects(){
      return $this->belongsToMany('App\Project', 'user_project', 'user_id', 'project_id');
    }
    
    public function roles(){
        return $this->belongsToMany('App\Role', 'user_role', 'user_id', 'role_id');
    }
    
    public function hasRole( $role ){
        if( $role ){
            $roles = $this->roles;
            foreach($roles as $r){
                if( $role == $r->title ){
                    return true;
                }
            }
        }
        return false;
    }
    
    public function hasAnyRole( $roles ){
        if( $roles ){
            for( $i = 0; $i <= count( $roles ); $i++ ){
                if( $this->hasRole( $roles[i] ) ){
                    return true;
                }
        }
        return false;
        }
    }
}