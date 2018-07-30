@extends('layouts.master')
@section('main')
<div  class="row">
  <div class="col-md-12">
    <h1>Todos los Proyectos</h1>
    @if( $projects->count() )
    <table  class="table">
      <thead>
        <th>Título</th>
        <th>Tipo</th>
        <th>Inicio</th>
        <th>Fin</th>
        <th>Cliente</th>
        <th>Interno / Comercial</th>
        <th>Status</th>
        <th>Opciones</th>
      </thead>
        <tbody>
          @foreach($projects as $project)
            <tr>
              <td>{{ $project->title }}</td>
              <td>{{ $project->type }}</td>
              <td>{{ Carbon\Carbon::parse( $project->start )->toDateString() }}</td>
              <td>{{ Carbon\Carbon::parse( $project->end )->toDateString() }}</td>
              <td>{{ $project->client->name }}</td>
              @if($project->internal==true)
              <td>Interno</td>
              @else
              <td> Comercial</td>
              @endif
              <td>{{ $project->status }}</td>
              <td>
                <div class="btn-group">
                  <a href="{{ action('ProjectController@getSingle', ['id'=>$project->id]) }}" class="btn btn-dark" title=""><i class="fa fa-eye"></i></a>
                  <a href="{{ action('ProjectController@getEdit', ['id'=>$project->id]) }}" class="btn btn-dark" title=""><i class="fa fa-edit"></i></a>
                  <form method="POST" action="{{ action('ProjectController@deleteDelete', ['id'=>$project->id]) }}" class="deletion-form">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" title="" class="btn btn-dark last"><i class="fa fa-trash"></i></button>
                  </form>
                  @if( Auth::user()->hasRole('Admin') )
                    <a href="{{ route('project.finish', ['id'=>$project->id]) }}" class="btn btn-dark" title="Marcar como finalizado"><i class="fas fa-check"></i></a>
                  @endif
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
    </table>
    @else
      <div class="alert alert-info alert-dismissible">
        <i class="fa fa-search"></i> No hay proyectos coincidentes con el criterio de busqueda
        <button class="close" data-dismiss="alert">&times</button>
      </div>
    @endif
    <a href="{{route('projects.create')}}"><button class="btn btn-primary"> Registrar un nuevo Proyecto</button></a>
  </div>
</div>
@endsection