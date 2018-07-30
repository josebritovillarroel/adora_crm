@extends('layouts.master')
@section('main')
<div class="row">
    <div class="col-sm-6 offset-sm-3">
        <h1>Registrar un nuevo cliente</h1>
        <div class="form-wrap">
            <form action="{{ action('ClientController@postCreate') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="#name">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="#email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="#dir">Dirección</label>
                    <input type="text" class="form-control" name="dir" id="dir" required>
                </div>
                <div class="form-group">
                    <label for="#bussiness">Rama comercial</label>
                    <input type="text" class="form-control" name="bussiness" id="bussiness" required>
                </div>
                <div class="form-group">
                    <label for="#tel">Teléfono</label>
                    <input type="tel" class="form-control" name="tel" id="tel" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection