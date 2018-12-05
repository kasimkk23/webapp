@extends('layouts.app')

@section('content')
<br><br><br>
<h1>POSTS</h1>
@if(count($posts)>0)
        
            @foreach($posts as $post)
            	<div class="well">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
    	                <h3 class="list-group-item"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
    	                <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
                    </div>
                </div>
            @endforeach
            {{ $posts->links() }}
        @else 
        	<p>No record found! </p>
    @endif


@endsection