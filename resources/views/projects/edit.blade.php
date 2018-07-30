@extends('layouts.master')
@section('main')
<form action="{{ action('ProjectController@putEdit', ['id'=>$project->id]) }}" method="POST">
  <h1>Editar el proyecto</h1>
  <div  class="row">
    <div class="col-sm-6">
      <div class="form-wrap">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
          <label for="title">Nombre</label>
          <input type="text" class="form-control" name="title" id="title" value="{{$project->title}}" required>
        </div>
        <div class="form-group">
          <label for="type">Tipo de proyecto</label>
          <input type="text" class="form-control" name="type" id="type" value="{{$project->type}}" required>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-6">
            <label for="date">Fecha de Inicio</label>
            <input type="date" class="form-control" name="start" id="start" value="{{$project->start}}" required>
          </div>
          <div class="form-group col-sm-6">
            <label for="date">Fecha de entrega</label>
            <input type="date" class="form-control" name="end" id="end" value="{{$project->end}}" required>
          </div>
        </div>
        <div class="form-group">
          <label for="status">Status</label>
          <select type="text" class="form-control" name="status" id="status" value="{{$project->status}}" required>
            <option value="En negociación">En negociación</option>
            <option value="Pendiente por ejecutar">Pendiente por ejecutar</option>
            <option value="En curso">En curso</option>
            <option value="Terminado">Terminado</option>
          </select>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label for="desc">Descripción</label>
        <textarea rows="5" class="form-control" name="desc" id="desc" required>
        {{$project->desc}}
        </textarea>
      </div>
    </div>
  </div>
</form>
@endsection