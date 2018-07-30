@extends('layouts.master')
@section('main')
<div class="row">
    <div class="col-sm-6 offset-sm-3 text-center">
        <h1>Detalle del cliente</h1>
        <div class="form-wrap">
            <form>
                <div class="form-group">
                    <label for="#name">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$a->name}}" required disabled>
                </div>
                <div class="form-group">
                    <label for="#email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{$a->email}}" required disabled>
                </div>
                <div class="form-group">
                    <label for="#dir">Dirección</label>
                    <input type="text" class="form-control" name="dir" id="dir" value="{{$a->dir}}" required disabled>
                </div>
                <div class="form-group">
                    <label for="#bussiness">Rama comercial</label>
                    <input type="text" class="form-control" name="bussiness" id="bussiness" value="{{$a->bussiness}}" required disabled>
                </div>
                <div class="form-group">
                    <label for="#tel">Teléfono</label>
                    <input type="tel" class="form-control" name="tel" id="tel" value="{{$a->tel}}" required disabled>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
