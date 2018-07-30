<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    function getIndex(){
        $users= User::all();
        return view('users.index', [ "users"=> $users]);
    }
    
    function getView(Request $req ){
        $user= User::find($req->id);
        return view('users.view', [ "user"=> $user]);
    }
    
    function getCreate(){
        return view('users.create');
    }
    
    function postCreate(Request $req){
        $user= new User();
        $user->name=$req->name;
        $user->email=$req->email;
        $user->cargo=$req->cargo;
        $user->password=bcrypt($req->password);
        $file = $req->file('file');
        
        //Move Uploaded File
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
           
        $user->profile_picture = $file->getClientOriginalName();
        $user->save();
        
        return redirect('/users');
    }
    
    function getEdit(Request $req){
        $user = User::find($req->id);
        return view ('users.edit', ['user'=>$user]);
    
    }
    
    function putEdit(Request $req){
        $user= User::find($req->id);
        $user->name=$req->name;
        $user->email = $req->email;
        $user->cargo= $req->cargo;
        $user->password=bcrypt($req->password);
        $user->save();
        return redirect('users/view/'.$user->id);
    }
    
    function deleteDelete (Request $req){
        $user= User::find($req->id);
        $user->delete();
        return redirect('users/');
    }
}
