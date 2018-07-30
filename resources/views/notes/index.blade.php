@extends('layouts.master')
@section('main')
<div  class="row">
    <div class="col">
        <h1>Todas las notas</h1>
        <table  class="table table-striped table-condensed">
            <thead>
                <th>Título</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Autor</th>
                <th>Opciones</th>
            </thead>
            <tbody>
                @foreach($notes as $note)
                    <tr>
                        <td>{{ $note->title }}</td>
                        <td>{{ $note->desc }}</td>
                        <td>{{ Carbon\Carbon::parse($note->date)->toDateString() }}</td>
                        <td>{{ $note->user->name }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ action('NoteController@getSingle', ['id'=>$note->id]) }}" class="btn btn-secondary btn-sm" title=""><i class="fa fa-eye"></i></a>
                                <a href="{{ action('NoteController@getEdit', ['id'=>$note->id]) }}" class="btn btn-secondary btn-sm" title=""><i class="fa fa-edit"></i></a>
                                <form method="POST" action="{{ action('NoteController@deleteDelete', ['id'=>$note->id]) }}">
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
    </div>
</div>
@endsection