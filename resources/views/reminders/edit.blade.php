@extends('layouts.master')
@section('main')
<h1>Editar recordatorio</h1>
<form action="{{ action('ReminderController@putEdit', ['id'=>$reminder->id]) }}" method="POST">
<div  class="row">
    <div class="col-sm-6">
        <div class="form-wrap">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="#name">Título</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{$reminder->title}}" required >
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="date">Fecha</label>
                        <input type="date" class="form-control" name="date" id="date" value="{{$reminder->date}}" required >
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="prior">Prioridad</label>
                        <input type="text" class="form-control" name="prior" id="prior" value="{{ $reminder->prior }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="desc">Descripción</label>
            <textarea rows="5" class="form-control" name="desc" id="desc" required >{{$reminder->desc}}</textarea>
        </div>
    </div>
</div>
</form>
@endsection