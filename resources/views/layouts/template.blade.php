<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>INFOCOVID</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/Estilos.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}" >
  <link rel="stylesheet" href="{{ asset('css/EstilosTabla.css') }}">

  <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">-->

  <!-- css -->

  <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="/plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="/css/nivo-lightbox.css" rel="stylesheet" />
  <link href="/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="/css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="/css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="/css/animate.css" rel="stylesheet" />
  <link href="/css/style.css" rel="stylesheet">
  <!-- Para mapa css-->
  <link href="/leaflet/leaflet.css" rel="stylesheet">
  <!-- Para regitro-->

  <!-- boxed bg -->
  <link id="bodybg" href="/bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="/color/default.css" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
          <div class="top-area">
            <div class="container">
              <div class="row">
                <div class="col-sm-6 col-md-6">
                  <p class="bold text-left">Contactenos: 987654321 </p>
                </div>
                <div class="col-sm-6 col-md-6">
                  <p class="bold text-center">Nosotros | Informate</p>
                </div>
              </div>
            </div>
          </div>
          <div class="container navigation">

          @if (Route::has('login'))
            <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
              </button>
            @auth
              <a class="navbar-brand" href="{{route('welcomeUserRegister')}}">
                <img src="/img/logoy.png" class="img-responsive" alt="" width="200" height="75" />
              </a>
            @else
              <a class="navbar-brand" href="{{route('home')}}">
                <img src="/img/logoy.png" class="img-responsive" alt="" width="200" height="75" />
              </a>
            @endauth
            </div>
          @endif
            <!-- Collect the nav links, forms, and other content for toggling -->
            @if (Route::has('login'))
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#intro">Inicio</a></li>
                <li><a href="{{route('preciosTabla')}}">Buscar productos</a></li>
                <li><a href="{{route('noticias')}}">Noticias</a></li>
                <li><a href="{{route('comentarios')}}">Comentarios</a></li>
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registrarse <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{route('registro')}}">Registro de Usuario</a></li>
                    <li><a href="{{route('registro')}}">Registro de Dueño</a></li>
                  </ul>
                </li>
              @auth
                <li><a href="#"><form method="POST" action="{{ route('logout') }}">{{csrf_field()}}<button class="btn btn-danger btn-xs">Cerrar sesion</button></form></a></li>
              @else
                <li><a href="{{route('login')}}">Login del dueño</a></li>
              @endauth
              </ul>
            </div>
          @endif
            <!-- /.navbar-collapse -->
          </div>
          <!-- /.container -->
        </nav>

        <div class="main">
          @yield('contenido')
        </div>

    <footer>

      <!--<div class="container">
        <div class="row">

          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
               <img src="img/logoy.png" class="img-responsive center" alt="" width="200" height="75" /> 
              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
              </div>
            </div>
          </div>


          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
              <h4>CONTENIDO</h4>
                <ul>
                  <li><a href="#">¿Quiénes somos?</a></li>
                  <li><a href="#">Política y privacidad</a></li>
                  <li><a href="#">Atención al cliente</a></li>
                </ul>
              </div>
            </div>
          </div>


          <div class="col-sm-6 col-md-4" >
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5 >CONTACTENOS</h5>
                <ul>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> 987654321
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> infocovid@gmail.com
                  </li>

                </ul>
              </div>
            </div>
          </div>
          
        </div>
      </div>-->
      <!--<div class="sub-footer navbar navbar-fixed-bottom">--><!--Habilitar este div para que se mantenga siempre en pantalla-->
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInLeft" data-wow-delay="0.1s">
                <div class="text-center">
                  <p>&copy;Copyright - Grupo7CalidadDeSoftware. All rights reserved.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!--</div>-->
    </footer>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.scrollTo.js"></script>
    <script src="/js/jquery.appear.js"></script>
    <script src="/js/stellar.js"></script>
    <script src="/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/nivo-lightbox.min.js"></script>
    <script src="/js/custom.js"></script>

</body>
</html>
  

