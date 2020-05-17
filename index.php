<?php
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('STORE_URL', 'http://localhost:8888/porkys/carniceriaporkys.com/store');
} else {
    define('STORE_URL', 'http://tienda.carniceriaporkys.com');
}
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Carnes Selectas Porky's</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="description" content="Carnes Selectas Porky's es una carnicería multiservicio dónde se destacan nuestras carnes selectas de calidad así como de frutas y verduras." />
    <meta name="keywords" content="carnicería,porkys,carnes selectas,frescura y calidad,buffet,bufete,comida,frutas,verduras,restaurant,tacos,jugos,desayunos,guadalajara,zapopan" />
    <meta property="og:title" content="Carnes Selectas Porky's" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://carniceriaporkys.com" />
    <meta property="og:image" content=" http://carniceriaporkys.com/images/logo.png" />
    <meta property="og:description" content="Carnes Selectas Porky's es una carnicería multiservicio dónde se destacan nuestras carnes selectas de calidad así como de frutas y verduras." />
    <meta property="og:site_name" content="Carnes Selectas Porky's" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="images/logo-icon.png" rel="icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Fira+Sans:300,600,800,800i%7COpen+Sans:300,400,400i">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css?7">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/custom.css?5">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <div class="preloader">
      <div class="cssload-container">
        <svg class="filter" version="1.1">
          <defs>
            <filter id="gooeyness">
              <fegaussianblur in="SourceGraphic" stddeviation="10" result="blur"></fegaussianblur>
              <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 20 -10" result="gooeyness"></fecolormatrix>
              <fecomposite in="SourceGraphic" in2="gooeyness" operator="atop"></fecomposite>
            </filter>
          </defs>
        </svg>
        <div class="dots">
          <div class="dot mainDot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
        </div>
        <p>Un momento...</p>
      </div>
    </div>
    <!-- Page-->
    <div class="page">
      <header class="page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-stick-up-clone="false" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-md-stick-up-offset="115px" data-lg-stick-up-offset="35px">
            <!-- RD Navbar Top Panel-->
            <div class="rd-navbar-top-panel rd-navbar-top-panel-dark">
              <div class="rd-navbar-top-panel__main">
                <div class="rd-navbar-top-panel__toggle rd-navbar-fixed__element-1 rd-navbar-static--hidden" data-rd-navbar-toggle=".rd-navbar-top-panel__main"><span></span></div>
                <div class="rd-navbar-top-panel__content">
                  <div class="rd-navbar-top-panel__left">
                    <ul class="rd-navbar-items-list">
                      <li>
                        <div class="unit flex-row align-items-center unit-spacing-xs">
                          <div class="unit__left"><span class="icon icon-sm icon-primary linear-icon-map-marker"></span></div>
                          <div class="unit__body">
                            <ul class="list-semicolon">
                              <li><a href="https://www.google.com/maps/place/Carnes+Selectas+PORKY'S/@20.636599,-103.4279512,15z/data=!4m2!3m1!1s0x0:0xf861b45b2e08ab5e?sa=X&ved=2ahUKEwjFpObb7uDhAhUJD60KHfi-AC8Q_BIwCnoECAsQCA" target="_blank">Calle Tomas Balcázar 5466-A, Paseos del Sol, 45070 Zapopan, Jal.</a></li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="unit flex-row align-items-center unit-spacing-xs">
                          <div class="unit__left"><span class="icon icon-sm icon-primary linear-icon-telephone"></span></div>
                          <div class="unit__body">
                            <ul class="list-semicolon">
                              <li><a href="tel:3336347630">33 3634 7630</a></li>
                              <li><a href="tel:3324103750">33 2410 3750</a></li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="unit flex-row align-items-center unit-spacing-xs">
                          <div class="unit__left"><span class="icon icon-sm icon-primary linear-icon-envelope"></span></div>
                          <div class="unit__body">
                            <ul class="list-semicolon">
                              <li><a href="mailto:contactoporkys@gmail.com">contactoporkys@gmail.com</a></li>
                              <li><a href="mailto:facturacionporkys@gmail.com">facturacionporkys@gmail.com</a></li>
                            </ul>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="rd-navbar-top-panel__right" style="text-align: center">
                    <span class="icon-gray-darker">¡SÍGUENOS!</span>
                    <ul class="list-inline-xxs" style="margin-top: 3px">
                      <li><a target="_blank" class="icon icon-sm icon-gray-darker fa fa-facebook" href="https://www.facebook.com/pg/CarnesSelectasPorkisalgrill"></a></li>
                      <li><a target="_blank" class="icon icon-sm icon-gray-darker fa fa-instagram" href="https://www.instagram.com/carnesselectasporkys/"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="rd-navbar-inner rd-navbar-search-wrap">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel rd-navbar-search-lg_collapsable">
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand-name" href="/"><img src="images/logo-horizontal.png" alt="" height="80" srcset="images/logo-horizontal.png"/></a></div>
              </div>
              <!-- RD Navbar Nav-->
              <div class="rd-navbar-nav-wrap rd-navbar-search_not-collapsable">
                <div class="rd-navbar-search_collapsable">
                  <ul class="rd-navbar-nav">
                    <li><a href="#inicio">INICIO</a></li>
                    <li><a href="#servicios">SERVICIOS</a></li>
                    <li><a href="#nosotros">NOSOTROS</a></li>
                    <li><a href="#galeria">GALERÍA</a></li>
                    <li><a href="#contacto">CONTACTO</a></li>
                    <li><a href="<?php echo STORE_URL; ?>">TIENDA EN LÍNEA</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Swiper-->
      <svg class="defs">
        <defs>
          <lineargradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="50%" stop-color="#00000099">
              <animate attributename="stop-color" values="#00000099; #44444455; #00000099" dur="10s" repeatcount="indefinite"></animate>
            </stop>
          </lineargradient>
        </defs>
      </svg>
      <div id="inicio" class="swiper-container swiper-slider swiper-slider_fullheight swiper-digital" data-effect="circle-bg" data-loop="false" data-autoplay="4600" data-speed="1600" data-mousewheel="false" data-keyboard="false" data-circle-fill="url(#gradient1)">
        <div class="swiper-wrapper">
          <div class="swiper-slide" data-circle-cx=".7" data-circle-cy=".5" data-circle-r=".2" style="background-image: url(images/slider-1.png?1);">
            <div class="swiper-slide-caption text-center" style="width: 100%">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <h2 class="text-white" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 500 }">PRODUCTOS FRESCOS Y DE CALIDAD A PRECIOS COMPETITIVOS</h2>
                    <h5 class="text-white text-width-2 block-centered" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 700 }">Contamos con una amplia variedad de carnes selectas, platillos tradicionales, jugos naturales,  verduras y mucho más.</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-circle-cx=".7" data-circle-cy=".5" data-circle-r=".2" style="background-image: url(images/slider-2.png?1);">
            <div class="swiper-slide-caption text-center" style="width: 100%">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <h2 class="text-white" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 500 }">COME ALGO Y RELÁJATE</h2>
                    <h5 class="text-white text-width-2 block-centered" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 700 }">Ven a Porkys por tus compras y a pasar un rato agradable con personas amables y dispuestas a ayudarte en lo que necesites.</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-circle-cx=".7" data-circle-cy=".5" data-circle-r=".2" style="background-image: url(images/slider-3.png?3);">
            <div class="swiper-slide-caption text-center" style="width: 100%">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <h2 class="text-white" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 500 }">CARNE DE CALIDAD, CARNES SELECTAS PORKY'S</h2>
                    <h5 class="text-white text-width-2 block-centered" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 700 }">Críamos nuestro propio ganado con estrictos estándares para ofrecerte carne de la mejor calidad.</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev linear-icon-chevron-left"></div>
        <div class="swiper-button-next linear-icon-chevron-right"></div>
      </div>
      <!-- Our Services -->
      <section id="servicios" class="services section-xl bg-default text-center" id="services_section">
        <div class="bg-decor d-flex align-items-center" data-parallax-scroll="{&quot;x&quot;: 0,  &quot;y&quot;: 100, &quot;smoothness&quot;: 30}"><img src="images/bg-decor-1.png?122" alt=""/>
        </div>
        <div class="bg-decor d-flex align-items-end" data-parallax-scroll="{&quot;x&quot;: 0, &quot;y&quot;: -60, &quot;from-scroll&quot;: 120, &quot;smoothness&quot;: 30}"><img src="images/bg-decor-2.png?5" alt=""/>
        </div>
        <div class="bg-decor" data-parallax-scroll="{&quot;x&quot;: 0, &quot;y&quot;: -50,  &quot;smoothness&quot;: 30}"><img src="images/bg-decor-3.png?14" alt=""/>
        </div>
        <div class="container">
          <h4 class="heading-decorated">NUESTROS SERVICIOS</h4>
          <!-- Circle carousel -->
          <div class="carousel-wrapper">
            <div class="circle-carousel" data-speed="1000" data-autoplay="3000">
              <!-- slides -->
              <div class="slides">
                <div class="content-box">
                  <div class="content-box-inner">
                    <div class="content-box-img bg-overlay-dark" style="background-image: url(images/service-1.jpg?2)">
                      <div class="content-title-wrap">
                        <div class="content-title">
                          <h4><a href="#">Restaurante</a></h4>
                          <span class="text-white">Contamos con excelente variedad de comida tradicional a la carta, no te arrepentirás.</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content-box">
                  <div class="content-box-inner">
                    <div class="content-box-img bg-overlay-dark" style="background-image: url(images/service-2.jpg)">
                      <div class="content-title-wrap">
                        <div class="content-title">
                          <h4><a href="#">Buffet</a></h4>
                          <span class="text-white">A un precio accesible y con muchas opciones de comida.</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content-box">
                  <div class="content-box-inner">
                    <div class="content-box-img bg-overlay-dark" style="background-image: url(images/service-3.jpg?1)">
                      <div class="content-title-wrap">
                        <div class="content-title">
                          <h4><a href="#">¡Tacos!</a></h4>
                          <span class="text-white">Sabemos que los tacos no pueden faltar, ¡disfruta de los mejores tacos de carnitas y más!</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content-box">
                  <div class="content-box-inner">
                    <div class="content-box-img bg-overlay-dark" style="background-image: url(images/service-4.jpg)">
                      <div class="content-title-wrap">
                        <div class="content-title">
                          <h4><a href="#">Carnicería</a></h4>
                          <span class="text-white">Críamos nuestro ganado para ofrecerte los mejores cortes de carnes.</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content-box">
                  <div class="content-box-inner">
                    <div class="content-box-img bg-overlay-dark" style="background-image: url(images/service-5.jpg)">
                      <div class="content-title-wrap">
                        <div class="content-title">
                          <h4><a href="#">Frutas y Verduras</a></h4>
                          <span class="text-white">Las más frecas frutas y verduras que podrás encontrar, calidad garantizada.</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content-box">
                  <div class="content-box-inner">
                    <div class="content-box-img bg-overlay-dark" style="background-image: url(images/service-6.jpg)">
                      <div class="content-title-wrap">
                        <div class="content-title">
                          <h4><a href="#">Abarrotes</a></h4>
                          <span class="text-white">Contamos con artículos de abarrote a precios competitivos.</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content-box">
                  <div class="content-box-inner">
                    <div class="content-box-img bg-overlay-dark" style="background-image: url(images/service-7.jpg)">
                      <div class="content-title-wrap">
                        <div class="content-title">
                          <h4><a href="#">Servicio a Domicilio</a></h4>
                          <span class="text-white">Arma tu paquete a domicilio, uno de nuestros repartidores te lo llevará.</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content-box">
                  <div class="content-box-inner">
                    <div class="content-box-img bg-overlay-dark" style="background-image: url(images/service-8.jpg)">
                      <div class="content-title-wrap">
                        <div class="content-title">
                          <h4><a href="#">Jugos naturales</a></h4>
                          <span class="text-white">Preparados con la mejor selección de frutas para que estés al día.</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- pagination-->
              <div class="pagination">
                <div class="item">
                  <div class="dot"><img src="images/dining-table-white.png" width="55%"/></div>
                </div>
                <div class="item">
                  <div class="dot"><i class="fa fa-cutlery"></i><span></span></div>
                </div>
                <div class="item">
                  <div class="dot"><img src="images/taco-white.png" width="55%"/></div>
                </div>
                <div class="item">
                  <div class="dot"><img src="images/meat-white.png" width="55%"/></div>
                </div>
                <div class="item">
                  <div class="dot"><img src="images/carrot-white.png" width="60%"/></div>
                </div>
                <div class="item">
                  <div class="dot"><i class="fa fa-shopping-basket"></i><span></span></div>
                </div>
                <div class="item">
                  <div class="dot"><i class="fa fa-truck"></i><span></span></div>
                </div>
                <div class="item">
                  <div class="dot"><img src="images/juice-white.png" width="60%"/></div>
                </div>
              </div>
              <div class="prev"><span>ANTERIOR</span></div>
              <div class="next"><span>SIGUIENTE</span></div>
            </div>
          </div>
        </div>
      </section>
      <!-- About us-->
      <section id="nosotros" class="bg-gray-lighter object-wrap decor-text" data-content="NOSOTROS" id="about">
        <div class="bg-decor d-flex align-items-center justify-content-end" data-parallax-scroll="{&quot;y&quot;: 50,  &quot;smoothness&quot;: 30}"><img src="images/bg-decor-4.png?1" alt=""/>
        </div>
        <div class="section-lg">
          <div class="container">
            <div class="row justify-content-end">
              <div class="col-lg-7">
                <h4 class="heading-decorated">ACERCA DE NOSOTROS</h4>
                <br />
                <h5>Un poco de Historia</h5>
                <p style="text-align: justify">
                  La historia de nuestra empresa es familiar, inició en el año de 1985, cuando decidimos iniciar un pequeño negocio al ver una oportunidad de incursionar en el ramo de la carne adquiriendo nuestros primeros equipos de refrigeración y así abriendo por primera vez las puertas de <strong>Carnes Selectas Porky's</strong>.
                </p>
                <p style="text-align: justify">
                  Con el tiempo, Carnes Selectas Porky's adquirió la suficiente madurez y experiencia en el giro de la carne que nos permitió brindar calidad y atención personalizada a cada uno de nuestros clientes, quienes hasta hoy han reconocido nuestro servicio especializado depositándonos su confianza y promoviendo desde entonces la recomendación de boca en boca.
                </p>
                <p style="text-align: justify">
                  Rebasando con creces las expectativas, a más de 30 años de su fundación, actualmente distribuimos nuestros productos cárnicos verificando que cumplan siempre con los estándares más altos de calidad, conservando siempre la misma profesionalidad, dedicación e ilusión que nos distingue desde el primer día.
                </p>
                <p style="text-align: justify">
                  <strong>Carnes Selectas Porky's</strong>, se ha convertido en uno de los puntos más importantes de referencia en el sector cárnico, empresa fortalecida por nuestra gran familia unida, trabajadora y con objetivos claros para enfrentar un mercado cada vez más competitivo.
                </p>
                <div class="row row-30">
                  <div class="col-xl-6">
                    <!-- Blurb minimal-->
                    <article class="blurb blurb-minimal">
                      <div class="unit flex-row unit-spacing-md">
                        <div class="unit-left">
                          <div class="blurb-minimal__icon"><span class="icon linear-icon-pushpin"></span></div>
                        </div>
                        <div class="unit-body">
                          <p class="blurb__title heading-6"><a href="single-service.html">Nuestra misión</a></p>
                          <p style="text-align: justify">Ofrecer un servicio de calidad y precio competitivo a nuestros clientes en todos nuestros productos que son distribuidos en el área de restaurante y buffet, y en el área de carnicería y frutería, así como en la atención que reciben desde que entran a nuestro establecimiento hasta que salen de él, logrando así una satisfacción completa.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-xl-6">
                    <!-- Blurb minimal-->
                    <article class="blurb blurb-minimal">
                      <div class="unit flex-row unit-spacing-md">
                        <div class="unit-left">
                          <div class="blurb-minimal__icon"><span class="icon linear-icon-pushpin"></span></div>
                        </div>
                        <div class="unit-body">
                          <p class="blurb__title heading-6"><a href="single-service.html">Nuestra visión</a></p>
                          <p style="text-align: justify">Ocupar en el mercado de productos cárnicos, La posición de empresa líder en el procesamiento y comercialización de la carne y sus derivados, a través de los canales de distribución y ofreciendo una variedad de productos que satisfagan la necesidad de nuestros clientes y con nuestras expectativas involucrándonos en la cadena de productos de la granja a su mesa.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="object-wrap__body object-wrap__body-sizing-1 object-wrap__body-md-left bg-image" style="background-image: url(images/bg-image-1.jpg?1)"></div>
      </section>
      <section class="section-md bg-default decor-text" data-content="LA MEJOR">
        <div class="bg-decor d-flex align-items-center" data-parallax-scroll="{&quot;x&quot;: -50,  &quot;smoothness&quot;: 30}"><img src="images/bg-decor-5.png?1" alt=""/>
        </div>
        <div class="container">
          <div class="row justify-content-md-center justify-content-lg-between row-50 align-items-center">
            <div class="col-md-8 col-lg-6">
              <h4 class="heading-decorated">NUESTRA CARNE, LA MEJOR CARNE</h4>
              <!-- Blurb minimal-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-star"></span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6">Calidad y frescura garantizada</p>
                    <p style="text-align: justify">Nosotros críamos, transportamos y sacrificamos nuestro propio ganado con estándares y medidas oficiales para ofrecerte la mejor carne selecta que tu paladar pueda probar.</p>
                  </div>
                </div>
              </article>
              <!-- Blurb minimal-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-star"></span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6">Cortes variados y únicos</p>
                    <p style="text-align: justify">Nuestra variedad de cortes y distinción en prepararlos te dejarán una experencia para repetir.</p>
                  </div>
                </div>
              </article>
              <!-- Blurb minimal-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-star"></span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6">Para aquí y para llevar</p>
                    <p style="text-align: justify">¿Tienes hambre y ganas de pasar el rato?. Contamos con áreas de comedores y un excelente servicio para que puedas degustar de deliciosos platillos tradicionales preparados con la misma carne que ofrecemos para llevar.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-7 col-lg-4">
              <figure class="image-sizing-1" data-parallax-scroll="{&quot;y&quot;: -10,  &quot;smoothness&quot;: 30}"><img src="images/steak-md.png" alt="" class="image-steak" />
              </figure>
            </div>
          </div>
        </div>
      </section>

      <section class="section context-dark parallax-container" data-parallax-img="images/bg-parallax-vegetables.jpg">
        <div class="parallax-content">
          <div class="container section-md">
            <div class="row row-50 justify-content-center">
              <div class="text-center col-8">
                <h4><span class="text-transform-none heading-5">Seleccionamos únicamente las mejores frutas y verduras</span></h4>
                <p>Además de distinguirnos por nuestra carne selecta, nos preocupamos por ofrecerte las mejores frutas y verduras del mercado y de temporada.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Gallery-->
      <section  id="galeria" class="section-md bg-default text-center" style="overflow: hidden">
        <div class="bg-decor d-flex align-items-center" data-parallax-scroll="{&quot;y&quot;: 150,  &quot;smoothness&quot;: 30}"><img src="images/bg-decor-3.png" alt=""/>
        </div>
        <div class="bg-decor d-flex align-items-center" data-parallax-scroll="{&quot;y&quot;: 400,  &quot;smoothness&quot;: 30}"><img src="images/bg-decor-4.png" alt=""/>
        </div>
        <div class="bg-decor d-flex align-items-center" data-parallax-scroll="{&quot;y&quot;: -150,  &quot;smoothness&quot;: 30}"><img src="images/bg-decor-1.png" alt=""/>
        </div>
        <div class="container">
          <h4 class="heading-decorated">Galería</h4>
          <div class="isotope-wrap row row-70">
            <div class="col-sm-12">
              <ul class="list-nav isotope-filters isotope-filters-horizontal">
                <li><a class="active" data-isotope-filter="Menú" data-isotope-group="gallery" href="#">Menú</a></li>
                <li><a data-isotope-filter="Meat" data-isotope-group="gallery" href="#">Cortes</a></li>
                <li><a data-isotope-filter="Fruits and Vegetables" data-isotope-group="gallery" href="#">Frutas y Verduras</a></li>
                <li><a data-isotope-filter="Juices" data-isotope-group="gallery" href="#">Jugos</a></li>
                <li><a data-isotope-filter="*" data-isotope-group="gallery" href="#">Todo</a></li>
              </ul>
              <div class="isotope row" data-isotope-layout="fitRows" data-isotope-group="gallery">
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Fruits and Vegetables">
                  <a class="img-thumbnail-variant-3" href="images/gallery/1.jpg" data-lightgallery="item">
                    <figure><img src="images/gallery/1-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Frutas y Verduras</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Algunas de nuestras frutas</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element">Frutas frescas y de calidad.</p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Menú">
                  <a class="img-thumbnail-variant-3" href="images/gallery/2.jpg" data-lightgallery="item">
                    <figure><img src="images/gallery/2-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Menú</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Deliciosos Hot Cake con Frutas</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element">Para desayunar o para el postre.</p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Juices">
                  <a class="img-thumbnail-variant-3" href="images/gallery/5.jpg" data-lightgallery="item">
                    <figure><img src="images/gallery/5-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Jugos</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Escamocha</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element">Preparamos la escamocha a tu gusto.</p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Menú">
                  <a class="img-thumbnail-variant-3" href="images/gallery/15.jpg" data-lightgallery="item">
                    <figure><img src="images/gallery/15-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Menú</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Hot Cakes y Frutas</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element">Puedes prepararte un rico desayuno ya sea a la carta o buffet.</p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Fruits and Vegetables">
                  <a class="img-thumbnail-variant-3" href="images/gallery/17.jpg" data-lightgallery="item">
                    <figure><img src="images/gallery/17-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Frutas y Verduras</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Fresas</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element">Frescas y ricas fresas de temporada.</p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Menú">
                  <a class="img-thumbnail-variant-3" href="images/gallery/18.jpg" data-lightgallery="item">
                    <figure><img src="images/gallery/18-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Menú</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Pollo con nopales y salsa</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element">No te pierdas esta rica combinación.</p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Fruits and Vegetables">
                  <a class="img-thumbnail-variant-3" href="images/gallery/19.jpg?1" data-lightgallery="item">
                    <figure><img src="images/gallery/19-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Frutas y Verduras</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Alguna de las verduras que encontrarás</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element">Siempre nos preocupamos porque tengas las mejores verduras.</p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Menú">
                  <a class="img-thumbnail-variant-3" href="images/gallery/30.jpg" data-lightgallery="item">
                    <figure><img src="images/gallery/30-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Menú</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Comedores</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element">Siéntete cómodo y disfruta nuestro servicio de restaurante.</p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Fruits and Vegetables">
                  <a class="img-thumbnail-variant-3" href="images/gallery/32.jpg" data-lightgallery="item">
                    <figure><img src="images/gallery/32-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Frutas y Verduras</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Fresas de temporada</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element"></p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Juices">
                  <a class="img-thumbnail-variant-3" href="images/gallery/29.jpg" data-lightgallery="item">
                    <figure><img src="images/gallery/29-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Jugos</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Escamocha de Sandía</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element"></p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Fruits and Vegetables">
                  <a class="img-thumbnail-variant-3" href="images/gallery/33.jpg" data-lightgallery="item">
                    <figure><img src="images/gallery/33-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Frutas y Verduras</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Aguacates</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element"></p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Fruits and Vegetables">
                  <a class="img-thumbnail-variant-3" href="images/gallery/44.jpg" data-lightgallery="item">
                    <figure><img src="images/gallery/44-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Frutas y Verduras</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Gran variedad de frutas y verduras</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element"></p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Menú">
                  <a class="img-thumbnail-variant-3" href="images/gallery/45.jpg" data-lightgallery="item">
                    <figure><img src="images/gallery/45-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Menú</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Comedores.</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element"></p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Fruits and Vegetables">
                  <a class="img-thumbnail-variant-3" href="images/gallery/49.jpg" data-lightgallery="item">
                    <figure><img src="images/gallery/49-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Frutas y Verduras</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Frutas dulces y frescas.</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element"></p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Fruits and Vegetables">
                  <a class="img-thumbnail-variant-3" href="images/gallery/65.jpg" data-lightgallery="item">
                    <figure><img src="images/gallery/65-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Frutas y Verduras</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Uvas.</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element"></p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Menú">
                  <a class="img-thumbnail-variant-3" href="images/gallery/66.jpg" data-lightgallery="item">
                    <figure><img src="images/gallery/66-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Menú</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Arrachera con quesadillas.</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element"></p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Meat">
                  <a class="img-thumbnail-variant-3" href="images/gallery/55.jpg" data-lightgallery="item">
                    <figure><img src="images/gallery/55-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Cortes de Carne</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Tbone.</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element"></p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Meat">
                  <a class="img-thumbnail-variant-3" href="images/gallery/56.jpg" data-lightgallery="item">
                    <figure><img src="images/gallery/56-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Cortes de Carne</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Molida de Res.</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element"></p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Meat">
                  <a class="img-thumbnail-variant-3" href="images/gallery/57.jpg" data-lightgallery="item">
                    <figure><img src="images/gallery/57-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Cortes de Carne</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Cuete.</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element"></p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Meat">
                  <a class="img-thumbnail-variant-3" href="images/gallery/58.jpg" data-lightgallery="item">
                    <figure><img src="images/gallery/58-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Cortes de Carne</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Costilla de Res.</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element"></p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Meat">
                  <a class="img-thumbnail-variant-3" href="images/gallery/59.jpg" data-lightgallery="item">
                    <figure><img src="images/gallery/59-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Cortes de Carne</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Falda de Res.</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element"></p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Meat">
                  <a class="img-thumbnail-variant-3" href="images/gallery/60.jpg" data-lightgallery="item">
                    <figure><img src="images/gallery/60-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Cortes de Carne</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Chuleta de Res.</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element"></p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Meat">
                  <a class="img-thumbnail-variant-3" href="images/gallery/61.jpg" data-lightgallery="item">
                    <figure><img src="images/gallery/61-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Cortes de Carne</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Pollo Entero.</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element"></p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Meat">
                  <a class="img-thumbnail-variant-3" href="images/gallery/62.jpg" data-lightgallery="item">
                    <figure><img src="images/gallery/62-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Cortes de Carne</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Pechuga de Pollo.</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element"></p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Meat">
                  <a class="img-thumbnail-variant-3" href="images/gallery/63.jpg" data-lightgallery="item">
                    <figure><img src="images/gallery/63-thumb.jpg" alt="" width="418" height="315">
                    </figure>
                    <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                      <ul class="list-inline-tag hover-top-element">
                        <li>Cortes de Carne</li>
                      </ul>
                      <p class="heading-5 hover-top-element">Lomo.</p>
                      <div class="divider"></div>
                      <p class="small hover-bottom-element"></p><span class="icon arrow-right linear-icon-plus"></span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- counters-->
      <section class="section parallax-container context-dark" data-parallax-img="images/slider-bg-lg.png">
        <div class="parallax-content">
          <div class="container section-md">
            <div class="row justify-content-md-center row-50">
              <div class="col-md-6 col-lg-3">
                <!-- Box counter-->
                <article class="box-counter">
                  <div class="box-counter__icon linear-icon-history"></div>
                  <div class="box-counter__wrap">
                    <div class="counter">30</div>
                  </div>
                  <p class="box-counter__title">AÑOS DE EXPERIENCIA</p>
                </article>
              </div>
              <div class="col-md-6 col-lg-3">
                <!-- Box counter-->
                <article class="box-counter">
                  <div class="box-counter__icon linear-icon-layers"></div>
                  <div class="box-counter__wrap">
                    <div class="counter">20</div>
                  </div>
                  <p class="box-counter__title">CORTES DE CARNE</p>
                </article>
              </div>
              <div class="col-md-6 col-lg-3">
                <!-- Box counter-->
                <article class="box-counter">
                  <div class="box-counter__icon linear-icon-leaf"></div>
                  <div class="box-counter__wrap">
                    <div class="counter">100</div>
                  </div>
                  <p class="box-counter__title">TIPOS DE FRUTAS Y VERDURAS</p>
                </article>
              </div>
              <div class="col-md-6 col-lg-3">
                <!-- Box counter-->
                <article class="box-counter">
                  <div class="box-counter__icon linear-icon-dinner"></div>
                  <div class="box-counter__wrap">
                    <div class="counter">20</div>
                  </div>
                  <p class="box-counter__title">PLATILLOS A LA CARTA</p>
                </article>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- CONTACT -->
      <section class="bg-gray-lighter object-wrap decor-text text-center" data-content="Contact" id="contacto">
        <div class="section-lg">
          <div class="container">
            <h4 class="heading-decorated">CONTÁCTO</h4>
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <h4 class="heading-decorated">DUDAS Y SUGERENCIAS</h4>
                <!-- RD Mailform-->
                <form id="contactForm" class="rd-mailform rd-mailform_style-1" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" novalidate="novalidate">
                  <input type="hidden" name="g-recaptcha-response" />
                  <div class="form-wrap">
                    <input class="form-input form-control-has-validation" id="contact-name" type="text" name="name" data-constraints="@Required"><span class="form-validation"></span>
                    <label class="form-label rd-input-label" for="contact-name">Nombre</label>
                  </div>
                  <div class="form-wrap">
                    <input class="form-input form-control-has-validation" id="contact-email" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>
                    <label class="form-label rd-input-label" for="contact-email">Correo Electrónico</label>
                  </div>
                  <div class="form-wrap">
                    <input class="form-input form-control-has-validation" id="contact-phone" type="phone" name="phone"><span class="form-validation"></span>
                    <label class="form-label rd-input-label" for="contact-phone">Teléfono (Opcional)</label>
                  </div>
                  <div class="form-wrap">
                    <textarea class="form-input form-control-has-validation" id="contact-message" name="message" data-constraints="@Required"></textarea><span class="form-validation"></span>
                    <label class="form-label rd-input-label" for="contact-message">Mensaje</label>
                  </div>
                  <!--Google captcha-->
                  <div class="form-wrap">
                      <div id="captcha1" data-sitekey="6Lc35Z8UAAAAAJsppsyMcLlfgCZTpiRJDutXLJUO" data-target-input="[name = 'g-recaptcha-response']" data-theme="dark" class="recaptcha"></div>
                  </div>
                  <!-- End google captcha-->
                  <button class="button button-primary" type="submit">ENVÍAR</button>
                </form>
              </div>
              <div class="col-lg-6">
                <h4 class="heading-decorated">¡UBÍCANOS!</h4>
                <div class="google-map-container" data-zoom="16" data-center="20.6364543,-103.4280554" data-key="AIzaSyCGGNJ5FcRSQhuesXWYJ_Jt93WWBvMOs-k">
                    <div class="google-map" style="min-height: 350px"></div>
                    <ul class="google-map-markers">
                        <li data-selected="true" data-location="20.6364543,-103.4280554" data-description="Calle Tomas Balcázar 5466-A, Paseos del Sol, 45070 Zapopan, Jal."></li>
                    </ul>
                </div>
            </div>
          </div>
        </div>
      </section>


      <section class="section parallax-container context-dark decor-text" data-parallax-img="images/bg-collage.jpg" data-content="RECOMENDACIONES">
        <div class="parallax-content">
          <div class="container section-lg text-center">
            <h4 class="heading-decorated">LO QUE DICEN NUESTROS CLIENTES</h4>
            <!-- Owl Carousel-->
            <div class="owl-carousel" data-items="1" data-stage-padding="15" data-loop="true" data-margin="30" data-dots="true" data-nav="false" data-autoplay="true">
              <div class="item">
                <!-- Quote default-->
                <div class="quote-default">
                  <div class="quote-default__image"><img src="images/profile.png" alt="" width="120" height="120"/>
                  </div>
                  <div class="quote-default__text">
                    <p class="q">Cuando puedo paso a comer unos tacos de asada, arrachera, chorizo o campechanos muy bien servidos y atendidos a un buen precio. Tienen carnitas y hasta restaurante en la parte alta, como carniceria de buena calidad y bien surtida de frutas verduras.</p>
                  </div>
                  <p class="quote-default__cite">Armando Limón</p>
                </div>
              </div>
              <div class="item">
                <!-- Quote default-->
                <div class="quote-default">
                  <div class="quote-default__image"><img src="images/profile.png" alt="" width="120" height="120"/>
                  </div>
                  <div class="quote-default__text">
                    <p class="q">Simplemente los mejores, tienen de todo un poco, me encanta.</p>
                  </div>
                  <p class="quote-default__cite">Fabiola Larios</p>
                </div>
              </div>
              <div class="item">
                <!-- Quote default-->
                <div class="quote-default">
                  <div class="quote-default__image"><img src="images/profile.png" alt="" width="120" height="120"/>
                  </div>
                  <div class="quote-default__text">
                    <p class="q">Excelentes alimentos, muy frescos, desayunos y comidas buffet muy sabrosas, además precios muy accesibles. Higiene y trato amable por parte de su personal.</p>
                  </div>
                  <p class="quote-default__cite">Carlos Gutierrez</p>
                </div>
              </div>
              <div class="item">
                <!-- Quote default-->
                <div class="quote-default">
                  <div class="quote-default__image"><img src="images/profile.png" alt="" width="120" height="120"/>
                  </div>
                  <div class="quote-default__text">
                    <p class="q">Carniceria porky tiene muy buena calidad em sus carnes y un excelente servicio. Ademas de Muy buenos tacos. Les recomiendo más los de costilla asada.</p>
                  </div>
                  <p class="quote-default__cite">Fredy Zavala</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Page Footer -->
      <section class="pre-footer-corporate bg-image-7 bg-overlay-darkest">
        <div class="container">
          <div class="row justify-content-sm-center justify-content-lg-start row-30 row-md-60">
            <div class="col-sm-10 col-md-6 col-lg-10 col-xl-3">
              <h6>Acerca de</h6>
              <p>Carnes Selectas Porky's es un establecimiento abierto al público en general para la venta y distribución de productos alimenticios destacando nuestras carnes selectas de calidad que se preparan en platillos a la carta o para llevar aprovechando la frescura, sabor y tradición que nos distinguen.</p>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-3 col-xl-3">
              <h6>Navigation</h6>
              <ul class="list-xxs">
                <li><a href="#inicio">INICIO</a></li>
                <li><a href="#nosotros">NOSOTROS</a></li>
                <li><a href="#section_sevices">SERVICIOS</a></li>
                <li><a href="#galeria">GALERÍA</a></li>
                <li><a href="#contacto">CONTACTO</a></li>
              </ul>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-5 col-xl-3">
              <h6>RECOMENDACIONES</h6>
              <ul class="list-xs">
                <li>
                  <!-- Comment minimal-->
                  <article class="comment-minimal">
                    <p class="comment-minimal__author">Fabiola Larios</p>
                    <p class="comment-minimal__link"><a href="#">Simplemente los mejores, tienen de todo un poco, me encanta.</a></p>
                  </article>
                </li>
                <li>
                  <!-- Comment minimal-->
                  <article class="comment-minimal">
                    <p class="comment-minimal__author">Carlos Gutierrez</p>
                    <p class="comment-minimal__link"><a href="#">Excelentes alimentos, muy frescos, desayunos y comidas buffet muy sabrosas, además precios muy accesibles, higiene y trato amable por parte de su personal.</a></p>
                  </article>
                </li>
              </ul>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-4 col-xl-3">
              <h6>Contacts</h6>
              <ul class="list-xs">
                <li>
                  <dl class="list-terms-minimal">
                    <dt>Dirección</dt>
                    <dd><a href="https://www.google.com/maps/place/Carnes+Selectas+PORKY'S/@20.636599,-103.4279512,15z/data=!4m2!3m1!1s0x0:0xf861b45b2e08ab5e?sa=X&ved=2ahUKEwjFpObb7uDhAhUJD60KHfi-AC8Q_BIwCnoECAsQCA" target="_blank">Calle Tomas Balcázar 5466-A, Paseos del Sol, 45070 Zapopan, Jal.</a></dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-terms-minimal">
                    <dt>Teléfono</dt>
                    <dd>
                      <ul class="list-semicolon">
                        <li><a href="tel:3336347630">33 3634 7630</a></li>
                        <li><a href="tel:3324103750">33 2410 3750</a></li>
                      </ul>
                    </dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-terms-minimal">
                    <dt>Correos</dt>
                    <dd>
                      <br/>
                      <ul class="list-semicolon">
                        <li><a href="mailto:contactoporkys@gmail.com">contactoporkys@gmail.com</a></li>
                        <li><a href="mailto:facturacionporkys@gmail.com">facturacionporkys@gmail.com</a></li>
                      </ul>
                    </dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-terms-minimal">
                    <dt>Horario</dt>
                    <dd><br />Lunes a Sábado: 9am a 6pm</dd>
                    <dd><br />Domingo: 9am a 5pm</dd>
                  </dl>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <footer class="footer-corporate bg-gray-darkest">
        <div class="container">
          <div class="footer-corporate__inner">
            <p class="rights"><span>Carnes Selectas Porky's</span><span>&nbsp;</span><span class="copyright-year"></span>. Todos los derechos reservados.</p>
            <ul class="list-inline-xxs">
              <li class="text-white">¡SÍGUENOS!</li>
              <li><a target="_blank" class="icon icon-xxs icon-primary fa fa-facebook" href="https://www.facebook.com/pg/CarnesSelectasPorkisalgrill"></a></li>
              <li><a target="_blank" class="icon icon-xxs icon-gray-darker fa fa-instagram" href="https://www.instagram.com/carnesselectasporkys/"></a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>