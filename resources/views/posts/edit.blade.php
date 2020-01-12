@extends('layouts.app')

@section('content')

<form action="{{route('posts.update', $post->id)}}" method="post">
	@method('PUT')
 @include('posts._form')

</form>
@endsection