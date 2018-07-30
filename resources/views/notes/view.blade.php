@extends('layouts.master')
@section('main')
<h1>Detalle de la nota</h1><br>
<form>
<div  class="row">
    <div class="col-sm-6">
        <div class="form-wrap">
                <div class="form-group">
                    <label for="project_name">Proyecto asociado</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="project_name" id="project_name" value="{{$note->project->title}}" required disabled>
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <a href="{{ action('ProjectController@getSingle', ['id'=>$note->project->id]) }}"><i class="fa fa-eye"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Título</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{$note->title}}" required disabled>
                </div>
                <div class="form-group">
                    <label for="date">Fecha</label>
                    <input type="text" class="form-control" name="date" id="date" value="{{$note->date}}" required disabled>
                </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="desc">Descripción</label>
            <textarea rows="5" class="form-control" name="desc" id="desc" required disabled>
                {{$note->desc}}
            </textarea>
        </div>
    </div>
</div>
</form>
@endsection