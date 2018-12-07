@extends('layouts.app')
<br><br><br>
@section('content')

<h1>POSTS</h1>
@if(count($posts)>0)
                    <div class="row">
                        @foreach($posts as $post)
                        <div class="col-4">
                            <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                            <small>Written on {{ $post->created_at }} by <strong>{{ $post->user->name }}</strong></small>
                            <a href="/posts/{{ $post->id }}"><img class="img-thumbnail" src="/storage/cover_images/{{$post->cover_image}}"></a><br><br><hr>
                        </div>
                        @endforeach
                    </div>
            
            {{ $posts->links() }}
        @else 
        	<p>No record found! </p>
    @endif


@endsection