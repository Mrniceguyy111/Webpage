@extends('template')
@section('title', $post->title)
@section('content')
<h1>{{$post->title}} </h1><br>

{{$post->content}} <br>


By: {{$post->user->name}} - {{$post->user->email}} <br>
Editado: {{$post->refresh_at}} <br>
Creado: {{$post->published_at}} <br>
@endsection