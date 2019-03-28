@extends('layouts.app')
@section('title', 'Imagenes de productos')

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
    <div class="need container py-lg-md d-flex">
      <div class="row row-grid align-items-center">
        <div class="col-md-12">
          <div class="card card-plain">
            <div class="mora card-header card-header-primary">
              <h4 class="card-title mt-0">Imagenes del producto</h4>
              <a href="{{url('/admin/products')}}" class="btn btn-outline-default" >
                <span class="btn-inner--icon"><i class="fa fa-arrow-left"></i></span>
                <span class="btn-inner--text">Volver</span>
              </a>
              <button type="button" class="btn btn-outline-default" data-toggle="modal" data-target="#modal-form">
                <span class="btn-inner--icon"><i class="fa fa-cloud-upload"></i></span>
                <span class="btn-inner--text">Subir nueva imagen</span>
              </button>
              <!-- Modal -->
              <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file" name="photo" required>
                        <button type="submit" name="button" class="btn btn-primary btn-round">Subir</button>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr class="ha">
            <div class="row row-grid text-center">
              <!--{{$modal=1}}-->
              @foreach ($images as $image)
                <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
                  <div class="card">
                    <button class="btn-image" type="button" data-toggle="modal" data-target="#exampleModal{{$modal}}">
                      <img class="thumbnail image" src="{{$image->url}}" alt="Thumbnail Image 1">
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{$modal}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <img class="extra thumbnail image" src="{{$image->url}}" alt="Thumbnail Image 1">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <form action="" method="post">
                      {{ csrf_field() }}
                      {{method_field('DELETE')}}
                      <input type="hidden" name="image_id" value="{{$image->id}}">
                      <button class="btn btn-icon btn-3 btn-danger" type="submit">
                        <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
                        <span class="btn-inner--text">Eliminar imagen</span>
                      </button>
                      @if ($image->featured)
                        <button type="button" data-toggle="tooltip" data-placement="top" title="Imagen destacada" class="icon icon-shape bg-gradient-primary rounded-circle text-white mb-3">
                          <i class="ni ni-spaceship"></i>
                        </button>
                      @else
                        <a href="{{url('/admin/products/'.$product->id.'/images/select/'.$image->id)}}" class="icon icon-shape bg-gradient-info rounded-circle text-white mb-3" data-toggle="tooltip" data-placement="top" title="Destacar">
                          <span class="btn-inner--icon"><i class="ni ni-spaceship"></i></span>
                        </a>
                      @endif
                    </form>
                  </div>
                </div>
                <!--{{$modal++}}-->
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
