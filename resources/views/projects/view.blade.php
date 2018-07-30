@extends('layouts.master')
@section('main')
<div  class="row">
  <div class="col-sm-6">
    <h1>Detalle del proyecto</h1>
    <div class="form-wrap">
      <form>
        <div class="form-group">
          <label for="title">Nombre</label>
          <input type="text" class="form-control" name="title" id="title" value="{{ $project->title }}" required disabled>
        </div>
        <div class="form-group">
          <label for="type">Tipo de proyecto</label>
          <input type="text" class="form-control" name="type" id="type" value="{{ $project->type }}" required disabled>
        </div>
        <div class="form-group">
          <label for="desc">Descripción</label>
          <input type="text" class="form-control" name="desc" id="desc" value="{{ $project->desc }}" required disabled>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-6">
            <label for="date">Fecha de Inicio</label>
            <input type="text" class="form-control" name="start" id="start" value="{{ $project->start }}" required disabled>
          </div>
          <div class="form-group col-sm-6">
            <label for="date">Fecha de entrega</label>
            <input type="text" class="form-control" name="end" id="end" value="{{ $project->end }}" required disabled>
          </div>
        </div>
        <div class="form-group">
          <label for="status">Status</label>
          <input type="text" class="form-control" name="status" id="status" value="{{ $project->status }}" required disabled>
        </div>
      </form>
    </div>
  </div>
  <div class="col-sm-6">
    <h2>Notas</h2>
    <ul class="notes list-group" style="display: block;">
      @foreach($project->notes as $note)
      <li class="list-group-item">
        <a class="list-group-action" href="{{ action('NoteController@getSingle', ['id'=>$note->id]) }}">
          {{ $note->user->name }}</br>
          {{ $note->title }}
        </a>
      </li>
      @endforeach
    </ul>
    <hr>
    <h2>Equipo</h2>
    <ul class="notes list-group" style="display: block;">
      @foreach( $project->users as $worker )
      <li class="list-group-item">
        <a class="list-group-action" href="{{ route( 'users.view', ['id'=>$worker->id] )}}">{{ $worker->name }} - {{ $worker->cargo }}</a>
      </li>
      @endforeach
    </ul>
  </div>
</div>
@endsection