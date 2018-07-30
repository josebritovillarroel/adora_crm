@extends ('layouts.master')
@section('main')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class=""> Bienvenido a AdoraCrm </h1>
      <h2 class="mt-5">Primeros Pasos en AdoraCrm</h2>
      <br>
      @if( Auth::user()->hasRole('Admin') )
      <!--usuarios-->
      <h2> <i class="fas fa-users" style="font-size:200%"></i> Usuarios</h2>
      <div class="col-md-8">
        <p>Son los empleados que participan en los desarrollos de proyectos de la empresa, como por ejemplo Angelica (Diseñadora), Manuel (Programador), Isabel (Desarrollador Front-End), entre otros.</p>
        <a  href="users/create" class="btn btn-primary"><i class="fas fa-user" style="font-size:"> </i> Crear Usuario</a>
      </div>
      @endif
      <br>
    </div>
    @if( Auth::user()->hasRole('Admin') )
    <!--clientes-->
    <div class="col-md-12">
      <br>
      <h2> <i class="fas fa-male" style="font-size:200%"> </i> <i class="fas fa-male" style="font-size:200%"></i> <i class="fas fa-male" style="font-size:200%"></i> Clientes</h2>
      <div class="col-md-8">
        <p>Son las empresas o personas para los cuales se desarrollan proyectos, como por ejemplo: Samsungs Groups, Apple Inc, Julian Montalban, entre otros.</p>
        <a  href="clients/create" class="btn btn-primary"> <i class="fas fa-male" style="font-size:150%"> </i>    Añadir Clientes</a>
      </div>
      <br>
    </div>
    @endif
    @if( Auth::user()->hasRole('Admin') )
    <!--proyectos-->
    <div class="col-md-12">
      <br>
      <h2> <i class="fas fa-dollar-sign"  style="font-size:150%"></i><i class="fas fa-dollar-sign"  style="font-size:150%"></i> Proyectos</h2>
      <div class="col-md-8">
        <p>Son Los distintos trabajos que se estan desarrollando en la empresa, con el equipo conformado, las fechas de inicio, fin y la consecucion de los mismos.</p>
        <a  href="projects/create" class="btn btn-primary"> <i class="fas fa-folder" style="font-size:120%"> </i> Añadir Proyectos</a>
      </div>
    </div>
    @endif
    <!--Recordatorios-->
    <div class="col-md-12">
      <br>
      <h2> <i class="fas fa-bell"  style="font-size:150%"></i> Recordatorios / Tareas</h2>
      <div class="col-md-8">
        <p>Son las tareas o recordatorios que te puedes asignar a ti mismo o a otros en la empresa, como informacion adicional o referente a algun proyecto.</p>
        <a  href="reminders/create" class="btn btn-primary"> <i class="fas fa-bell" style="font-size:150%"> </i> Añadir Recordatorios / Tareas </a>
      </div>
    </div>
  </div>
</div>
@endsection