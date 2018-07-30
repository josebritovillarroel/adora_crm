@extends('layouts.master')
@section('main')
<div  class="row">
    <div class="col-md-12">
        <h1>Todos los recordatorios / Tareas</h1>
        <table  class="table">
            <thead>
                <th>Proyecto Asociado</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Prioridad</th>
                <th>Autor</th>
                <th>Creacion</th>
                <th>Opciones</th>
            </thead>
            <tbody>
                @foreach($reminders as $reminder)
                    <tr>
                        <td>{{ ( $reminder->project ) ? $reminder->project->title : "Ninguno" }}</td>
                        <td>{{ $reminder->title }}</td>
                        <td>{{ $reminder->desc }}</td>
                        <td>{{ $reminder->priority }}</td>
                        <td>{{ $reminder->user->name }} {{ $reminder->user->cargo }}</td>
                        <td>{{ Carbon\Carbon::parse($reminder->date)->toDateString() }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ action('ReminderController@getSingle', ['id'=>$reminder->id]) }}" class="btn btn-secondary btn-sm" title=""><i class="fa fa-eye"></i></a>
                                <a href="{{ action('ReminderController@getEdit', ['id'=>$reminder->id]) }}" class="btn btn-secondary btn-sm" title=""><i class="fa fa-edit"></i></a>
                                <form method="POST" action="{{ action('ReminderController@deleteDelete', ['id'=>$reminder->id]) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" title="" class="btn btn-secondary btn-sm last"><i class="fa fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
         <a href="{{route('reminders_create')}}"><button class="btn btn-primary"> Crear nuevo recordatorio</button></a>
    </div>
</div>
@endsection