@extends('layouts.app')

@section('content')
<h1>Posts</h1>
 @if(count($posts) > 1)
     @foreach($posts as $post)
    <div class="well">
            <li class="list-group-item">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
    <small>Written on {{$post->created_at}}</small>
            </li>
    </div>
     @endforeach
 @else
   <p>No Posts found.</p>
 
 @endif 

@endsection