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
        <div class="row row-grid align-items-center">
          <div class="col-md-12">
            <div class="card card-plain">
              <div class="mora card-header card-header-primary">
                <div class="row">
                  <div class="col" style="margin-top: auto;">
                    <h4 class="card-title mt-0">Tabla de productos</h4>
                    <p class="blanco card-category">Encontraras todas los productos</p>
                  </div>
                  <div class="col" style="margin-top: auto;">
                    <a href="{{url('/admin/products/create')}}" class="btn btn-outline-white btn-lg" >
                      <span class="btn-inner--icon"><i class="fa fa-plus-square"></i></span>
                      <span class="btn-inner--text">Nuevo producto</span>
                    </a>
                  </div>
                </div>
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
                        @foreach ($product as $images)
                          <tr data-toggle="tooltip" data-html="true" title="<img class='image' src='{{$product->featured_image_url}}'>" data-placement="right" rel="tooltip">
                            @break
                          @endforeach
                          <td>{{ $product->id}}</td>
                          <td>{{ $product->name}}</td>
                          <td>{{ $product->description}}</td>
                          <td>{{ $product->reference}}</td>
                          <td>{{ $product->category ? $product->category->name : 'General'}}</td>
                          <td>{{ $product->price}}</td>
                          <td class="td-actions text-right">
                            <div class="act">
                              <a href=""  data-toggle="tooltip" data-placement="top" rel="tooltip" title="Ver producto" class="ico btn btn-1 btn-outline-info">
                                <i class="fa fa-info"></i>
                              </a>
                              <a href="{{url('/admin/products/'.$product->id.'/edit')}}" data-toggle="tooltip" data-placement="bottom" class="ico btn btn-1 btn-outline-success" title="Editar producto">
                                <i class="tim-icons icon-settings-gear-63"></i>
                              </a>
                              <a href="{{url('/admin/products/'.$product->id.'/images')}}" data-toggle="tooltip" data-placement="bottom" class="ico btn btn-1 btn-outline-warning" title="Imagenes del producto">
                                <i class="fa fa-image"></i>
                              </a>
                              <form method="post" action="{{url('/admin/products/'.$product->id)}}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button  type="submit" data-toggle="tooltip" data-placement="right" class="li ico btn btn-1 btn-outline-danger" title="Eliminar producto">
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
                {{$products->links()}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
