<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>{{env('APP_NAME')}} | @yield('title')</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
</head>

<body>
  <header>
    <div class="header-top">
      <div class="container">
        <ul class="header-social-container">
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>
        </ul>
        <div class="header-alert-news">
          <p>
            <b>www.hatchi.com.co</b>
            De nuestro corazon, para tus peluditos.
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
          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">
          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>
        </div>
        <div class="header-user-actions">
          <button class="action-btn perfil-button">
            <ion-icon name="person-outline"></ion-icon>
          </button>
          <div class="desktop-menu inactive">
            <ul>
              <li>
                <a href="/" class="">Mi Perfil</a>
              </li>

              <li>
                <a href="/">Dashboard</a>
              </li>
              <li>
                <a href="/">Api keys</a>
              </li>
              <li>
                <a href="/">Sign out</a>
              </li>
            </ul>
          </div>
          <button class="action-btn deploy-shoppingcart">
            <ion-icon name="bag-handle-outline"></ion-icon>
            <span class="count">0</span>
          </button>
        </div>
      </div>
    </div>
    <nav class="desktop-navigation-menu">
      <div class="container">
        <ul class="desktop-menu-category-list">
          <li class="menu-category">
            <a href="#" class="menu-title">Inicio</a>
          </li>
          <li class="menu-category">
            <a href="#" class="menu-title">Categorias</a>
            <div class="dropdown-panel">
              <ul class="dropdown-panel-list">
                <li class="menu-title">
                  <a href="#">Perros</a>
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
            <a href="#" class="menu-title">Perros</a>
            <ul class="dropdown-list">
              <li class="dropdown-item">
                <a href="#">1</a>
              </li>
            </ul>
          </li>
          <li class="menu-category">
            <a href="#" class="menu-title">Gatos</a>
            <ul class="dropdown-list">
              <li class="dropdown-item">
                <a href="#">1</a>
              </li>
            </ul>
          </li>
          <li class="menu-category">
            <a href="#" class="menu-title">Caballos</a>
            <ul class="dropdown-list">
              <li class="dropdown-item">
                <a href="#">1</a>
              </li>
            </ul>
          </li>
          <li class="menu-category">
            <a href="#" class="menu-title">Otros</a>
            <ul class="dropdown-list">
              <li class="dropdown-item">
                <a href="#">1</a>
              </li>
            </ul>
          </li>
          <li class="menu-category">
            <a href="#" class="menu-title">Nuestros Blogs!</a>
          </li>
          <li class="menu-category">
            <a href="#" class="menu-title">Ofertas</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="mobile-bottom-navigation">
      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>
      <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>
        <span class="count">0</span>
      </button>
      <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button>
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
          <a href="#" class="menu-title">Inicio</a>
        </li>
        <li class="menu-category">
          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Perros</p>
            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>
          <ul class="submenu-category-list" data-accordion>
            <li class="submenu-category">
              <a href="#" class="submenu-title">1</a>
            </li>
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
            <li class="submenu-category">
              <a href="#" class="submenu-title">1</a>
            </li>
          </ul>
        </li>
        <li class="menu-category">
          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Caballos</p>
            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>
          <ul class="submenu-category-list" data-accordion>
            <li class="submenu-category">
              <a href="#" class="submenu-title">1</a>
            </li>
          </ul>
        </li>
        <li class="menu-category">
          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Otros</p>
            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>
          <ul class="submenu-category-list" data-accordion>
            <li class="submenu-category">
              <a href="#" class="submenu-title">1</a>
            </li>
          </ul>
        </li>
        <li class="menu-category">
          <a href="#" class="menu-title">Nuestros Blogs!</a>
        </li>
        <li class="menu-category">
          <a href="#" class="menu-title">Ofertas</a>
        </li>
      </ul>
      <ul class="menu-social-container">
        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
        </li>
        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
        </li>
        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-instagram"></ion-icon>
          </a>
        </li>
        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-linkedin"></ion-icon>
          </a>
        </li>
      </ul>
      </div>
    </nav>
  </header>


  @yield('content')

  <footer>
    <div class="footer-category">
      <div class="container">
        <h2 class="footer-category-title">Contenido:</h2>
        <div class="footer-category-box">
          <h3 class="category-box-title">Lagartos :</h3>
          <a href="#" class="footer-category-link">Camisas para cocodrilos</a>
        </div>
        <div class="footer-category-box">
          <h3 class="category-box-title">Caballos :</h3>
          <a href="#" class="footer-category-link">Shampoo</a>
        </div>
        <div class="footer-category-box">
          <h3 class="category-box-title">Gatos :</h3>
          <a href="#" class="footer-category-link">Shampoo</a>
        </div>
        <div class="footer-category-box">
          <h3 class="category-box-title">Perros :</h3>
          <a href="#" class="footer-category-link">Shampoo</a>
        </div>
      </div>
    </div>
    <div class="footer-nav">
      <div class="container">
        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Categorias</h2>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">1</a>
          </li>
        </ul>
        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Productos</h2>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">1</a>
          </li>
        </ul>
        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Our Company</h2>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Pago seguro</a>
          </li>
        </ul>
        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Servicios</h2>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">1</a>
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
              Cr93 765 a10 2020 Nw
            </address>
          </li>
          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>
            <a href="tel:+607936-8058" class="footer-nav-link">(57)3202443545</a>
          </li>
          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>
            <a href="" class="footer-nav-link">hatchi@gmail.com</a>
          </li>
        </ul>
        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Follow Us</h2>
          </li>
          <li>
            <ul class="social-link">
              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>
              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>
              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>
              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <img src="{{asset('images/payment.png')}}" alt="payment method" class="payment-img">
        <p class="copyright">
          Copyright &copy; <a href="#">Hatchi</a> all rights reserved.
        </p>
      </div>
    </div>
  </footer>

  <script src="./assets/js/script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>