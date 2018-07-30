@extends('layouts.master')
@section('main')
<div  class="row">
    <div class="col-md-12">
        <h1>Proyectos Comerciales</h1>
        <table  class="table">
            <thead>
                <th>Título</th>
                <th>Tipo</th>
                <th>Inicio</th>
                <th>Fin</th>
                <th>Cliente</th>
                <th>Status</th>
                <th>Opciones</th>
            </thead>
            <tbody>
               
                @foreach($projects as $project)
                    @if($project->internal==false)
                    <tr>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->type }}</td>
                        <td>{{ Carbon\Carbon::parse( $project->start )->toDateString() }}</td>
                        <td>{{ Carbon\Carbon::parse( $project->end )->toDateString() }}</td>
                        <td>{{ $project->client->name }}</td>
                        <td>{{ $project->status }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ action('ProjectController@getSingle', ['id'=>$project->id]) }}" class="btn btn-secondary" title=""><i class="fa fa-eye"></i></a>
                                <a href="{{ action('ProjectController@getEdit', ['id'=>$project->id]) }}" class="btn btn-secondary" title=""><i class="fa fa-edit"></i></a>
                                <form method="POST" action="{{ action('ProjectController@deleteDelete', ['id'=>$project->id]) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" title="" class="btn btn-secondary last"><i class="fa fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection