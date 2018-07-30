<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\negociation;
use App\Client;
use App\Project;

class NegociationController extends Controller
{
    public function getIndex(Request $req){
        if( $req->user()->hasRole('admin') ){
            $client_id  = $req->user()->client_id;
            $client     = Client::find( $client_id );
            $projects   = $client->projects;
        }else{
            $projects   = Project::all();
        }

    	return view('negociations.index', ["projects" => $projects] ); //no entiendo bien porque se pasa ese arreglo....
    }

    public function show( $id ){
        $project = Project::find( $id );
        return view('negociations.show', ["project" => $project] );
    }

    public function getNegociations( $project_id ){
        $chats = negociation::where('project_id', $project_id)->get();
        return $chats;
    }

    public function postNegociation(){
        return "Activo";
    }
}
