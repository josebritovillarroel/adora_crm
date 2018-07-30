@extends('layouts.master')
@section ('main')
<div  class="row">
    <div class="col-sm-6">
        <h1>Detalle del usuario</h1>
        <div class="form-wrap">
            <form>
                <div class="form-group">
                    <label for="#name">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}" required disabled>
                </div>
                <div class="form-group">
                    <label for="#email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}" required disabled>
                </div>
                <div class="form-group">
                    <label for="#dir">Cargo</label>
                    <input type="text" class="form-control" name="dir" id="dir" value="{{$user->cargo}}" required disabled>
                </div>
                <div class="form-group">
                    <a href="{{ route('users.index') }}" class="btn btn-primary">Volver al listado</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection