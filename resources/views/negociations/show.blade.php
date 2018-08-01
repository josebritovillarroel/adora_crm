@extends("layouts.master")
@section("main")
	<meta name="projectid" value="{{ $project->id }}">
	<meta name="ownid" value="{{ Auth::User()->id }}">
	<div class="card">
		<div class="card-header">
			{{ $project->title }}
		</div>
		<div class="card-body">
			<ul class="negociations">
				<li v-for="message in msgs" v-bind:class=" { right : ownId == message.user_id } ">
				@{{message.text}}</li>
			</ul>
		</div>
		<div class="card-footer">
			<div class="input-group">
				<input class="form-control" name="" v-model="msg" @keyup.enter="postMessage()"></input>
				<div class="input-group-append">
					<button class="btn btn-primary" @click="postMessage()"><i class="far fa-paper-plane"></i></button>
				</div>
			</div>
		</div>
	</div>
@endsection