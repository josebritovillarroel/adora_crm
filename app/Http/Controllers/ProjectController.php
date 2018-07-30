<?php

namespace App\Http\Controllers;
use App\Project;
use App\User;
use App\Client;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function getIndex(Request $req){
      if( $req->user()->hasRole('Admin') ){
        $projects = ( $req->title ) ? Project::search( $req->title )->interno( $req->interno )->get() : Project::interno( $req->interno )->get();
      }else{
        $projects = ( $req->title ) ? $req->user()->projects()->search( $req->title )->get() : $req->user()->projects;
      }
      return view('projects.index', ["projects" => $projects]);
    }
    
    public function getCreate(){
      $clients = Client::all();
      $users = User::all();
      
      return view('projects.create', ['clients'=>$clients, 'users'=>$users] );
    }
    
    public function postCreate(Request $req){
        $project = new Project();
        
        $project->title = $req->title;
        $project->type = $req->type;
        $project->desc = $req->desc;
        $project->start = $req->start;
        $project->end = $req->end;
        $project->status = "Pendiente";
        $project->client_id = $req->client_id;
        $project->internal = $req->internal;
        $project->save();
        
        foreach( $req->equipo as $worker_id ){
            $worker = User::find($worker_id);
            $project->users()->attach($worker);
        }   
        
        return redirect('/projects');
    }
    
    public function getSingle(Request $req){
        $project = Project::find($req->id);
        return view('projects.view', ['project'=>$project]);
    }
    
    public function getEdit(Request $req){
        $project = Project::findOrFail($req->id);
        return view('projects.edit', ['project'=>$project]);
    }
    
    public function putEdit(Request $req){
        $project = Project::find($req->id);
        
        $project->title = $req->title;
        $project->type = $req->type;
        $project->desc = $req->desc;
        $project->start = $req->start;
        $project->end = $req->end;
        $project->status = $req->status;
        
        $project->save();
        
        return redirect('projects/view/'.$project->id);
    }
    
  public function deleteDelete(Request $req){
    $project = Project::find($req->id);
    $project->delete();
    return redirect('/projects');
  }

  public function getIntern(){
    $projects = Project::all();
    return view('projects.intern', ["projects" => $projects]);
  }
  
  public function getComer(){
    $projects = Project::all();
    return view('projects.comer', ["projects" => $projects]);
  }
  
  public function putFinish(Request $req){
    $project = Project::findOrFail($req->id);
    $project->status = "finalizado";
    $project->save();
    return redirect('/projects');
  }

 }
