@extends('template')
@section('title', "Blogs!")

@section('content')
<main class="blogs-main">
    <section class="blogs-news-container">
        <div class="grid-container blogs-main-new">
            <h2>Ultimo blog!</h2>
            <div class="blogs-news-img-container">
                <img src="{{asset('storage/blogs/'. $lastPost->banner_image )}}" alt="{{$lastPost->name}}">
            </div>
            <div class="blogs-news-info-container">
                <h2>{{$lastPost->title}}</h2>
                <p>{{$lastPost->getExcerptAttribute()}}</p>
                <a href="{{route('post.show', [
                    'postCategory' => $lastPost->category_data->slug, 
                    'post' => $lastPost->slug
                    ])}}" class="blogs-button hover:bg-principal hover:text-white">Leer más</a>
            </div>
        </div>
    </section>
    <section class="blogs-posts-container">
        <div class="grid-container">
            <h3>Nuestros ultimos blogs</h3>
            @foreach ($post as $item)
            <article class="post-container">
                <img src="{{asset('storage/blogs/'. $item->banner_image )}}" alt="{{$item->name}}">
                <p class="font-semibold">{{$item->title}}</p>
                <p>{{$item->getExcerptAttribute()}}</p>
                <a href="{{route('post.show', [
                    'postCategory' => $item->category_data->slug, 
                    'post' => $item->slug
                    ])}}" class="blogs-button hover:bg-principal hover:text-white">Leer más</a>
            </article>
            @endforeach
        </div>
    </section>
</main>
@endsection