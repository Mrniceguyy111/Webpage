@extends('template')
@section('title', "Blogs!")

@section('content')
<main class="blogs-main">
    <section class="blogs-news-container">
        <div class="grid-container blogs-main-new">
            <h2>Blogs</h2>
            <div class="blogs-news-img-container">
                <img src="{{asset('images/banner.png')}}" alt="">
            </div>
            <div class="blogs-news-info-container">
                <h2>Hatchi vs Laika</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam vero veniam officiis? Error magnam
                    numquam.</p>
                <a href="" class="blogs-button">Leer más</a>
            </div>
        </div>
    </section>
    <section class="blogs-posts-container">
        <div class="grid-container">
            <h3></h3>
            <article class="post-container">
                <img src="assets/banner.png" alt="">
                <p>Hatchi vs Laika</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ut a fugiat soluta consequatur nisi
                    sunt.</p>
                <a href="" class="blogs-button">Leer más</a>
            </article>
            <article class="post-container">
                <img src="{{asset('images/banner.png')}}" alt="">
                <p>Hatchi vs Laika</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ut a fugiat soluta consequatur nisi
                    sunt.</p>
                <a href="" class="blogs-button">Leer más</a>
            </article>
            <article class="post-container">
                <img src="{{asset('images/banner.png')}}" alt="">
                <p>Hatchi vs Laika</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ut a fugiat soluta consequatur nisi
                    sunt.</p>
                <a href="" class="blogs-button">Leer más</a>
            </article>
            <article class="post-container">
                <img src="{{asset('images/banner.png')}}" alt="">
                <p>Hatchi vs Laika</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ut a fugiat soluta consequatur nisi
                    sunt.</p>
                <a href="" class="blogs-button">Leer más</a>
            </article>
            <article class="post-container">
                <img src="{{asset('images/banner.png')}}" alt="">
                <p>Hatchi vs Laika</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ut a fugiat soluta consequatur nisi
                    sunt.</p>
                <a href="" class="blogs-button">Leer más</a>
            </article>
            <article class="post-container">
                <img src="{{asset('images/banner.png')}}" alt="">
                <p>Hatchi vs Laika</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ut a fugiat soluta consequatur nisi
                    sunt.</p>
                <a href="" class="blogs-button">Leer más</a>
            </article>
        </div>
    </section>
</main>
@endsection