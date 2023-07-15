@extends('template')
@section('title', "Membresias")

@section('content')
<div class="overlay" data-overlay></div>
<!--
    - MAIN
  -->
<main>
    <!--
      - Inicio banner
    -->
    <!--
      - animalss list
    -->
    <!--
      - productos
    -->
    <div class="product-container">
        <div class="container">
            <!--
          - sidebar
        -->
            <div class="sidebar  has-scrollbar" data-mobile-menu>
                <div class="sidebar-category">
                    <div class="sidebar-top">
                        <h2 class="sidebar-title">Trabajamos para mascotas como:</h2>
                        <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                            <ion-icon name="close-outline"></ion-icon>
                        </button>
                    </div>
                    <ul class="sidebar-menu-category-list">
                        <li class="sidebar-menu-category">
                            <button class="sidebar-accordion-menu" data-accordion-btn>
                                <div class="menu-title-flex">
                                    <p class="menu-title">Perros</p>
                                </div>
                                <div>
                                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                </div>
                            </button>
                            <ul class="sidebar-submenu-category-list" data-accordion>
                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">1</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="product-showcase">
                    <h3 class="showcase-heading">Lo mas vendido!</h3>
                    <div class="showcase-wrapper">
                        <div class="showcase-container">
                            <div class="showcase">
                                <a href="#" class="showcase-img-box">
                                    <img src="{{asset('images/logo.png')}}" alt="" width="75" height="75"
                                        class="showcase-img">
                                </a>
                                <div class="showcase-content">
                                    <a href="#">
                                        <h4 class="showcase-title">Lorem, ipsum.</h4>
                                    </a>
                                    <div class="price-box">
                                        <del>$5.00</del>
                                        <p class="price">$4.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
            - Gird de los productos
            
          -->
            <div class="product-main">
                <h2 class="title">{{$animals->name}}!</h2>
                <div class="product-grid">
                    @foreach ($product as $item)
                    <div class="showcase">
                        <div class="showcase-banner">
                            <img src="{{asset('images/juguetes.png')}}" alt="Mens Winter Leathers Jackets" width="300"
                                class="product-img default">
                            <img src="{{asset('images/juguetes.png')}}" alt="Mens Winter Leathers Jackets" width="300"
                                class="product-img hover">
                        </div>
                        <div class="showcase-content">
                            <a href="#" class="showcase-category">{{$item->getCategory->name}}</a>
                            <a href="#">
                                <h3 class="showcase-title">{{$item->name}}</h3>
                            </a>
                            <div class="showcase-rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                            </div>
                            <div class="price-box">
                                <p class="price">${{$item->subscription_price}}</p>
                                <del>${{$item->price}}</del>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    @endsection