@extends('template')
@section('title', $post->title)
@section('content')
<h1>{{$post->title}} </h1><br>

    {{$post->content}} <br>
    {{$post->published_at}} <br>

By: {{$post->user->name}} - {{$post->user->email}}
@endsection