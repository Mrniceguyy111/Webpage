@extends('template')
@section('title', $post->title)
@section('content')
<main>
    <section class="grid-container blogpost-img-container">
        <img src="{{asset('images/banner.png')}}" alt="">
    </section>
    <section class="blogpost-main-container">
        <div class="grid-container">
            <h3>{{$post->category_data->name}}</h3>
            <article>
                <h1>{{$post->title}}</h1>
                <p>{{$post->content}}</p>
        </div>
    </section>
</main>
@endsection