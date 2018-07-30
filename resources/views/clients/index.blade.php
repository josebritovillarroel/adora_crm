@extends('layouts.master')
@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 style="text-align:center">Clientes Actuales</h1>
        <table  class="table">
            <thead>
                <th>Nombre / Empresa</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Direccion</th>
                <th>Interes / Negocio</th>
                <th>Opciones</th>
            </thead>
            <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->tel }}</td>
                        <td>{{ $client->dir}}</td>
                        <td>{{ $client->bussiness}}</td>
                          <td>
                           <div class="btn-group">
                            <a href="{{ action('ClientController@getView', ['id'=>$client->id]) }}" class="btn btn-secondary" title=""><i class="fa fa-eye"></i></a>
                            <a href="{{ action('ClientController@getEdit', ['id'=>$client->id]) }}" class="btn btn-secondary" title=""><i class="fa fa-edit"></i></a>
                            <form method="POST" action="{{ action('ClientController@deleteDelete', ['id'=>$client->id]) }}">
                                {{ method_field('DELETE') }}
                                <button type="submit" title="" class="btn btn-secondary"><i class="fa fa-trash"></i></button>
                            </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{route('create_client')}}"><button class="btn btn-primary"> Registrar un nuevo Cliente</button></a>
    </div>
</div>
@endsection



