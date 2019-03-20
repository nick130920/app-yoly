@extends('layouts.app')

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
                  <small class="ini">inicio con...</small>
                </div>
                <div class="btn-wrapper text-center">
                  <a href="#" class="btn btn-neutral btn-icon">
                    <span class="btn-inner--icon">
                      <img src="{{asset('/img/icons/common/github.svg')}}">
                    </span>
                    <span class="btn-inner--text">Github</span>
                  </a>
                  <a href="#" class="btn btn-neutral btn-icon">
                    <span class="btn-inner--icon">
                      <img src="{{asset('/img/icons/common/google.svg')}}">
                    </span>
                    <span class="btn-inner--text">Google</span>
                  </a>
                </div>
              </div>
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <small>o ingresa con tus credenciales</small>
                </div>
                <form role="form" method="POST" action="{{ route('login') }}">
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
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Contraseña">
                      @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>
                  <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input"  type="checkbox" name="remember" id="customCheckLogin" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="customCheckLogin">{{ __('Recordar la sesión') }}</label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">
                        {{ __('Login') }}
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-6">
                <a class="text-light" href="{{ route('password.request') }}">{{ __('Olvidaste tu contraseña?') }}</a>
              </div>
              <div class="col-6 text-right">
                <a href="{{route('register')}}" class="text-light">
                  <small>Crea una nueva cuenta</small>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
