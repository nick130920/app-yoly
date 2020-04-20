@extends('layouts.app')
@section('title', 'Listado de categorias')

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
        <div class="row row-grid align-items-center">
          <div class="col-md-12">
            <div class="card card-plain">
              <div class="mora card-header card-header-primary">
                <div class="row">
                  <div class="col" style="margin-top: auto;">
                    <h4 class="card-title mt-0">Tabla de categorias</h4>
                    <p class="blanco card-category">Encontraras todas las categorias</p>
                  </div>
                  <div class="col" style="margin-top: auto;">
                    <a href="{{url('/admin/categories/create')}}" class="btn btn-outline-white btn-lg" >
                      <span class="btn-inner--icon"><i class="fa fa-plus-square"></i></span>
                      <span class="btn-inner--text">Nueva categoria</span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead class="">
                      <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th class="acti">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($categories as $category)
                        <tr>
                          <td>{{ $category->id}}</td>
                          <td>{{ $category->name}}</td>
                          <td>{{ $category->description}}</td>
                          <td class="td-actions text-right">
                            <div class="act">
                              <a href=""  data-toggle="tooltip" data-placement="top" rel="tooltip" title="Ver categoria" class="ico btn btn-1 btn-outline-info">
                                <i class="fa fa-info"></i>
                              </a>
                              <a href="{{url('/admin/categories/'.$category->id.'/edit')}}" data-toggle="tooltip" data-placement="bottom" class="ico btn btn-1 btn-outline-success" title="Editar categoria">
                                <i class="tim-icons icon-settings-gear-63"></i>
                              </a>
                              <form method="post" action="{{url('/admin/categories/'.$category->id)}}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button  type="submit" data-toggle="tooltip" data-placement="right" class="li ico btn btn-1 btn-outline-danger" title="Eliminar categoria">
                                  <i class="tim-icons icon-trash-simple"></i>
                                </button>
                              </form>
                            </div>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                {{$categories->links()}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- 1st Hero Variation -->
  </div>
@endsection
