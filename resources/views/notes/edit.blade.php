@extends('layouts.master')
@section('main')
<form action="{{ action('NoteController@putEdit', ['id'=>$note->id]) }}" method="POST">
<h1>Editar la nota</h1>
<div  class="row">
    <div class="col-sm-6">
        <div class="form-wrap">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="#name">Título</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{$note->title}}" required >
                </div>
                <div class="form-group">
                    <label for="date">Fecha</label>
                    <input type="date" class="form-control" name="date" id="date" value="{{$note->date}}" required >
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="desc">Descripción</label>
            <textarea rows="5" class="form-control" name="desc" id="desc" required >
                {{$note->desc}}
            </textarea>
        </div>
    </div>
</div>
</form>
@endsection