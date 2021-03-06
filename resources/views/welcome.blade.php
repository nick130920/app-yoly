@extends('layouts.app')
@section('title', 'Bienvenido a Yoly Shoes')

@section('perfil')
  <a class="dropdown-item" href="{{ route('perfil') }}">{{ __('Perfil') }}</a>
@endsection
@section('login')
  <li class="nav-item d-none d-lg-block ml-lg-4">
    <a class="btn btn-neutral btn-icon" href="{{ route('login') }}">
      <span class="btn-inner--icon">
        <i class="ni ni-circle-08"></i>
      </span>
      <span class="nav-link-inner--text">{{ __('Ingresar') }}</span>
    </a>
  </li>
@endsection

@section('registro')
  <li class="nav-item">
    @if (Route::has('register'))
      <li class="nav-item d-none d-lg-block ml-lg-4">
        <a class="btn btn-neutral btn-icon" href="{{ route('register') }}">
          <span class="btn-inner--icon">
            <i class="fa fa-address-card-o"></i>
          </span>
          <span class="nav-link-inner--text">{{ __('Registro') }}</span>
        </a>
      </li>
    @endif
  </li>
@endsection

@section('content')
  <div class="position-relative">
    <!-- shape Hero -->
    <section class="section section-lg section-shaped pb-250">
      <div class="shape shape-style-1 shape-default shape-skew alpha-4">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container py-lg-md d-flex">
        <div class="col px-0">
          <div class="row">
            <div class="col-lg-6">
              <h1 class="display-3 text-ente">Yoly Shoes
                <span></span>
              </h1>
              <p class="lead  text-white">Compra en linea los mejores zapatos.</p>
              <div class="btn-wrapper">
                <a href="#vidio" class="btn btn-info btn-icon mb-3 mb-sm-0">
                  <span class="btn-inner--icon"><i class="fa fa-code"></i></span>
                  <span class="btn-inner--text">¿Como comprar?</span>
                </a>
                <a href="#vidio" class="btn btn-white btn-icon mb-3 mb-sm-0">
                  <span class="btn-inner--icon"><i class="fa fa-play"></i></span>
                  <span class="btn-inner--text">mira...</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- 1st Hero Variation -->
  </div>
  <section class="section section-lg pt-lg-0 mt--200">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="row row-grid">
            <div class="col-lg-4">
              <div class="card card-lift--hover shadow border-0">
                <div class="card-body py-5">
                  <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                    <i class="ni ni-check-bold"></i>
                  </div>
                  <h6 class="text-primary text-uppercase">Calidad</h6>
                  <p class="description mt-3">los mejores productos con calidad asegurada para tu comodidad y satisfacción al momento de caminar.</p>
                  <div>
                    <span class="badge badge-pill badge-primary">Cuero</span>
                    <span class="badge badge-pill badge-primary">sintetico</span>
                    <span class="badge badge-pill badge-primary">tela</span>
                  </div>
                  <a href="#" class="btn btn-primary mt-4">Leer más</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-lift--hover shadow border-0">
                <div class="card-body py-5">
                  <div class="icon icon-shape icon-shape-success rounded-circle mb-4">
                    <i class="ni ni-istanbul"></i>
                  </div>
                  <h6 class="text-success text-uppercase">Variedad</h6>
                  <p class="description mt-3">Yoly shoes tiene una gran variedad en productos para los diferentes gustos, desde sandalias hasta tacón alto.</p>
                  <div>
                    <span class="badge badge-pill badge-success">Sandalias</span>
                    <span class="badge badge-pill badge-success">Tacones</span>
                    <span class="badge badge-pill badge-success">Botas</span>
                  </div>
                  <a href="#" class="btn btn-success mt-4">Leer más</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-lift--hover shadow border-0">
                <div class="card-body py-5">
                  <div class="icon icon-shape icon-shape-warning rounded-circle mb-4">
                    <i class="ni ni-planet"></i>
                  </div>
                  <h6 class="text-warning text-uppercase">Seguridad</h6>
                  <p class="description mt-3">Satisfacción asegurada, verificamos que sus compras lleguen al lugar indicado, seguridad a la hora de comprar.</p>
                  <div>
                    <span class="badge badge-pill badge-warning">marketing</span>
                    <span class="badge badge-pill badge-warning">product</span>
                    <span class="badge badge-pill badge-warning">launch</span>
                  </div>
                  <a href="#" class="btn btn-warning mt-4">Leer más</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section pb-0 bg-gradient-warning">
    <div class="container">
      <div class="row row-grid align-items-center">
        <div class="col-md-6 order-lg-2 ml-lg-auto">
          <div class="position-relative pl-md-5">
            <img src="{{asset('/img/ill/ill-2.svg')}}" class="img-center img-fluid">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="d-flex px-3">
            <div>
              <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                <i class="ni ni-building text-primary"></i>
              </div>
            </div>
            <div class="pl-4">
              <h4 class="display-3 text-white">Interfaz moderna</h4>
              <p class="text-white"></p>
            </div>
          </div>
          <div class="card card-lift--hover shadow shadow-lg--hover mt-5">
            <div class="card-body">
              <div class="d-flex px-3">
                <div>
                  <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                    <i class="ni ni-satisfied"></i>
                  </div>
                </div>
                <div class="pl-4">
                  <h5 class="title text-success">Soporte increible</h5>
                  <p>Atendemos rápidamente cualquier consulta que tengas vía chat. No estas sóla, sino que siempre estamos atentos a tus inquietudes.</p>
                  <a href="#" class="text-success">Leer más</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card card-lift--hover shadow shadow-lg--hover mt-5">
            <div class="card-body">
              <div class="d-flex px-3">
                <div>
                  <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                    <i class="ni ni-settings"></i>
                  </div>
                </div>
                <div class="pl-4">
                  <h5 class="title text-warning">Pago seguro</h5>
                  <p>Todo pedido que realices será confirmado. Si no confías en los pagos en línea puedes pagar contra entrega el valor acordado.</p>
                  <a href="#" class="text-warning">Leer más</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- SVG separator -->
    <div class="separator separator-bottom separator-skew zindex-100">
      <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
      </svg>
    </div>
  </section>
  <section class="section section-lg">
    <div class="container">
      <div class="row justify-content-center text-center mb-lg">
        <div class="col-lg-8">
          <h2 class="display-3">Productos preferidos</h2>
        </div>
      </div>
      <div class="row">

        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row row-grid">
              @php ($a = 1)
              @php ($b = 2)
              @php ($c = 3)
              @php ($success = $a)
              @foreach ($products as $product)
                @if ($success === $a)
                  <div class="col-lg-4">
                    <div class="nick card card-lift--hover shadow border-0">
                      <div class="card-body py-5">
                        <div class="ms">
                          <a href="{{url('products/'.$product->id.'')}}" data-toggle="tooltip" data-placement="right" data-original-title="Ver más"><img src="{{$product->featured_image_url}}" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;height: 200px;"></a>
                        </div>
                        <div class="mins">
                          <h6 class="text-success text-uppercase">{{ $product->name }}</h6>
                          <p class="description mt-3">{{$product->description}}</p>
                        </div>
                        <div>
                          <div>
                            <span class="badge badge-pill badge-success">{{$product->category->name}}</span>
                            <span class="badge badge-pill badge-success">{{$product->category->name}}</span>
                            <span class="badge badge-pill badge-success">{{$product->category->name}}</span>
                          </div>
                          <a href="{{url('products/'.$product->id.'')}}" data-toggle="tooltip" data-placement="top" class="bg-gradient-success text-white btn btn-icon btn-success mt-4" data-original-title="Ver más">
                            <span class="btn-inner--icon">
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                          </span>
                          <span class="btn-inner--text">{{ $product->price }}</span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                @endif
                @if ($success === $b)
                  <div class="col-lg-4">
                    <div class="nick card card-lift--hover shadow border-0">
                      <div class="card-body py-5">
                        <div>
                          <a href="{{url('show')}}" data-toggle="tooltip" data-placement="right" data-original-title="Ver más"><img src="{{$product->featured_image_url}}" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;height: 200px;"></a>
                        </div>
                        <div class="mins">
                          <h6 class="text-warning text-uppercase">{{ $product->name }}</h6>
                          <p class="description mt-3">{{$product->description}}</p>
                        </div>
                        <div>
                          <div>
                            <span class="badge badge-pill badge-warning">{{$product->category->name}}</span>
                            <span class="badge badge-pill badge-warning">{{$product->category->name}}</span>
                            <span class="badge badge-pill badge-warning">{{$product->category->name}}</span>
                          </div>
                          <a href="{{url('products/'.$product->id.'')}}" data-toggle="tooltip" data-placement="top" class="bg-gradient-warning text-white btn btn-icon btn-warning mt-4" data-original-title="Ver más">
                            <span class="btn-inner--icon">
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                          </span>
                          <span class="btn-inner--text">{{ $product->price }}</span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                @endif
                @if ($success === $c)
                  <div class="col-lg-4">
                    <div class="nick card card-lift--hover shadow border-0">
                      <div class="card-body py-5">
                        <div>
                          <a href="{{url('products/'.$product->id.'')}}" data-toggle="tooltip" data-placement="right" data-original-title="Ver más"><img src="{{$product->featured_image_url}}" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;height: 200px;"></a>
                        </div>
                        <div class="mins">
                          <h6 class="text-primary text-uppercase">{{ $product->name }}</h6>
                          <p class="description mt-3">{{$product->description}}</p>
                        </div>
                        <div>
                          <div>
                            <span class="badge badge-pill badge-primary">{{$product->category->name}}</span>
                            <span class="badge badge-pill badge-primary">{{$product->category->name}}</span>
                            <span class="badge badge-pill badge-primary">{{$product->category->name}}</span>
                          </div>
                          <a href="{{url('products/'.$product->id.'')}}" data-toggle="tooltip" data-placement="top" class="bg-gradient-primary text-white btn btn-icon btn-primary mt-4" data-original-title="Ver más">
                            <span class="btn-inner--icon">
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                          </span>
                          <span class="btn-inner--text">{{ $product->price }}</span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  @php ($a = $a + 3)
                  @php ($b = $b + 3)
                  @php ($c = $c + 3)
                @endif
                @php (++$success)
              @endforeach
            </div>
            <div class="text-center">
              {{$products->links()}}
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <section class="section section-lg pt-0">
    <div class="container">
      <div class="card bg-gradient-warning shadow-lg border-0">
        <div class="p-5">
          <div class="row align-items-center">
            <div class="col-lg-8">

              <h3 class="text-white">Nosotros hacemos un sitio construido para tu satisfacción.</h3>
              <h2 class="text-white">¿Por qué Yoly Shoes?</h3>
                <p class="lead text-white mt-3">Puedes revisar nuestra relación completa de productos, comparar precios y realizar tus pedidos cuando estés segura</p>
              </div>
              <div class="col-lg-3 ml-lg-auto">

                <a href="#" class="btn btn-lg btn-block btn-white">
                  <span class="btn-inner--icon"><i class="fa fa-code"></i></span>
                  <span class="btn-inner--text">Productos</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-lg bg-gradient-default">
      <div class="container pt-lg pb-300">
        <div class="row text-center justify-content-center">
          <div class="col-lg-10">
            <h2 class="display-3 text-white">Construir relación</h2>
          </div>
        </div>
      </div>
<!-- SVG separator -->
<div class="separator separator-bottom separator-skew zindex-100">
  <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
  </svg>
</div>
</section>
<section class="section section-lg pt-lg-0 section-contact-us">
  <div class="container">
    <div class="row justify-content-center mt--300">
      <div class="col-lg-8">
        <div class="card bg-gradient-secondary shadow">
          <div class="card-body p-lg-5">
            <h4 class="mb-1">¿Quieres hablar con nosotros?</h4>
            <p class="mt-0">Tu opinión es muy importante.</p>
            <div class="form-group mt-5">
              <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-user-run"></i></span>
                </div>
                <input class="form-control" placeholder="Nombre" type="text">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                </div>
                <input class="form-control" placeholder="Email" type="email">
              </div>
            </div>
            <div class="form-group mb-4">
              <textarea class="form-control form-control-alternative" name="name" rows="4" cols="80" placeholder="Escribenos..."></textarea>
            </div>
            <div>
              <button type="button" class="btn btn-default btn-round btn-block btn-lg">Enviar mensaje</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <section class="section section-lg">
  <div class="container">
    <div class="row row-grid justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 class="display-3">Do you love this awesome
          <span class="text-success">Design System for Bootstrap 4?</span>
        </h2>
        <p class="lead">Cause if you do, it can be yours for FREE. Hit the button below to navigate to Creative Tim where you can find the Design System in HTML. Start a new project or give an old Bootstrap project a new look!</p>
        <div class="btn-wrapper">
          <a href="https://www.creative-tim.com/product/argon-design-system" class="btn btn-primary mb-3 mb-sm-0">Download HTML</a>
        </div>
        <div class="text-center">
          <h4 class="display-4 mb-5 mt-5">Available on these technologies</h4>
          <div class="row justify-content-center">
            <div class="col-lg-2 col-4">
              <a href="https://www.creative-tim.com/product/argon-design-system" target="_blank" data-toggle="tooltip" data-original-title="Bootstrap 4 - Most popular front-end component library">
                <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/bootstrap.jpg" class="img-fluid">
              </a>
            </div>
            <div class="col-lg-2 col-4">
              <a href=" https://www.creative-tim.com/product/vue-argon-design-system" target="_blank" data-toggle="tooltip" data-original-title="Vue.js - The progressive javascript framework">
                <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/vue.jpg" class="img-fluid">
              </a>
            </div>
            <div class="col-lg-2 col-4">
              <a href=" https://www.sketchapp.com/" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] Sketch - Digital design toolkit">
                <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/sketch.jpg" class="img-fluid opacity-3">
              </a>
            </div>
            <div class="col-lg-2 col-4">
              <a href=" https://www.adobe.com/products/photoshop.html" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] Adobe Photoshop - Software for digital images manipulation">
                <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/ps.jpg" class="img-fluid opacity-3">
              </a>
            </div>
            <div class="col-lg-2 col-4">
              <a href=" https://angularjs.org/" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] Angular - One framework. Mobile &amp; desktop">
                <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/angular.jpg" class="img-fluid opacity-3">
              </a>
            </div>
            <div class="col-lg-2 col-4">
              <a href=" https://angularjs.org/" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] React - A JavaScript library for building user interfaces">
                <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/react.jpg" class="img-fluid opacity-3">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- <footer class="footer has-cards">
  <div class="container container-lg">
    <div class="row">
      <div class="col-md-6 mb-5 mb-md-0">
        <div class="card card-lift--hover shadow border-0">
          <a href="{{route('home')}}" title="home page">
            <img src="{{asset('/img/theme/landing.jpg')}}" class="card-img">
          </a>
        </div>
      </div>
      <div class="col-md-6 mb-5 mb-lg-0">
        <div class="card card-lift--hover shadow border-0">
          <a href="../examples/profile.html" title="Profile Page">
            <img src="{{asset('/img/theme/profile.jpg')}}" class="card-img">
          </a>
        </div>
      </div>
    </div>
  </div>
</footer> -->
@endsection
