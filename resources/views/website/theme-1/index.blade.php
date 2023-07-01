@extends('template')
@section('title', 'Inicio!')



@section('content')
    

  <div class="overlay" data-overlay></div>
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
              La mejor <b>E-commerce</b> para tus peluditos
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
            <img src="{{asset('images/banner.png')}}" alt="women's latest fashion sale" class="banner-img">
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
            <img src="{{asset('images/banner.png')}}" alt="women's latest fashion sale" class="banner-img">
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
          <img src="{{asset('images/banner.png')}}" alt="women's latest fashion sale" class="banner-img">
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
    <div class="category">
      <div class="container">
        <h2 class="tittle">Productos:</h2>
        <div class="category-item-container has-scrollbar">
          <div class="category-item"></div>
            <div class="category-img-box">
              <img src="{{asset('images/juguetes.png')}}" alt="" width="100">
            </div>
            <div class="category-content-box">
              <div class="category-content-flex">
                <h3 class="category-item-title">Juguetes</h3>
              </div>
              <a href="#" class="category-btn">Mirar todos</a>
            </div>
          </div>
        </div>
      </div>
    </div>
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
            <h2 class="title">Ofertas!</h2>
            <div class="product-grid">
              <div class="showcase">
                <div class="showcase-banner">
                  <img src="{{asset('images/juguetes.png')}}" alt="" width="300" class="product-img default">
                  <img src="{{asset('images/logo.png')}}" alt="" width="300" class="product-img hover">
                </div>
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Juguetes</a>
                  <a href="#">
                    <h3 class="showcase-title">Lanza cachorro</h3>
                  </a>
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
                  <div class="price-box">
                    <p class="price">$60</p>
                    <del>$75.00</del>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
              <img src="{{asset('images/logo.png')}}" alt="alan doe" class="testimonial-banner" width="80" height="80">
              <p class="testimonial-name">Angelo Acevedo</p>
              <p class="testimonial-title">Webmaster de Hatchi</p>
              <img src="{{asset('images/testimonia.png')}}" alt="quotation" class="quotation-img" width="26">
              <p class="testimonial-desc">
                Lorem ipsum dolor sit amet consectetur Lorem ipsum
                dolor dolor sit amet.
              </p>
            </div>
          </div>
          <!--
            - CTA
          -->
          <div class="cta-container">
            <img src="{{asset('images/banner.png')}}" alt="summer collection" class="cta-banner">
            <a href="#" class="cta-content">
              <p class="discount">25% de Descuento</p>
              <h2 class="cta-title">En la collecion de Gatos</h2>
              <p class="cta-text">Envio gratis a partir de 50$</p>
              <button class="cta-btn">Ver coleccion</button>
            </a>
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

                  <h3 class="service-title">Aceptamos Bitcoin</h3>
                  <p class="service-desc">Recibimos bitcoin</p>

                </div>

              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Rapidos envios</h3>
                  <p class="service-desc">Flash</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">El mejor soporte</h3>
                  <p class="service-desc">Horas: 8AM - 11PM</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="arrow-undo-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Politica de regreso</h3>
                  <p class="service-desc">Facil y rapido</p>
                </div>
              </a>
              <a href="#" class="service-item">       
                <div class="service-icon">
                  <ion-icon name="ticket-outline"></ion-icon>
                </div>             
                <div class="service-content">             
                  <h3 class="service-title">Descuentos</h3>
                  <p class="service-desc">Si ayudas</p>
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
          <div class="blog-card">  
            <a href="#">
              <img src="{{asset('images/banner.png')}}" alt=""
                class="blog-banner" width="300">
            </a>        
            <div class="blog-content">          
              <a href="#" class="blog-category">Polemica</a>
              <h3>
                <a href="#" class="blog-title">Hatchi vs Laika</a>
              </h3>
              <p class="blog-meta">
                Por <cite>Angelo Acevedo</cite> / <time datetime="2022-03-15">Agosto 15, 2023</time>
              </p>
            </div>
          </div>
          <div class="blog-card">  
            <a href="#">
              <img src="{{asset('images/banner.png')}}" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                class="blog-banner" width="300">
            </a>        
            <div class="blog-content">          
              <a href="#" class="blog-category">Polemica</a>
              <h3>
                <a href="#" class="blog-title">Hatchi vs Laika</a>
              </h3>
              <p class="blog-meta">
                Por <cite>Angelo Acevedo</cite> / <time datetime="2022-03-15">Agosto 15, 2023</time>
              </p>
            </div>
          </div>
          <div class="blog-card">  
            <a href="#">
              <img src="{{asset('images/banner.png')}}" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                class="blog-banner" width="300">
            </a>        
            <div class="blog-content">          
              <a href="#" class="blog-category">Polemica</a>
              <h3>
                <a href="#" class="blog-title">Hatchi vs Laika</a>
              </h3>
              <p class="blog-meta">
                Por <cite>Angelo Acevedo</cite> / <time datetime="2022-03-15">Agosto 15, 2023</time>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>


  @endsection