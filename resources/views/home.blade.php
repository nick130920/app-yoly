@extends('layouts.app')

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
        <div class="center col-lg-10">
              <!-- Tabs with icons -->
              <div class="mb-3">
                <small class="text-uppercase font-weight-bold"></small>
              </div>
              <div class="nav-wrapper">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="false"><i class="ni ni-cloud-upload-96 mr-2"></i>Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Pedidos pendientes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 active show" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="true"><i class="ni ni-calendar-grid-58 mr-2"></i>Pedidos Realizados</a>
                  </li>
                </ul>
              </div>
              <div class="card shadow">
                <div class="card-body">
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                      <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                      <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                      <p class="description">Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                    </div>
                    <div class="tab-pane fade active show" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                      <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
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
<section class="section section-lg">
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
</section>
<section class="section bg-secondary">
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
                        <h4 class="display-3 text-white">Modern Interface</h4>
                        <p class="text-white">The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever.</p>
                    </div>
                </div>
                <div class="card shadow shadow-lg--hover mt-5">
                    <div class="card-body">
                        <div class="d-flex px-3">
                            <div>
                                <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                                    <i class="ni ni-satisfied"></i>
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5 class="title text-success">Awesome Support</h5>
                                <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever.</p>
                                <a href="#" class="text-success">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow shadow-lg--hover mt-5">
                    <div class="card-body">
                        <div class="d-flex px-3">
                            <div>
                                <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                    <i class="ni ni-active-40"></i>
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5 class="title text-warning">Modular Components</h5>
                                <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever.</p>
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
                <h2 class="display-3">The amazing Team</h2>
                <p class="lead text-muted">According to the National Oceanic and Atmospheric Administration, Ted, Scambos, NSIDClead scentist, puts the potentially record maximum.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="px-4">
                    <img src="{{asset('/img/theme/team-1-800x800.jpg')}}" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
                    <div class="pt-4 text-center">
                        <h5 class="title">
                            <span class="d-block mb-1">Ryan Tompson</span>
                            <small class="h6 text-muted">Web Developer</small>
                        </h5>
                        <div class="mt-3">
                            <a href="#" class="btn btn-warning btn-icon-only rounded-circle">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-warning btn-icon-only rounded-circle">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="btn btn-warning btn-icon-only rounded-circle">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="px-4">
                    <img src="{{asset('/img/theme/team-2-800x800.jpg')}}" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
                    <div class="pt-4 text-center">
                        <h5 class="title">
                            <span class="d-block mb-1">Romina Hadid</span>
                            <small class="h6 text-muted">Marketing Strategist</small>
                        </h5>
                        <div class="mt-3">
                            <a href="#" class="btn btn-primary btn-icon-only rounded-circle">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-primary btn-icon-only rounded-circle">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="btn btn-primary btn-icon-only rounded-circle">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="px-4">
                    <img src="{{asset('/img/theme/team-3-800x800.jpg')}}" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
                    <div class="pt-4 text-center">
                        <h5 class="title">
                            <span class="d-block mb-1">Alexander Smith</span>
                            <small class="h6 text-muted">UI/UX Designer</small>
                        </h5>
                        <div class="mt-3">
                            <a href="#" class="btn btn-info btn-icon-only rounded-circle">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-info btn-icon-only rounded-circle">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="btn btn-info btn-icon-only rounded-circle">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="px-4">
                    <img src="{{asset('/img/theme/team-4-800x800.jpg')}}" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
                    <div class="pt-4 text-center">
                        <h5 class="title">
                            <span class="d-block mb-1">John Doe</span>
                            <small class="h6 text-muted">Founder and CEO</small>
                        </h5>
                        <div class="mt-3">
                            <a href="#" class="btn btn-success btn-icon-only rounded-circle">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-success btn-icon-only rounded-circle">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="btn btn-success btn-icon-only rounded-circle">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </div>
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
                        <h3 class="text-white">We made website building easier for you.</h3>
                        <p class="lead text-white mt-3">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture.</p>
                    </div>
                    <div class="col-lg-3 ml-lg-auto">
                        <a href="https://www.creative-tim.com/product/argon-design-system" class="btn btn-lg btn-block btn-white">Download HTML</a>
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
                <h2 class="display-3 text-white">Build something</h2>
                <p class="lead text-white">According to the National Oceanic and Atmospheric Administration, Ted, Scambos, NSIDClead scentist, puts the potentially record low maximum sea ice extent tihs year down to low ice.</p>
            </div>
        </div>
        <div class="row row-grid mt-5">
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
                        <h4 class="mb-1">Want to work with us?</h4>
                        <p class="mt-0">Your project is very important to us.</p>
                        <div class="form-group mt-5">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-user-run"></i></span>
                                </div>
                                <input class="form-control" placeholder="Your name" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control" placeholder="Email address" type="email">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <textarea class="form-control form-control-alternative" name="name" rows="4" cols="80" placeholder="Type a message..."></textarea>
                        </div>
                        <div>
                            <button type="button" class="btn btn-default btn-round btn-block btn-lg">Send Message</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-lg">
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
</section>

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
