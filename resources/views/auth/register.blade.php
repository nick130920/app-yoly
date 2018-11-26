@extends('layouts.app')


@section('login')
<li class="nav-item d-none d-lg-block ml-lg-4">
    <a class="btn btn-neutral btn-icon" href="{{ route('login') }}">
    <span class="btn-inner--icon">
      <i class="ni ni-circle-08"></i>
    </span>
    <span class="nav-link-inner--text">{{ __('Login') }}</span>
    </a>
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
              <small class="ini">Registrarte con</small>
            </div>
            <div class="text-center">
              <a href="#" class="btn btn-neutral btn-icon mr-4">
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
              <small>O regístrate con credenciales</small>
            </div>
            <form method="POST" action="{{ route('register') }}" role="form">
                @csrf

              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre">
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                  </div>
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required  placeholder="Email" >
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
              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmacion contraseña">
                </div>
              </div>





              <!-- <div class="text-muted font-italic">
                <small>password strength:
                  <span class="text-success font-weight-700">strong</span>
                </small>
              </div> -->
              <div class="row my-4">
                <div class="col-12">
                  <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                    <label class="custom-control-label" for="customCheckRegister">
                      <span>Estoy de acuerdo con la
                        <a href="#">política de privacidad</a>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>












@endsection
