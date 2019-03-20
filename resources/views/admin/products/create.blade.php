@extends('layouts.app')
@section('title', 'Bienvenido a Yoly Shoes')

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
    </section>
    <!-- 1st Hero Variation -->
</div>
<section class="section section-lg pt-lg-0 mt--200">
    <div class="container">
      <div class="col-lg-12">
        <div class="card bg-secondary shadow border-0">
          <div class="card-header  bg-gradient-defa pb-5">
            <div class="text-muted text-center mb-3">
              <h2 class="re">Registrar Producto</h1>
            </div>
          </div>
          <div class="card-body px-lg-5 py-lg-5">
            <form method="post" action="{{ url('/admin/products') }}" role="form">
                {{csrf_field()}}
                <div class="ni form-gro">
                  <div class="name form-group">
                    <div class="no e input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                      </div>
                      <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre">
                    </div>
                  </div>
                  <div class="nami form-group">
                    <div class="ne no input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-money-coins"></i></span>
                      </div>
                      <input type="number" class="form-control" name="price" value="{{ old('price') }}" required  placeholder="Precio" >
                    </div>
                  </div>
                  <div class="nama form-group">
                    <div class="ne input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-collection"></i></span>
                      </div>
                      <input type="number" class="form-control" name="reference" value="{{ old('reference') }}" required  placeholder="Referencia" >
                    </div>
                  </div>
                </div>
                <div class="inputs">
                  <div class="des form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-ruler-pencil"></i></span>
                      </div>
                      <input type="text" class="form-control" name="description" required placeholder="Descripción">
                    </div>
                  </div>
                  <div class="nami mi form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-bullet-list-67"></i></span>
                      </div>
                      <input type="number" class="form-control" name="total"  required  placeholder="Cantidad" >
                    </div>
                  </div>
                  <div class="btn-group bootstrap-select">
                    <select required class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select" data-size="7" tabindex="-98" name="category">
                      <option disabled="" selected="">Categoria</option>
                      <option value="1">{{$categoria_1->name}}</option>
                      <option value="2">{{$categoria_2->name}}</option>
                      <option value="3">{{$categoria_3->name}}</option>
                      <option value="4">{{$categoria_4->name}}</option>
                      <option value="5">{{$categoria_5->name}}</option>
                    </select>
                  </div>
                </div>
                {{-- <label id="img_category_label"class="field"for="img_category"data-value="">
                  <span>Category</span>
                  <div id="img_category"class="psuedo_select"name="img_category">
                    <span class="selected"></span>
                    <ul id="img_category_options"class="options">
                      <li class="option" data-name="category" data-value="1">Option 1</li>
                      <li class="option" data-name="category" data-value="2">Option 2</li>
                    </ul>
                  </div>
                </label> --}}
              <textarea class="form-control form-control-alternative" name="long_description" rows="8" cols="80" placeholder="Descripción extensa del producto"></textarea>
              <div class="text-center">
                <hr>
                <button type="submit" class="btn btn-primary">{{ __('Registrar nuevo producto') }}</button>
              </div>
            </form>
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
@endsection
