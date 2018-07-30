<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Project;
    
class NoteController extends Controller
{
       public function getIndex(){
        $notes = Note::all();
        return view('notes.index', ["notes" => $notes]);
    }
    
    public function getCreate(){
        $projects = Project::all();
        return view('notes.create', ['projects'=>$projects]);
    }
    
    public function postCreate(Request $req){
        $note = new Note();
        
        $note->title = $req->title;
        $note->desc = $req->desc;
        $note->date = $req->date;
        $note->project_id = $req->project_id;
        $note->user_id = $req->user()->id;
        $note->save();
        
        return redirect('/notes');
    }
    
    public function getSingle(Request $req){
        $note = Note::find($req->id);
        return view('notes.view', ['note'=>$note]);
    }
    
    public function getEdit(Request $req){
        $note = Note::find($req->id);
        return view('notes.edit', ['note'=>$note]);
    }
    
    public function putEdit(Request $req){
        $note = Note::find($req->id);
        
        $note->title = $req->title;
        $note->desc = $req->desc;
        $note->date = $req->date;
        $note->save();
        
        return redirect('notes/view/'.$note->id);
    }
    
    public function deleteDelete(Request $req){
        $note = Note::find($req->id);
        $note->delete();
        return redirect('/notes/');
    }
}
