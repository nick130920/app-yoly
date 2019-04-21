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
  <main class="profile-page">
    <section class="section-profile-cover section-shaped my-0">
      <!-- Circles background -->
      <div class="shape shape-style-1 shape-primary alpha-4">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="card card-profile shadow mt--300">
          <div class="px-4">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="{{$product->featured_image_url}}" class="rounded-circle">
                  </a>
                </div>
              </div>
              <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                <div class="card-profile-actions py-4 mt-lg-0">
                    <button type="button" class="btn btn-icon btn-lg btn-info mb-3" data-toggle="modal" data-target="#modalCompra">
                      <span class="btn-inner--icon">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                      </span>
                      <span class="btn-inner--text">Añadir al carrito de compras</span>
                    </button>
                </div>
              </div>
              <div class="col-lg-4 order-lg-1">
                <div class="card-profile-stats d-flex justify-content-center">
                  {{-- <div>
                    <span class="heading">22</span>
                    <span class="description">Friends</span>
                  </div>
                  <div>
                    <span class="heading">89</span>
                    <span class="description">Comments</span>
                  </div> --}}
                  <div>
                    <span class="heading">{{$images->count()}}</span>
                    <span class="description">Fotos</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center">
              @if (session('notification'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <span class="alert-inner--icon">
                    <i class="ni ni-like-2"></i>
                  </span>
                  <span class="alert-inner--text">
                    <strong>Exito! </strong>{{session('notification')}}
                  </span>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif
              <h3>{{ $product->name }}
                <span class="font-weight-light"></span>
              </h3>
              <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>{{$product->category->name}}</div>
              <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i>{{$product->description}}</div>
              <div><i class="ni education_hat mr-2"></i>{{$product->long_description}}</div>
              <hr class="ha">
            </div>
            <div class="row row-grid text-center">
              @foreach ($images as $image)
                <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
                  <div class="card">
                      <img class="thumbnail image" src="{{$image->url}}" alt="Thumbnail Image 1">
                  </div>
                </div>
              @endforeach
          </div>
        </div>
      </div>
    </section>
  </main>
</section>
<div class="modal fade" id="modalCompra" tabindex="-1" role="dialog" aria-labelledby="modal-default" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-default">Seleccione la cantidad</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form class="" action="{{url('/cart')}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <div class="modal-body">
          <div class="form-group">
            <input type="number" class="form-control" name="quantity" value="1" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-info">Añadir</button>
          <button type="button" class="btn btn-link btn-simple ml-auto" data-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
