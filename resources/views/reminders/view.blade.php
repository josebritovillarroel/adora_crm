@extends('layouts.master')
@section('main')
<form>
<h1>Detalle del recordatorio</h1>
<div  class="row">
    <div class="col-sm-6">
        <div class="form-wrap">
                <div class="form-group">
                    <label for="project_name">Proyecto asociado</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="project_name" id="project_name" value="{{$reminder->project->title}}" required disabled>
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <a href="{{ action('ProjectController@getSingle', ['id'=>$reminder->project->id]) }}"><i class="fa fa-eye"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Título</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{$reminder->title}}" required disabled>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="prior">Prioridad</label>
                        <input type="text" class="form-control" name="priority" id="priority" value="{{$reminder->priority}}" required disabled>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="date">Fecha</label>
                        <input type="text" class="form-control" name="date" id="date" value="{{$reminder->date}}" required disabled>
                    </div>
                </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="desc">Descripción</label>
            <textarea rows="5" class="form-control text-left" name="desc" id="desc" required disabled>
                {{$reminder->desc}}
            </textarea>
        </div>
    </div>
</div>
</form>
@endsection