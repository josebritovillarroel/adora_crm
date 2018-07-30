@extends  ('layouts.master')
@section ('main')
<div  class="row">
    <div class="col-md-12">
        <h1>Negociaciones</h1>
        <table  class="table">
            <thead>
                <th>Cliente</th>
                <th>Proyecto</th>
                <th>Mensaje</th>
                <th>Fecha</th>
            </thead>
            <tbody>
                @foreach ( $negociations as $negociation)

                    <tr>
                        <td>{{ $negociation->Client->name }}</td>
                        <td>{{ $negociation->Project->title }}</td>
                        <td>{{ $negociation->message }}</td>
                        <td>{{ $negociation->date }}</td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection