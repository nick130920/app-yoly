@extends('layouts.app')
@section('title', 'Listado de productos')

@section('perfil')
<a class="dropdown-item" href="{{ route('perfil') }}">{{ __('Perfil') }}</a>
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
                        <p class="lead  text-white">Compras en linea de los mejores zapatos.</p>
                        <div class="btn-wrapper">
                            <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html" class="btn btn-info btn-icon mb-3 mb-sm-0">
                                <span class="btn-inner--icon"><i class="fa fa-code"></i></span>
                                <span class="btn-inner--text">¿Como comprar?</span>
                            </a>
                            <a href="https://www.creative-tim.com/product/argon-design-system" class="btn btn-white btn-icon mb-3 mb-sm-0">
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

<!-- <section class="section section-lg">
    <div class="container">
        <div class="row row-grid align-items-center">
            <div class="col-md-6 order-md-2">
                <img src="{{asset('/img/theme/promo-1.png')}}" class="img-fluid floating">
            </div>
            <div class="col-md-6 order-md-1">
                <div class="pr-md-5">
                    <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle mb-5">
                        <i class="ni ni-settings-gear-65"></i>
                    </div>
                    <h3>Awesome features</h3>
                    <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
                    <ul class="list-unstyled mt-5">
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="badge badge-circle badge-success mr-3">
                                        <i class="ni ni-settings-gear-65"></i>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="mb-0">Carefully crafted components</h6>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="badge badge-circle badge-success mr-3">
                                        <i class="ni ni-html5"></i>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="mb-0">Amazing page examples</h6>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="badge badge-circle badge-success mr-3">
                                        <i class="ni ni-satisfied"></i>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="mb-0">Super friendly support team</h6>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- <section class="section bg-secondary">
    <div class="container">
        <div class="row row-grid align-items-center">
            <div class="col-md-6">
                <div class="card bg-default shadow border-0">
                    <img src="{{asset('/img/theme/img-1-1200x1000.jpg')}}" class="card-img-top">
                    <blockquote class="card-blockquote">
                        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="svg-bg">
                            <polygon points="0,52 583,95 0,95" class="fill-default" />
                            <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default" />
                        </svg>
                        <h4 class="display-3 font-weight-bold text-white">Design System</h4>
                        <p class="lead text-italic text-white">The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens.</p>
                    </blockquote>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pl-md-5">
                    <div class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle mb-5">
                        <i class="ni ni-settings"></i>
                    </div>
                    <h3>Our customers</h3>
                    <p class="lead">Don't let your uses guess by attaching tooltips and popoves to any element. Just make sure you enable them first via JavaScript.</p>
                    <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
                    <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
                    <a href="#" class="font-weight-bold text-warning mt-5">A beautiful UI Kit for impactful websites</a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="section section-lg section-shaped pb-250 ">
  <div class="shape shape-style-1 shape-default shape-skew alpha-4 bg-gradient-warning">
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
  <div class="nn bg-gradient-warning"></div>
    <div class="container py-lg-md d-flex">
        <div class="row row-grid align-items-center">
          <div class="col-md-12">
            <div class="card card-plain">
              <div class="mora card-header card-header-primary">
                <h4 class="card-title mt-0">Tabla de productos</h4>
                <p class="card-category">Encontraras todos los productos</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead class="">
                      <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Referencia</th>
                        <th>Categoria</th>
                        <th>Precio</th>
                        <th class="acti">Acciones</th>
                      </tr>
                     </thead>
                     <tbody>
                       @foreach ($products as $product)
                       <tr>
                         <td>{{ $product->id}}</td>
                         <td>{{ $product->name}}</td>
                         <td>{{ $product->description}}</td>
                         <td>{{ $product->reference}}</td>
                         <td>{{ $product->category->name}}</td>
                         <td>{{ $product->price}}</td>
                         <td class="td-actions text-right">
                           <a href="" rel="tooltip" title="Ver producto" class="ico btn btn-1 btn-outline-info">
                             <i class="fa fa-info"></i>
                           </a>
                           <a href="" class="ico btn btn-1 btn-outline-success" title="Ver producto">
                            <i class="tim-icons icon-settings-gear-63"></i>
                          </a>
                          <a href="" class="ico btn btn-1 btn-outline-warning" title="Ver producto">
                           <i class="tim-icons icon-trash-simple"></i>
                         </a>
                         </td>
                       </tr>
                       @endforeach
                    </tbody>
                  </table>
                </div>
                  {{$products->links()}}
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
                <!-- <p class="lead text-white">According to the National Oceanic and Atmospheric Administration, Ted, Scambos, NSIDClead scentist, puts the potentially record low maximum sea ice extent tihs year down to low ice.</p> -->
            </div>
        </div>
        <!-- <div class="row row-grid mt-5">
            <div class="col-lg-4">
                <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                    <i class="ni ni-settings text-primary"></i>
                </div>
                <h5 class="text-white mt-3">Building tools</h5>
                <p class="text-white mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="col-lg-4">
                <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                    <i class="ni ni-ruler-pencil text-primary"></i>
                </div>
                <h5 class="text-white mt-3">Grow your market</h5>
                <p class="text-white mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="col-lg-4">
                <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                    <i class="ni ni-atom text-primary"></i>
                </div>
                <h5 class="text-white mt-3">Launch time</h5>
                <p class="text-white mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div> -->
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

<footer class="footer has-cards">
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
</footer>
@endsection
