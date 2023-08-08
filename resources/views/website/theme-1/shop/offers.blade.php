@extends('template')
@section('title', "Tienda")

@section('content')
<!--
    - MAIN
  -->
<main>
    <div class="product-container">
        <div class="container">
            <!--
          - sidebar
        -->
            <div class="sidebar has-scrollbar" data-mobile-menu>
                <div class="sidebar-category">
                    <div class="sidebar-top">
                        <h2 class="sidebar-title">Trabajamos para mascotas como:</h2>
                        <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                            <ion-icon name="close-outline"></ion-icon>
                        </button>
                    </div>
                    @foreach ($allAnimals as $animal)
                    <li class="sidebar-menu-category">
                        <button class="sidebar-accordion-menu" data-accordion-btn>
                            <div class="menu-title-flex">
                                <p class="menu-title">{{$animal->name}}</p>
                            </div>
                            <div>
                                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                            </div>
                        </button>
                        <ul class="sidebar-submenu-category-list" data-accordion>
                            @foreach ($animalCategory as $category)
                            <li class="sidebar-submenu-category">
                                <a href="{{route('shop.category', [
                          'animal' => $animal->name,
                          'animalCategory' => $category->slug
                          ])}}" class=" sidebar-submenu-title">
                                    <p class="product-name">{{$category->name}}</p>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                </div>
            </div>
            <!--
            - Gird de los productos
            
          -->
            <div class="product-main">
                <h2 class="title">¡OFERTAS IMPERDIBLES!</h2>
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
                            <a href="{{route('shop.product',[
                                'animal' => $item->getAnimal->name,
                                'animalCategory' => $item->getCategory->slug,
                                'product' => $item->slug,
                              ])}}" class="showcase-category">{{$item->getCategory->name}}</a>
                            <a href="{{route('shop.product',[
                                'animal' => $item->getAnimal->name,
                                'animalCategory' => $item->getCategory->slug,
                                'product' => $item->slug,
                              ])}}">
                                <h3 class="showcase-title">{{$item->name}}</h3>
                            </a>
                            {{-- <div class="showcase-rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                            </div> --}}
                            @if ($item->discount == 0) <div class="price-box">
                                <p class="price">${{$item->getCorrectPrice()}}</p>
                            </div>
                            @else
                            <div class="price-box">
                                <p class="price">${{$item->getPriceWithDiscount()}}</p>
                                <del>${{$item->getCorrectPrice()}}</del>
                            </div>
                            @endif

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