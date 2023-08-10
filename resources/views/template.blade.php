@php
$nav_links = [

[
'name' => 'Membresias',
'route' => route('membership.index'),
],
[
'name' => 'Ofertas',
'route' => route('shop.offert'),
]

]
@endphp



<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{env('APP_NAME')}} | @yield('title')</title>

  @vite(['resources/css/app.css'])
  <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  @livewireStyles
</head>

<body>
  <header>
    <div class="header-top">
      <div class="container">
        <ul class="header-social-container">
          <li>
            <a href="https://www.facebook.com/Hatchicolombia" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://instagram.com/hatchicolombia" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://www.tiktok.com/@hatchicolombia" class="social-link">
              <ion-icon name="logo-tiktok"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://youtube.com/@Hatchicolombia" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>
        </ul>
        <div class="header-alert-news">
          <p>
            Nadie se preocupara mas por ti y tu mascota, Que HATCHI.
          </p>
        </div>
      </div>
    </div>
    <div class="header-main">
      <div class="container">
        <a href="{{route('home')}}" class="header-logo">
          <img src="{{asset('images/logo.png')}}" alt="Anon's logo" width="120" height="120">
        </a>
        <div class="header-search-container">
          <input type="search" name="search" autocomplete="off" class="search-field"
            placeholder="Enter your product name...">
          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>
        </div>
        <div class="header-user-actions">
          <button class="action-btn perfil-button">
            <ion-icon name="person-outline"></ion-icon>
          </button>

          @auth
          <div class="desktop-menu inactive">
            <ul>
              <li>
                <a href="{{route('dashboard')}}" class="">Mi Perfil</a>
              </li>
              <li>
                <a href="{{route('api-tokens.index')}}">Api keys</a>
              </li>
              <li>
                <a href="/">Configuracion</a>
              </li>
              <li>
                <form method="POST" action="{{ route('logout') }}" x-data>
                  @csrf

                  <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                    {{ __('Log Out') }}
                  </x-dropdown-link>
                </form>
              </li>
            </ul>
          </div>
          @endauth
          @guest
          <div class="desktop-menu inactive">
            <ul>
              <li>
                <a href="{{route('login')}}" class="">Iniciar Sesión</a>
              </li>

              <li>
                <a href="{{route('register')}}">Registrarse</a>
              </li>
              <li>
                <a href="/">Rastrear envio</a>
              </li>
            </ul>
          </div>
          @endguest
          <a class="action-btn" href="{{route('cart.view')}}">
            <ion-icon name="bag-handle-outline"></ion-icon>
            <span class="count">{{Cart::count()}}</span>
          </a>
        </div>
      </div>
    </div>
    <nav class="desktop-navigation-menu">
      <div class="container">
        <ul class="desktop-menu-category-list">
          <li class="menu-category">
            <a href="{{route('home')}}" class="menu-title">Inicio</a>
          </li>
          <li class="menu-category">
            <a href="#" class="menu-title">Categorias</a>
            <div class="dropdown-panel">
              <ul class="dropdown-panel-list">
                <li class="menu-title">
                  <a href="{{route('shop.animal', 'perros')}}">Perros</a>
                </li>
                <li class="panel-list-item">
                  <a href="#">1</a>
                </li>
              </ul>
              <ul class="dropdown-panel-list">
                <li class="menu-title">
                  <a href="#">Gatos</a>
                </li>
                <li class="panel-list-item">
                  <a href="#">1</a>
                </li>
              </ul>
              <ul class="dropdown-panel-list">
                <li class="menu-title">
                  <a href="#">Caballos</a>
                </li>
                <li class="panel-list-item">
                  <a href="#">1</a>
                </li>
              </ul>
              <ul class="dropdown-panel-list">
                <li class="menu-title">
                  <a href="#">Otros</a>
                </li>
                <li class="panel-list-item">
                  <a href="#">1</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="menu-category">
            <a href="{{route('membership.index')}}" class="menu-title">Membresias</a>
          </li>
          <li class="menu-category">
            <a href="{{route('posts.index')}}" class="menu-title">Nuestros Blogs!</a>
          </li>
          <li class="menu-category">
            <a href="{{route('shop.offert')}}" class="menu-title">Ofertas</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="mobile-bottom-navigation">
      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>
      <a href="{{route('cart.view')}}" class="action-btn deploy-shoppingcart-mobile">
        <ion-icon name="bag-handle-outline"></ion-icon>
        <span class="count">{{Cart::count()}}</span>
      </a>
      @auth
      <a href="{{route('dashboard')}}" class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </a>
      @endauth
      @guest
      <a href="{{route('login')}}" class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </a>
      @endguest
      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button>
    </div>
    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>
      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>
        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>
      <ul class="mobile-menu-category-list">
        <li class="menu-category">
          <a href="{{ route('home') }}" class="menu-title">Inicio</a>
        </li>
        @foreach ($nav_links as $item)
        <li class="menu-category">
          <a href="{{$item['route']}}" class="menu-title">{{$item['name']}}</a>
        </li>
        @endforeach
        <li class="menu-category">
          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Perros</p>
            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>
          <ul class="submenu-category-list" data-accordion>
            @foreach($animalCategory as $item)
            <li class="submenu-category">
              <a href="{{route('shop.category', [
                  'animal' => 'perro',
                  'animalCategory' => $item->slug
                  ])}}">{{$item->name}}</a>
            </li>
            @endforeach
          </ul>
        </li>

        <li class="menu-category">
          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Gatos</p>
            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>
          <ul class="submenu-category-list" data-accordion>
            @foreach($animalCategory as $item)
            <li class="submenu-category">
              <a href="{{route('shop.category', [
                  'animal' => 'gato',
                  'animalCategory' => $item->slug
                  ])}}">{{$item->name}}</a>
            </li>
            @endforeach
          </ul>
        </li>
        @guest
        <li class="menu-category">
          <a href="" class="menu-title">Iniciar sesion</a>
        </li>
        <li class="menu-category">
          <a href="" class="menu-title">Registrarse</a>
        </li>
        <li class="menu-category">
          <a href="" class="menu-title">Rastrear envio</a>
        </li>
      </ul>
      @endguest
      <ul class="social-link flex flex-wrap mx-2">
        <li class="footer-nav-item">
          <a href="https://www.facebook.com/Hatchicolombia" class="footer-nav-link">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
        </li>
        <li class="footer-nav-item">
          <a href="https://instagram.com/hatchicolombia" class="footer-nav-link">
            <ion-icon name="logo-instagram"></ion-icon>
          </a>
        </li>
        <li class="footer-nav-item">
          <a href="https://www.tiktok.com/@hatchicolombia" class="footer-nav-link">
            <ion-icon name="logo-tiktok"></ion-icon>
          </a>
        </li>
        <li class="footer-nav-item">
          <a href="https://youtube.com/@Hatchicolombia" class="footer-nav-link">
            <ion-icon name="logo-youtube"></ion-icon>
          </a>
        </li>
      </ul>
      </li>
      </ul>
      <ul>
      </ul>
      </div>
    </nav>
  </header>

  @yield('content')

  <footer>
    <div class="footer-category">
      <div class="container">
        <h2 class="footer-category-title">Descarganos en:</h2>
        <div class="footer-bottom">
          <div class="dowloand-zone">
            <img src="{{asset('images/others/svg/AppleBadge.svg')}}" alt="disponible app" class="dowloand-img">
            <img src="{{asset('images/others/googlePlayBadge.png')}}" alt="disponible app" class="dowloand-img">
            <img src="{{asset('images/others/appGalleryBadge.png')}}" alt="disponible app" class="dowloand-img">
          </div>
        </div>
      </div>
    </div>
    <div class="footer-nav">
      <div class="container">
        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Sobre Hatchi</h2>
          </li>
          <li class="footer-nav-link">
            <a href="{{ route('about-hatchi') }}">Acerca de Hatchi</a>
          </li>
          <li class="footer-nav-link">
            <a href="{{ route('workus.view')}}">Trabaja con nosotros</a>
          </li>
          <li class="footer-nav-link">
            <a href="{{ route('posts.index')}}">Nuestros blogs</a>
          </li>
        </ul>
        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Datos de intereses</h2>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">¿Como comprar en hatchi?</a>
          </li>
          <li class="footer-nav-item">
            <a href="{{ route('faq.view') }}" class="footer-nav-link">Preguntas frecuentes</a>
          </li>
          <li class="footer-nav-item">
            <a href="{{ route('delivery-policy') }}" class="footer-nav-link">Politicas de entrega</a>
          </li>
          <li class="footer-nav-item">
            <a href="{{ route('policy.show')}}" class="footer-nav-link">Politicas de privacidad</a>
          </li>
        </ul>
        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Contactanos:</h2>
          </li>
          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>
            <address class="content">
              Carrera 26 #50-34
            </address>
          </li>
          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>
            <a href="tel:+573227303500" class="footer-nav-link">(+57) 322-730-35-00</a>
          </li>
          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>
            <a href="mailto:hatchicolombia@gmail.com" class="footer-nav-link">Hatchicolombia@gmail.com</a>
          </li>
        </ul>
        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Siguenos en:</h2>
          </li>
          <li>
            <ul class="social-link">
              <li class="footer-nav-item">
                <a href="https://www.facebook.com/Hatchicolombia" class="footer-nav-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>
              <li class="footer-nav-item">
                <a href="https://instagram.com/hatchicolombia" class="footer-nav-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>
              <li class="footer-nav-item">
                <a href="https://www.tiktok.com/@hatchicolombia" class="footer-nav-link">
                  <ion-icon name="logo-tiktok"></ion-icon>
                </a>
              </li>
              <li class="footer-nav-item">
                <a href="https://youtube.com/@Hatchicolombia" class="footer-nav-link">
                  <ion-icon name="logo-youtube"></ion-icon>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <ul>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="payment-zone">
        <div class="payment-zone2">
          <img src="{{asset('images/others/Btc.png')}}" alt="payment method" class="payment-img2">
          <img src="{{asset('images/others/bitcoinhere.png')}}" alt="payment method" class="payment-img">
          <img src="{{asset('images/others/Tether.png')}}" alt="payment method" class="payment-img2b">
        </div>
        <img src="{{asset('images/others/payu.png')}}" alt="payment method" class="payment-img">
        <img src="{{asset('images/others/payment.png')}}" alt="payment method" class="payment-img">
      </div>
      <p class="copyright">
        Copyright &copy; <a href="#">Hatchi</a> all rights reserved.
      </p>
    </div>
  </footer>

  @livewireScripts
  @vite(['resources/js/app.js'])
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script>
    const profileMenuDesktop = document.querySelector(".desktop-menu")
    const profileMenuOpen = document.querySelector(".perfil-button")

    profileMenuOpen.addEventListener("click", openMenuDesktop)

    function openMenuDesktop() {
      profileMenuDesktop.classList.toggle("inactive")
    }

  </script>

  <script>
    const carrusel = document.querySelector(".carrusel-items");
    
    let maxScrollLeft = carrusel.scrollWidth - carrusel.clientWidth;
    let intervalo = null;
    let step = 1;
    const start = () => {
      intervalo = setInterval(function () {
        carrusel.scrollLeft = carrusel.scrollLeft + step;
        if (carrusel.scrollLeft === maxScrollLeft) {
          step = step * -1;
        } else if (carrusel.scrollLeft === 0) {
          step = step * -1;
        }
      }, 10);
    };
    
    const stop = () => {
      clearInterval(intervalo);
    };
    
    carrusel.addEventListener("mouseover", () => {
      stop();
    });
    
    carrusel.addEventListener("mouseout", () => {
      start();
    });
    
    start();
  </script>
  <script>
    const carrusel2 = document.querySelector(".carrusel-items2");
    
    let maxScrollLeft2 = carrusel2.scrollWidth - carrusel2.clientWidth;
    let intervalo2 = null;
    let step2 = 1;
    const start2 = () => {
      intervalo2 = setInterval(function () {
        carrusel2.scrollLeft = carrusel2.scrollLeft + step2;
        if (carrusel2.scrollLeft === maxScrollLeft2) {
          step2 = step2 * -1;
        } else if (carrusel2.scrollLeft === 0) {
          step2 = step2 * -1;
        }
      }, 10);
    };
    
    const stop2 = () => {
      clearInterval(intervalo2);
    };
    
    carrusel2.addEventListener("mouseover", () => {
      stop2();
    });
    
    carrusel2.addEventListener("mouseout", () => {
      start2();
    });
    
    start2();
  </script>

</body>

</html>