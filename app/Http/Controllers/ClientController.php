<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    public function getIndex(){
        $clients = Client::all();
        return view('clients.index', ["clients" => $clients]);
    }
    
    public function getCreate(){
        return view('clients.create');
    }
    
    public function postCreate(Request $req){
        $client = new Client();
        
        $client->name = $req->name;
        $client->email = $req->email;
        $client->dir = $req->dir;
        $client->bussiness = $req->bussiness;
        $client->tel = $req->tel;
        $client->save();
        
        return redirect('/clients');
    }
    
    public function getView(Request $req){
        $client = Client::find($req->id);
        return view('clients.view', ['a'=>$client]);
    }
    
    public function getEdit(Request $req){
        $client = Client::find($req->id);
        return view('clients.edit', ['client'=>$client]);
    }
    
    public function putEdit(Request $req){
        $client = Client::find($req->id);
        
        $client->name = $req->name;
        $client->email = $req->email;
        $client->dir = $req->dir;
        $client->bussiness = $req->bussiness;
        $client->tel = $req->tel;
        $client->save();
        
        return redirect('clients/view/'.$client->id);
    }
    
    public function deleteDelete(Request $req){
        $client = Client::find($req->id);
        $client->delete();
        return redirect('/clients/');
    }
}
