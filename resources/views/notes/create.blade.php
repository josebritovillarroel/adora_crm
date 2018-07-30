@extends('layouts.master')
@section('main')
<form action="{{ action('NoteController@postCreate') }}" method="POST">
<h1>Añadir nota</h1>
<div  class="row">
    <div class="col-sm-6">
        <div class="form-wrap">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" class="form-control" name="title" id="title" required>
            </div>
            <div class="form-group">
                <label for="date">Fecha</label>
                <input type="date" class="form-control" name="date" id="date" required>
            </div>
            <div class="form-group">
                <label for="project_id">Proyecto</label>
                <select class="form-control" name="project_id" id="project_id" required>
                    @foreach($projects as $project)
                        <option value="{{ $project->id }}">{{ $project->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="desc">Descripción</label>
            <textarea rows="7" type="desc" class="form-control" name="desc" id="desc" required></textarea>
        </div>
    </div>
</div>
</form>
@endsection