@Extends ('layouts.master')
@section('main')
<div  class="row">
    <div class="col-sm-6">
        <h1>Editar datos de usuario</h1>
        <div class="form-wrap">
            <form action="{{ action('UserController@putEdit', ['id'=>$user->id]) }}" method="POST">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-group">
                    <label for="#name">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}" required>
                </div>
                <div class="form-group">
                    <label for="#cargo">Cargo</label>
                    <input type="text" class="form-control" name="cargo" id="tel" value="{{$user->cargo}}" required>
                </div>
                <div class="form-group">
                    <label for="#email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}" required>
                </div>
                <div class="form-group">
                    <label for="#pass">Password</label>
                    <input type="text" class="form-control" name="password" id="pass">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection