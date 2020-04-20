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
            <div class="regist-card card bg-secondary shadow border-0">
              <div class="card-header  bg-gradient-defa pb-5">
                <div class="text-muted text-center mb-3">
                  <h1 class="re">Registrar Categoria</h1>
                </div>
                </div>
                <div class="card-body px-lg-5 py-lg-5">
                  @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{$error}}</li>
                        @endforeach
                      </ul>
                    </div>
                  @endif
                  <form method="post" action="{{ url('/admin/categories') }}" role="form">
                    {{csrf_field()}}
                    <div class="form-group">
                      <div class="no e input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-single-copy-04"></i></span>
                        </div>
                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre">
                      </div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control form-control-alternative" name="description" required rows="4" cols="80" placeholder="Descripción"></textarea>
                    </div>
                    <div class="text-center">
                      <hr>
                      <button type="submit" class="btn btn-primary">
                        <span class="btn-inner--icon"><i class="ni ni-check-bold"></i></span>
                        <span class="btn-inner--text">{{ __('Registrar') }}</span>
                      </button>
                      <a href="{{url('/admin/categories')}}" class="btn btn-outline-secondary">
                        <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
                        <span class="btn-inner--text">{{ __('Regresar')}}</span></a>
                    </div>
                  </form>
                </div>
            </div>

    </section>
    <!-- 1st Hero Variation -->
</div>
@endsection
