@extends('layouts.app')
<br><br><br>
@section('content')

<h1>POSTS</h1>

    @if(count($posts)>0)
                <div class="row">
                    @foreach($posts as $post)
                    <div class="col-6">
                        <br>
                        <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                        <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small><br>
                        <a href="/posts/{{ $post->id }}"><img src="/storage/{{$post->cover_image}}"></a>
                    </div>
                    @endforeach
                </div>
            <br>
            {{ $posts->links() }}
        @else 
            <p>No record found! </p>
    @endif


@endsection