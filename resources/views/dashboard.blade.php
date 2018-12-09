@extends('layouts.app')

@section('content')
<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <a href="/posts/create" class="btn btn-primary float-right">Create Post</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-body">
                                
                                <h3>Your Blog Posts</h3>
                                @if(count($posts) > 0)
                                <table class="table table-striped">
                                    <tr><th>Image</th>
                                        <th>Title</th>
                                        <th>Action</th>
                                        <th></th>
                                    </tr>
                                    @foreach($posts as $post)
                                        <tr>
                                            <td><a href="/posts/{{ $post->id }}"><img class="img-thumbnail" style="width:auto;height:80px;"  src="/storage/{{$post->cover_image}}"></a></td>
                                            <td><a href="/posts/{{ $post->id }}">{{$post->title}}</a></td>
                                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                            <td>
                                                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                                    {{Form::hidden('_method', 'DELETE')}}
                                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                                {!!Form::close()!!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            @else
                                <p>You have no posts</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


