@extends('layouts.app')

@section('registro')
    <li class="nav-item">
        @if (Route::has('register'))
        <li class="nav-item d-none d-lg-block ml-lg-4">
            <a class="btn btn-neutral btn-icon" href="{{ route('register') }}">
            <span class="btn-inner--icon">
              <i class="fa fa-address-card-o"></i>
            </span>
            <span class="nav-link-inner--text">{{ __('Register') }}</span>
            </a>
        </li>
        @endif
    </li>
@endsection
@section('content')

    <section class="section section-shaped section-lg">
      <div class="shape shape-style-1 bg-gradient-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container pt-lg-md">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="card bg-secondary shadow border-0">
              <div class="card-header  bg-gradient-defa pb-5">
                <div class="text-muted text-center mb-3">
                  <h2 class="ini">{{ __('Reiniciar contraseña') }}</h2>
                  <div>
                    <small class="ini">Escribe tu correo y te enviaremos</small>
                  </div>
                    <small class="ini">una nueva contraseña</small>
                </div>
              </div>
              <div class="card-body px-lg-5 py-lg-5">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                  <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input  id="email" placeholder="Email" type="email"  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                      @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>

                          <div class="form-group mb-3">
                              <div class="text-center">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('Enviar nueva contraseña') }}
                                  </button>
                              </div>
                          </div>
                      </form>
                    </div>
                  </div>
              </div>
            </div>
          </div>
    </section>


@endsection
