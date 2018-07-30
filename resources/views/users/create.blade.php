@extends ('layouts.master')
@section('main')
<div  class="row">
    <div class="col-sm-6">
        <h1>Detalle del usuario</h1>
        <div class="form-wrap">
            <form action="{{action('UserController@postCreate')}} " method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="#name">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name"  required >
                </div>
                <div class="form-group">
                    <label for="#dir">Cargo</label>
                    <input type="text" class="form-control" name="cargo" id="cargo" required >
                </div>
                <div class="form-group">
                    <label for="#email">Email</label>
                    <input type="email" class="form-control" name="email" id="email"  required >
                </div>
                <div class="form-group">
                    <label for="#pass">Password</label>
                    <input type="password" class="form-control" name="pass" id="password" required >
                </div>
                <div class="form-group">
                    <label for="#file"> Subir imagen</label>
                    <input type="file" class="form-control" name="file" id="file">
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary"> Crear</button> 
                </div>
            </form>
        </div>
    </div>
</div>
@endsection