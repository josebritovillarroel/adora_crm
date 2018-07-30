@extends('layouts.master')
@section('main')
<div  class="row">
  <div class="col-sm-12">
    <h1>Registrar un nuevo proyecto</h1>
    <div class="form-wrap">
      <form action="{{ action('ProjectController@postCreate') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-row">
          <div class="form-group col-sm-6">
            <label for="#title">Título</label>
            <input type="text" class="form-control" name="title" id="title" required>
          </div>
          <div class="form-group col-sm-6">
            <label for="type">Tipo</label>
            <input type="text" name="type" class="form-control" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-3">
            <label for="start">Fecha de inicio</label>
            <input type="text" name="start" class="form-control" id="dateStart" required>
          </div>
          <div class="form-group col-sm-3">
            <label for="end">Fecha de entrega</label>
            <input type="text" name="end" class="form-control" id="dateEnd" required>
          </div>
          <div class="form-group col-sm-3">
            <label>Alcance del proyecto</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="internal" id="inlineRadio1" value="1">
              <label class="form-check-label" for="inlineRadio1">Interno</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="internal" id="inlineRadio2" value="0">
              <label class="form-check-label" for="inlineRadio2">Comercial</label>
            </div>
          </div>
          <div class="form-group">
            <label for="client">Cliente</label>
            <select type="text" class="form-control" name="client_id">
              @foreach( $clients as $client )
              <option value="{{ $client->id }}">{{ $client->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-6">
            <label for="team">Equipo participante</label>
            <select name="equipo[]" id="team" class="form-control" multiple>
              @foreach($users as $user)
              <option value="{{ $user->id }}">{{ $user->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-sm-6">
            <label for="desc">Descripción</label>
            <textarea rows="4" class="form-control" name="desc"></textarea>
          </div>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection