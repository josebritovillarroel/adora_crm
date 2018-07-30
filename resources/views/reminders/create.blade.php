@extends('layouts.master')
@section('main')
<form action="{{ action('ReminderController@postCreate') }}" method="POST">
  <h1>Añadir recordatorio</h1>
  <div  class="row">
    <div class="col-sm-6">
      <div class="form-wrap">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="title">Título</label>
          <input type="text" class="form-control" name="title" id="title" required>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-6">
            <label for="date">Fecha</label>
            <input type="date" class="form-control" name="date" id="date" required>
          </div>
          <div class="form-group col-sm-6">
            <label for="prior">Prioridad</label>
            <select type="text" class="form-control" name="priority" id="priority" required>
              <option value="baja">Baja</option>
              <option value="normal">Normal</option>
              <option value="urgente">Urgente</option>
              <option value="mega">Mega Urgente</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="project_id">Proyecto</label>
          <select class="form-control" name="project_id" id="project_id" required>
            @if( Auth::user()->hasRole('Admin') )
              @foreach($projects as $project)
                <option value="{{ $project->project_id }}">{{ $project->title }}</option>
              @endforeach
            @endif
            <option value="">Ninguno</option>
          </select>
        </div>
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
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