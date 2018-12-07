

@extends('layouts.app')
@section('content')
<br><br><br>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">{{$title}}</h1>
    <p class="lead">Muhammad Qasim and Sonal Bansal, we two are the developer of this app and this is the university web seminar for 3rd semester.
    	Note this project is just for education purposes and we will use this app to test different testing features.</p>
  </div>
</div>
<p class="lead">
    <a class="btn btn-primary btn-lg center" href="/posts" role="button">View Posts</a>
  </p>
@endsection('content')
