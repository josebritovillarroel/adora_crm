@extends("layouts.master")
@section('main')
	<div class="card chat-container my-2">
		<div class="card-header">
			Negociaciones
		</div>
		<div class="card-body">
			<ul class="list-group">
			@forelse( $projects as $p )
				<a class="list-group-item list-group-item-action" href="{{ route('negociation.show', ['id'=>$p->id]) }}">{{ $p->title }}</a>
			@empty
				<li>
					<div class="alert-dismissible alert alert-warning">
						No hay proyectos registrados aún
						<a class="btn close" data-close="alert">&times</a>
					</div>
				</li>
			@endforelse
			</ul>
		</div>
		<div class="card-footer"></div>
	</div>
@endsection