@extends('layouts.app')

@section('content')

<div class="container">
            <h3>{{$post->title}}</h3>
        
            <p>{{$post->excerpt}}</pz>

            <p>{{$post->body}}</p>

            <p>{{$post->category}}</p>

            <p>Usuario: {{$post->user->name}}</p>
        
            <label>Image</label>
            <input type="image" src="{{$post->image}}">
            <<img src="{{$post->image}}" alt="">

</div>

@endsection