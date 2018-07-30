@extends("layouts.master")
@section("main")
<h1>Usuarios registrados </h1>
<table class="table">
    <thead>
        <th>Nombre</th>
        <th>Email</th>
        <th>Cargo</th>
        <th>Opciones</th>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->cargo }}</td>
            <td>
                <div class="btn-group">
                    <a href="{{ action('UserController@getView', ['id'=>$user->id]) }}" class="btn btn-secondary btn-sm" title=""><i class="fa fa-eye"></i></a>
                                    <a href="{{ action('UserController@getEdit', ['id'=>$user->id]) }}" class="btn btn-secondary btn-sm" title=""><i class="fa fa-edit"></i></a>
                    <form method="POST" action="{{ action('UserController@deleteDelete', ['id'=>$user->id]) }}">
                                        {{ method_field('DELETE') }}
                        <button type="submit" title="" class="btn btn-secondary btn-sm"style="border-top-left-radius: 0; border-bottom-left-radius: 0;"><i class="fa fa-trash"></i></button>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection