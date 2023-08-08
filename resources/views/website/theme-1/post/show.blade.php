@extends('template')
@section('title', $post->title)
@section('content')
<main>
    <section class="grid-container blogpost-img-container">
        <img src="{{asset('storage/blogs/'. $post->banner_image )}}" alt="">
    </section>
    <section class="blogpost-main-container">
        <div class="grid-container">
            {{-- <h3>{{$post->category_data->name}}</h3> --}}
            <h3>¡Pronto!</h3>
            <article>
                {{-- <h1>{{$post->title}}</h1> --}}
                <h1>¡Pronto!</h1>
                <p>{!! $post->content !!}</p>
        </div>
    </section>
</main>
@endsection