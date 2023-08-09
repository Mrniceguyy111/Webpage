@extends('template')
@section('title', 'Inicio!')



@section('content')

<div class="overlay" data-overlay></div>
<a class="whats-app" href="https://wa.link/hatchi" target="_blank">
  <box-icon name='whatsapp' type='logo' color='#ffffff' class="my-float"></box-icon>
</a>
<div class="modal" data-modal>
  <div class="modal-close-overlay" data-modal-overlay></div>
  <div class="modal-content">
    <button class="modal-close-btn" data-modal-close>
      <ion-icon name="close-outline"></ion-icon>
    </button>
    <div class="newsletter-img">
      <img src="{{asset('images/logo.png')}}" alt="subscribe newsletter" width="400" height="400">
    </div>
    <div class="newsletter">
      <form action="#">
        <div class="newsletter-header">
          <h3 class="newsletter-title">Bienvenido a Hatchi</h3>
          <p class="newsletter-desc">
            La unica <b>E-commerce</b> que se preocupa por tus mascotas.
          </p>
        </div>
        <input type="email" name="email" class="email-field" placeholder="Email Address" required>
        <button type="submit" class="btn-newsletter">Ir ahora!</button>
      </form>
    </div>
  </div>
</div>
<!--
    - NOTIFICATION TOAST
  -->
<div class="notification-toast" data-toast>
  <button class="toast-close-btn" data-toast-close>
    <ion-icon name="close-outline"></ion-icon>
  </button>
  <div class="toast-banner">
    <img src="{{asset('images/logo.png')}}" alt="Rose Gold Earrings" width="80" height="70">
  </div>
  <div class="toast-detail">
    <p class="toast-message">
      ¿Sabias que tenemos
    </p>
    <p class="toast-title">
      LOS MEJORES PRECIOS?
    </p>
    <p class="toast-meta">
      Miralo tu mismo!
    </p>
  </div>
</div>
<!--
    - HEADER
  -->

<!--
    - MAIN
  -->
<main>
  <!--
      - Inicio banner
    -->
  <div class="banner">
    <div class="container">
      <div class="slider-container has-scrollbar">
        <div class="slider-item">
          <img src="{{asset('images/test/banner.png')}}" alt="women's latest fashion sale" class="banner-img">
          <div class="banner-content">
            <p class="banner-subtitle">Hola, Somos</p>
            <h2 class="banner-title">Hatchi</h2>
            <p class="banner-text">
              Lo mejor, de lo mejor
            </p>
            <a href="#" class="banner-btn">Enterate</a>
          </div>
        </div>
        <div class="slider-item">
          <img src="{{asset('images/test/banner.png')}}" alt="women's latest fashion sale" class="banner-img">
          <div class="banner-content">
            <p class="banner-subtitle">Hola, Somos</p>
            <h2 class="banner-title">Hatchi</h2>
            <p class="banner-text">
              Lo mejor, de lo mejor
            </p>
            <a href="#" class="banner-btn">Enterate</a>
          </div>
        </div>
        <div class="slider-item">
          <img src="{{asset('images/test/banner.png')}}" alt="women's latest fashion sale" class="banner-img">
          <div class="banner-content">
            <p class="banner-subtitle">Hola, Somos</p>
            <h2 class="banner-title">Hatchi</h2>
            <p class="banner-text">
              Lo mejor, de lo mejor
            </p>
            <a href="#" class="banner-btn">Enterate</a>
          </div>
        </div>
      </div>
      <!--
      - animalss list
    -->
      {{-- <div class="category">
        <div class="container">
          <h2 class="tittle">Animales como:</h2>
          <div class="category-item-container has-scrollbar">
            <div class="category-item flex flex-col text-center">
              <div class="category-img-box">
                <img src="{{asset('images/juguetes.png')}}" alt="dress & frock" width="100">
              </div>
              <div class="category-content-box ">
                <a href=" {{ route('shop.animal', 'perro' ) }}" class=" category-btn">Perros</a>
              </div>
            </div>
            <div class="category-item flex flex-col text-center">
              <div class="category-img-box">
                <img src="{{asset('images/animals/Cat.png')}}" alt="dress & frock" width="100">
              </div>
              <div class="category-content-box ">
                <a href="{{ route('shop.animal', 'gato' ) }}" class="category-btn">Gatos</a>
              </div>
            </div>
            <div class="category-item flex flex-col text-center">
              <div class="category-img-box">
                <img src="{{asset('images/animals/Fish_Reptile.png')}}" alt="dress & frock" width="100">
              </div>
              <div class="category-content-box ">
                <a href="#" class="category-btn">Reptiles</a>
              </div>
            </div>
            <div class="category-item flex flex-col text-center">
              <div class="category-img-box">
                <img src="{{asset('images/animals/Horse.png')}}" alt="dress & frock" width="100">
              </div>
              <div class="category-content-box ">
                <a href="{{ route('shop.animal', 'caballo' ) }}" class="category-btn">Caballos</a>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
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
                @foreach ($animals as $animal)
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
              </ul>
            </div>
            {{-- <div class="product-showcase">
              <h3 class="showcase-heading">Lo mas vendido!</h3>
              <div class="showcase-wrapper">
                <div class="showcase-container">
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="{{asset('images/logo.png')}}" alt="more_sell" width="75" height="75"
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
            </div> --}}
          </div>
          <!--
            - Gird de los productos
          -->
          <div class="product-main">
            <h2 class="title">Ofertas!</h2>
            <div class="product-grid">
              @foreach ($productsInOffer as $item)
              <div class="showcase">
                <div class="showcase-banner">
                  <img src="{{asset('storage/products/'. $item->principal_image_path)}}" alt="{{$item->name}}"
                    width="500" height="500" class="product-img default">
                  <img src="{{asset('storage/products/'. $item->principal_image_path)}}" alt="{{$item->name}}"
                    width="300" height="500" class="product-img hover">
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
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
                  <div class="price-box">
                    <p class="price">${{$item->getPriceWithDiscount()}}</p>
                    <del>${{$item->getCorrectPrice()}}</del>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <h2 class="title">Lo ultimo</h2>
            <div class="product-grid">
              @foreach ($lastUploadProducts as $item)
              <div class="showcase">
                <div class="showcase-banner">
                  <img src="{{asset('storage/products/'. $item->principal_image_path)}}" alt="{{$item->name}}"
                    width="300" class="product-img default">
                  <img src="{{asset('storage/products/'. $item->principal_image_path)}}" alt="{{$item->name}}"
                    width="300" class="product-img hover">
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
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
                  @if ($item->discount != 0)
                  <div class="price-box">
                    <p class="price">${{$item->getPriceWithDiscount()}}</p>
                    <del>${{$item->getCorrectPrice()}}</del>
                  </div>
                  @else
                  <div class="price-box">
                    <p class="price">${{$item->getCorrectPrice()}}</p>
                  </div>
                  @endif
                </div>
              </div>
              @endforeach
            </div>
            <h2 class="title">Perros</h2>
            <div class="product-grid">
              @foreach ($productsOfDogs as $item)
              <div class="showcase">
                <div class="showcase-banner">
                  <img src="{{asset('storage/products/'. $item->principal_image_path)}}" alt="{{$item->name}}"
                    width="300" class="product-img default">
                  <img src="{{asset('storage/products/'. $item->principal_image_path)}}" alt="{{$item->name}}"
                    width="300" class="product-img hover">
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
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
                  @if ($item->discount != 0)
                  <div class="price-box">
                    <p class="price">${{$item->getPriceWithDiscount()}}</p>
                    <del>${{$item->getCorrectPrice()}}</del>
                  </div>
                  @else
                  <div class="price-box">
                    <p class="price">${{$item->getCorrectPrice()}}</p>
                  </div>
                  @endif
                </div>
              </div>
              @endforeach
            </div>
            <h2 class="title">Gatos</h2>
            <div class="product-grid">
              @foreach ($productsOfCat as $item)
              <div class="showcase">
                <div class="showcase-banner">
                  <img src="{{asset('storage/products/'. $item->principal_image_path)}}" alt="{{$item->name}}"
                    width="300" class="product-img default">
                  <img src="{{asset('storage/products/'. $item->principal_image_path)}}" width="300"
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
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
                  @if ($item->discount != 0)
                  <div class="price-box">
                    <p class="price">${{$item->getPriceWithDiscount()}}</p>
                    <del>${{$item->getCorrectPrice()}}</del>
                  </div>
                  @else
                  <div class="price-box">
                    <p class="price">${{$item->getCorrectPrice()}}</p>
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


    <div id="promotion-bar" style="background-image: url({{ asset('images/others/abstract.png') }})" class="p-6 py-12"
      bis_skin_checked="1">
      <div class="container mx-auto" bis_skin_checked="1">
        <div class="flex flex-col lg:flex-row items-center justify-between" bis_skin_checked="1">
          <h2 class="text-center text-2xl tracki font-bold" style="color: #e7a242;">En HATCHI siempre
            <br class="sm:hidden">Aseguramos el bienestar <br> de tu mascota!
          </h2>
          <div class=" space-x-2 text-center py-2 lg:py-0" bis_skin_checked="1">
            <span class="">Lo hacemos lo mejor de lo mejor!</span>
            <span class="font-bold text-lg">Miralo!</span>
          </div>
          <a href="{{route('shop.offert')}}" rel="noreferrer noopener"
            class="bg-white px-5 mt-4 lg:mt-0 py-3 rounded-md border block dark:bg-gray-50 dark:text-gray-900 dark:border-gray-400">Comprar</a>
        </div>
      </div>
    </div>
    <div class="category">
      <div class="container">
        <h2 class="tittle text-center text-2xl font-bold my-5" style="color: #2b1411;">Trabajamos para animales como:
        </h2>
        <div class="category-item-container has-scrollbar">
          <div class="category-item flex flex-col text-center">
            <div class="category-img-box">
              <img src="{{asset('images/animals/Dog.png')}}" alt="dress & frock" width="150">
            </div>
            <div class="category-content-box ">
              <a href=" {{ route('shop.animal', 'perro' ) }}" class=" category-btn">Perros</a>
            </div>
          </div>
          <div class="category-item flex flex-col text-center">
            <div class="category-img-box">
              <img src="{{asset('images/animals/Cat.png')}}" alt="dress & frock" width="150">
            </div>
            <div class="category-content-box ">
              <a href="{{ route('shop.animal', 'gato' ) }}" class="category-btn">Gatos</a>
            </div>
          </div>
          <div class="category-item flex flex-col text-center">
            <div class="category-img-box">
              <img src="{{asset('images/animals/Horse.png')}}" alt="dress & frock" width="150">
            </div>
            <div class="category-content-box ">
              <a href="{{ route('shop.animal', 'caballo' ) }}" class="category-btn">Caballos</a>
            </div>
          </div>
          <div class="category-item flex flex-col text-center">
            <div class="category-img-box">
              <img src="{{asset('images/animals/Fish_Reptile.png')}}" alt="dress & frock" width="150">
            </div>
            <div class="category-content-box ">
              <a href="#" class="category-btn">Peses y Reptiles</a>
            </div>
          </div>
          <div class="category-item flex flex-col text-center">
            <div class="category-img-box">
              <img src="{{asset('images/animals/conejo.png')}}" alt="conejo" width="150">
            </div>
            <div class="category-content-box ">
              <a href="#" class="category-btn">Conejo</a>
            </div>
          </div>
          <div class="category-item flex flex-col text-center">
            <div class="category-img-box">
              <img src="{{asset('images/animals/ave.png')}}" alt="ave" width="150">
            </div>
            <div class="category-content-box ">
              <a href="#" class="category-btn">Ave</a>
            </div>
          </div>
          <div class="category-item flex flex-col text-center">
            <div class="category-img-box">
              <img src="{{asset('images/animals/cow.png')}}" alt="cow" width="150">
            </div>
            <div class="category-content-box ">
              <a href="#" class="category-btn">Vaca</a>
            </div>
          </div>
          <div class="category-item flex flex-col text-center">
            <div class="category-img-box">
              <img src="{{asset('images/animals/goat.png')}}" alt="dress & frock" width="150">
            </div>
            <div class="category-content-box ">
              <a href="#" class="category-btn">Cabra</a>
            </div>
          </div>
          <div class="category-item flex flex-col text-center">
            <div class="category-img-box">
              <img src="{{asset('images/animals/Hedgehogs_Hamsters.png')}}" alt="dress & frock" width="150">
            </div>
            <div class="category-content-box ">
              <a href="#" class="category-btn">Erizos y Hamsters</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <h2 class="mt-6 text-center text-2xl tracki font-bold" style="color: #2b1411;">¡Nuestros productos del momento!</h2>
    <div class="carrusel">
      <div class="carrusel-items">
        <div class="carrusel-item">
          <img src="{{ asset('images/toys/1.jpg') }}" alt=" banner_images" />
        </div>
        <div class="carrusel-item">
          <img src="{{ asset('images/toys/2.jpg') }}" alt="banner_images" />
        </div>
        <div class="carrusel-item">
          <img src="{{ asset('images/toys/3.jpg') }}" alt="banner_images" />
        </div>
        <div class="carrusel-item">
          <img src="{{ asset('images/toys/4.jpg') }}" alt="banner_images" />
        </div>
        <div class="carrusel-item">
          <img src="{{ asset('images/toys/5.jpg') }}" alt="banner_images" />
        </div>
        <div class="carrusel-item">
          <img src="{{ asset('images/toys/6.jpg') }}" alt="banner_images" />
        </div>
        <div class="carrusel-item">
          <img src="{{ asset('images/toys/7.jpg') }}" alt="banner_images" />
        </div>
        <div class="carrusel-item">
          <img src="{{ asset('images/toys/8.jpg') }}" alt="banner_images" />
        </div>
      </div>
    </div>
    <h2 class="mt-6 text-center text-2xl tracki font-bold" style="color: #2b1411;">¡Nuestras marcas!</h2>
    <div class="carrusel">
      <div class="carrusel-items2">
        <div class="carrusel-item">
          <img src="{{asset('images/brands/Bravecto.png')}}" alt="banner_images" />
        </div>
        <div class="carrusel-item">
          <img src="{{asset('images/brands/CANAMOR.png')}}" alt="banner_images" />
        </div>
        <div class="carrusel-item">
          <img src="{{asset('images/brands/Frontline.png')}}" alt="banner_images" />
        </div>
        <div class="carrusel-item">
          <img src="{{asset('images/brands/Max.png')}}" alt="banner_images" />
        </div>
        <div class="carrusel-item">
          <img src="{{asset('images/brands/Nat.png')}}" alt="banner_images" />
        </div>
        <div class="carrusel-item">
          <img src="{{asset('images/brands/Natural.png')}}" alt="banner_images" />
        </div>
        <div class="carrusel-item">
          <img src="{{asset('images/brands/Purina.png')}}" alt="banner_images" />
        </div>
        <div class="carrusel-item">
          <img src="{{asset('images/brands/Royal.png')}}" alt="banner_images" />
        </div>
        <div class="carrusel-item">
          <img src="{{asset('images/brands/Taste.png')}}" alt="banner_images" />
        </div>
      </div>
    </div>

    <!--
      - Testimonios, cta y servicios
    -->
    <div>
      <div class="container">
        <div class="testimonials-box">
          <!--
            - testimonios
          -->
          <div class="testimonial">
            <h2 class="title">Testimonio:</h2>
            <div class="testimonial-card">
              <div class="testimonial-imgs">
                <img src="{{asset('images/profile/JR.png')}}" alt="" class="testimonial-banner" width="70" height="70">
                <img src="{{asset('images/profile/LN.jpg')}}" alt="" class="testimonial-banner" width="70" height="70">
              </div>
              <p class="testimonial-name">Julian Ramirez</p>
              <p class="testimonial-title">Backend Developer de Hatchi</p>
              <img src="{{asset('images/testimonia.png')}}" alt="quotation" class="quotation-img" width="26">
              <p class="testimonial-desc">
                Elaborar hatchi, no es solo un trabajo, fue encaminar y reforzar mi amor por los animales, aprendi y
                considere que porfin se creo una linea 100% petfriendly para nuestros amiguitos que no hablan.
              </p>
            </div>
          </div>
          <!--
            - CTA
          -->
          <div class="cta-container">
            <video src="{{asset('videos/CtaLetras.mp4')}}" autoplay class="cta-banner">
              <!-- <a href="#" class="cta-content">
                <p class="discount">1% De Donacion</p>
                <h2 class="cta-title">En todas tus compras</h2>
                <p class="cta-text">Para ayudar a los que no pueden hablar</p>
                <button class="cta-btn">Ver coleccion</button>
              </a> -->
          </div>
          <!--
            - SERVICE
          -->
          <div class="service">

            <h2 class="title">¿Que ofrecemos?</h2>

            <div class="service-container">

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="boat-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Primeros En Aceptar Pagos Con Criptomonedas
                  </h3>
                  <p class="service-desc">Recibimos BITCOIN y TETHER (USDT)
                  </p>

                </div>
              </a>
              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Rapidos envios</h3>
                  <p class="service-desc">Envios el mismo dia, compra en linea y recoje en tienda o usando nuestro nuevo
                    sistema de autoship.
                  </p>

                </div>

              </a>

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">El mejor soporte</h3>
                  <p class="service-desc">Soporte inmediatico con IA 24/7 y unico en Colombia
                  </p>

                </div>

              </a>

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="arrow-undo-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Asesoramientos y orientaciones</h3>
                  <p class="service-desc">Cuidamos tanto tus mascotas, que realizamos todo tipo de asesoriamiento y
                    orientaciones con nuestro sistema emergente.</p>
                </div>
              </a>
              <a href="#" class="service-item">
                <div class="service-icon">
                  <ion-icon name="ticket-outline"></ion-icon>
                </div>
                <div class="service-content">
                  <h3 class="service-title">Descuentos</h3>
                  <p class="service-desc">Descuentos En Toda Nuestra Tienda y Aliados</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--
      - BLOG
    -->
    <div class="blog">
      <div class="container">
        <h2 class="tittle">Nuestro Blog:</h2>
        <div class="blog-container has-scrollbar">
          @foreach ($lastPosts as $item)
          <div class="blog-card">
            <a href="{{route('post.show', [
            'postCategory' => $item->category_data->slug, 
            'post' => $item->slug
            ])}}">
              <img src="{{asset('storage/blogs/'.$item->banner_image)}}" alt="{{$item->image}}" class="blog-banner"
                width="300">
            </a>
            <div class="blog-content">
              <a href="{{route('post.show', [
              'postCategory' => $item->category_data->slug, 
              'post' => $item->slug
              ])}}" class="blog-category">¡Pronto!</a>
              <h3>
                <a href="{{route('post.show', [
                'postCategory' => $item->category_data->slug, 
                'post' => $item->slug
                ])}}" class="blog-title">¡Pronto!</a>
              </h3>
              <p class="blog-meta">
                Por <cite>{{$item->user->name}}</cite> / <time
                  datetime="{{$item->created_at}}">{{$item->published_at}}</time>
              </p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
</main>


@endsection