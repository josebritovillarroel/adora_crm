<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reminder;
use App\Project;
    
class ReminderController extends Controller
{
    public function getIndex(){
      $reminders = Reminder::all();
      return view('reminders.index', ["reminders" => $reminders]);
    }
    
    public function getCreate(){
      $projects = Project::all();
      return view('reminders.create', ['projects'=>$projects]);
    }
    
    public function postCreate(Request $req){
        $reminder = new Reminder();
        
        $reminder->title = $req->title;
        $reminder->desc = $req->desc;
        $reminder->date = $req->date;
        $reminder->priority = $req->priority;
        $reminder->project_id = $req->project_id;
        $reminder->user_id = $req->user()->id;
        $reminder->save();
        
        return redirect('/reminders');
    }
    
    public function getSingle(Request $req){
        $reminder = Reminder::find($req->id);
        return view('reminders.view', ['reminder'=>$reminder]);
    }
    
    public function getEdit(Request $req){
        $reminder = Reminder::find($req->id);
        return view('reminders.edit', ['reminder'=>$reminder]);
    }
    
    public function putEdit(Request $req){
        $reminder = Reminder::find($req->id);
        
        $reminder->title = $req->title;
        $reminder->desc = $req->desc;
        $reminder->date = $req->date;
        $reminder->priority = $req->priority;
        $reminder->save();
        
        return redirect('reminders/view/'.$reminder->id);
    }
    
    public function deleteDelete(Request $req){
        $reminder = Reminder::find($req->id);
        $reminder->delete();
        return redirect('/reminders/');
    }
}
