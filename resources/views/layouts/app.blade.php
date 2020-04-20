<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Yoly Shoes empresa de comercialización de zapatos para dama.">
  <meta name="author" content="Nicolás Muñoz">
  <title>@yield('title','Yoly Shoes')</title>
  <!-- Favicon -->
  <link href="{{asset('/img/brand/logo.png')}}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <!-- Icons -->
  <link href="{{asset('/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/nucleo-icons.css')}}" rel="stylesheet">
  <link href="{{asset('css/animate.css')}}" rel="stylesheet">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('/css/style_select.css')}}">
  <link type="text/css" href="{{asset('/css/argon.css?v=1.0.1')}}" rel="stylesheet">

  <!-- Docs CSS -->
  <link type="text/css" href="{{asset('/css/docs.min.css')}}" rel="stylesheet">
</head>

<body>
  <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="{{ route('welcome') }}">
          <img src="{{asset('/img/brand/whiteyoly.png')}}" class="logoyoly">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="{{ route('welcome') }}">
                  <img src="{{asset('/img/brand/blueyoly.png')}}">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                <i class="ni ni-ui-04 d-lg-none"></i>
                <span class="nav-link-inner--text">Menú</span>
              </a>
              <div class="dropdown-menu dropdown-menu-xl">
                <div class="dropdown-menu-inner">
                  <a href="{{ route('welcome') }}" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                      <i class="fa fa-home"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="heading text-primary mb-md-1">Inicio</h6>
                      <p class="description d-none d-md-inline-block mb-0">Pagina de inicio.</p>
                    </div>
                  </a>
                  <a href="{{ route('home') }}" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                      <i class="ni ni-ui-04"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h5 class="heading text-warning mb-md-1">Dashboard</h5>
                      <p class="description d-none d-md-inline-block mb-0">Panel de control para tus compras.</p>
                    </div>
                  </a>
                  @guest
                  @else
                    @if (auth()->user()->admin)
                      <a href="{{ url('/admin/products') }}" class="media d-flex align-items-center">
                        <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                          <i class="ni ni-palette"></i>
                        </div>
                        <div class="media-body ml-3">
                          <h6 class="heading text-primary mb-md-1">{{ __('Gestionar Productos') }}</h6>
                          <p class="description d-none d-md-inline-block mb-0">Gestiona tus productos en un solo lugar.</p>
                        </div>
                      </a>
                      <a href="{{ url('/admin/categories') }}" class="media d-flex align-items-center">
                        <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                          <i class="ni ni-tag"></i>
                        </div>
                        <div class="media-body ml-3">
                          <h6 class="heading text-primary mb-md-1">{{ __('Gestionar Categorias') }}</h6>
                          <p class="description d-none d-md-inline-block mb-0">Gestiona tus categorias.</p>
                        </div>
                      </a>
                    @endif
                  @endguest
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            @guest
            @else
              <li class="nav-item">
                  <a class="btn btn-icon btn-3 btn-outline-transparent" href="{{route('home')}}" data-toggle="tooltip" title="Carrito de compras">
                    <span class="btn-inner--icon"><i class="ni ni-cart"></i></span>
                    <span class="btn-inner--text">Carrito</span>
                  </a>
                </li>
            @endguest
            @guest
              @yield('login')
              @yield('registro')
             @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  <strong>{{ Auth::user()->name }}</strong>
                  <i class="fa fa-user fa-lg"></i>
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  @if (auth()->user()->admin)
                    <li>
                      <a class="dropdown-item" href="{{ url('/admin/products') }}">{{ __('Gestionar Productos') }}</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{ url('/admin/categories') }}">{{ __('Gestionar Categorias') }}</a>
                    </li>
                  @endif
                  <li>
                    <a class="dropdown-item" href="{{ route('perfil') }}">{{ __('Perfil') }}</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Cerrar sesión') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </li>
                </ul>
              </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>
  </header>
<main>
  @yield('content')
</main>
<footer class="footer">
  <div class="container">
    <div class="row row-grid align-items-center mb-5">
      <div class="col-lg-6">
        <h3 class="text-primary font-weight-light mb-2">¡Gracias por apoyarnos!</h3>
        <h4 class="mb-0 font-weight-light">Pongámonos en contacto con cualquiera de estas plataformas.!</h4>
      </div>
      <div class="col-lg-6 text-lg-center btn-wrapper">
        <a target="_blank" href="https://twitter.com/yolyshoes" class="btn btn-neutral btn-icon-only btn-twitter btn-round btn-lg" data-toggle="tooltip" data-original-title="Siguenos">
          <i class="fa fa-twitter"></i>
        </a>
        <a target="_blank" href="https://www.facebook.com/yolyshoes" class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg" data-toggle="tooltip" data-original-title="like">
          <i class="fa fa-facebook-square"></i>
        </a>
        <a target="_blank" href="https://dribbble.com/yolyshoes" class="btn btn-neutral btn-icon-only btn-dribbble btn-lg btn-round" data-toggle="tooltip" data-original-title="Siguenos">
          <i class="fa fa-dribbble"></i>
        </a>
        <a target="_blank" href="https://github.com/yolyshoes" class="btn btn-neutral btn-icon-only btn-github btn-round btn-lg" data-toggle="tooltip" data-original-title="Github">
          <i class="fa fa-github"></i>
        </a>
      </div>
    </div>
    <hr>
    <div class="row align-items-center justify-content-md-between">
      <div class="col-md-6">
        <div class="copyright">
          &copy; 2018
          <a href="https://www.yolyshoes.com" target="_blank">Yoly Shoes</a>.
        </div>
      </div>
      <div class="col-md-6">
        <ul class="nav nav-footer justify-content-end">
          <li class="nav-item">
            <a href="https://www.yolyshoes.com" class="nav-link" target="_blank">Yoly Shoes</a>
          </li>
          <li class="nav-item">
            <a href="https://www.yolyshoes.com/presentation" class="nav-link" target="_blank">Sobre nosotros</a>
          </li>
          <li class="nav-item">
            <a href="https://www.yolyshoes/blog.com" class="nav-link" target="_blank">Blog</a>
          </li>
          <li class="nav-item">
            <a href="https://github.com/yolyshoes/argon-design-system/blob/master/LICENSE.md" class="nav-link" target="_blank">License</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<!--   Core JS Files   -->
<script src="{{asset('assets/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/material.min.js')}}"></script>
<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
<script src="{{asset('assets/js/bootstrap-tagsinput.js')}}"></script>

<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{asset('assets/js/jasny-bootstrap.min.js')}}"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="{{asset('assets/js/material-kit.js?v=1.2.1')}}" type="text/javascript"></script>
<!-- Core -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/popper/popper.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/headroom/headroom.min.js')}}"></script>
<!-- Argon JS -->
<script src="{{asset('/js/argon.js?v=1.0.1')}}"></script>
<script src="{{asset('js/index.js')}}"></script>
<script src="{{asset('js/notify.js')}}"></script>
<script src="{{asset('js/bootstrap-notify.js')}}"></script>
</body>
</html>
