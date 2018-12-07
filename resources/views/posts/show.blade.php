@extends('layouts.app')

@section('content')
<br><br><br>
<a href="/posts" class="btn btn-default"> Go Back </a>
<h1>{{ $post->title }}</h1>
<div class="row">
<div class="col-md-4 col-sm-4"><img src="/storage/cover_images/{{$post->cover_image}}"></div>
<div class="col-md-8 col-sm-8">
	{{ $post->body }}
</div>
</div>

	<hr>
	<div class="alert alert-info">
  		Written on {{ $post->created_at }} by <strong>{{ $post->user->name }}</strong>
	</div>
	@if(!Auth::guest())
		@if(Auth::user()->id == $post->user_id)
		<div class="row">
			<div class="col-md-1">
			<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a></div>
			<div class="col-md-0">
			{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
		                {{Form::hidden('_method', 'DELETE')}}
		                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
		            {!!Form::close()!!}</div>
		</div>
	    @endif
    @endif
@endsection