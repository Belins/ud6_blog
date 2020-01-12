@extends('layouts.app')

@section('content')

<div class="container">
            <h3>{{$post->title}}</h3>
        
            <label>Description</label>
            <p>{{$post->description}}</pz>

            <label>Body</label>
            <p>{{$post->body}}</p>

            <label>Category</label>
            <p>{{$post->category}}</p>
        
            <label>Image</label>
            <input type="file" name="img" src="{{$post->image}}">

</div>

@endsection