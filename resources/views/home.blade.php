@extends('layouts.app')
@section('content')
  <div class="position-relative">
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
              <a class="nav-link mb-sm-3 mb-md-0 active show" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bag-17 mr-2"></i>Carrito activo
                <span class="badge badge-primary">{{auth()->user()->cart->details->count()}}</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="true"><i class="ni ni-calendar-grid-58 mr-2"></i>Pedidos Realizados</a>
            </li>
          </ul>
        </div>
        <div class="card shadow">
          <div class="card-body">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade active show" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                <div class="card-body">
                  @if (session('notification'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
                      <span class="alert-inner--text"><strong>Exito! </strong>{{session('notification')}}</span>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  @endif
                  <p>Tienes {{auth()->user()->cart->details->count()}} productos en el carrito</p>
                  @if (auth()->user()->cart->details->count() != 0)
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead class="">
                          <tr>
                            <th>
                              <i class="ni ni-album-2"></i>
                            </th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>SubTotal</th>
                            <th class="acti">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach (auth()->user()->cart->details as $detail)
                            @foreach ($detail->product->images as $images)
                              <tr>
                                @break
                              @endforeach
                              <td class="pri"><a href="{{url('/products/'.$detail->product->id)}}"><img src='{{$detail->product->featured_image_url}}' height="50" width="50"></a></td>
                              <td>
                                <a href="{{url('/products/'.$detail->product->id)}}">{{ $detail->product->name}}</a>
                              </td>
                              <td>{{$detail->product->description}}</td>
                              <td>${{$detail->product->price}}</td>
                              <td>{{$detail->quantity}}</td>
                              <td class="pri">${{$detail->quantity * $detail->product->price}}</td>
                              <td class="td-actions text-right">
                                <div class="act">
                                  <a href="{{url('/products/'.$detail->product->id)}}" target="_blank"  data-toggle="tooltip" data-placement="top" rel="tooltip" title="Ver producto" class="ico btn btn-1 btn-outline-info">
                                    <i class="fa fa-info"></i>
                                  </a>
                                    <button class="li ico btn btn-1 btn-outline-danger" data-toggle="tooltip" data-placement="right" title="Eliminar del carrito" onclick="warningClick()">
                                      <i class="tim-icons icon-trash-simple"></i>
                                    </button>
                                </div>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <div class="text-center">
                      <form action="{{url('/order')}}" method="post">
                        {{ csrf_field() }}
                        <button class="btn btn-icon btn-3 btn-primary btn-lg" type="submit">
                          <span class="btn-inner--icon"><i class="ni ni-delivery-fast"></i></span>
                          <span class="btn-inner--text">Realizar pedido</span>
                        </button>
                      </form>
                    </div>
                  @endif
              @empty($detail)
                <div class="alert alert-info" role="alert">
                  <strong>Info!</strong> No tienes ninguna compra en proceso.
                </div>
              @endempty
            </div>
            </div>
            <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
              <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@isset($detail)
  <script type="text/javascript">
    var warningClick = function(){
      $.notify({
        title: "<strong>¡Precaución!</strong> ",
        message: "¿Seguro que deseas eliminar este producto del carrito de compras?"
      },{
        delay: 5000,
        type: 'warning',
        allow_dismiss: true,
        animate: {
          enter: 'animated bounceInDown',
          exit: 'animated bounceOutUp'
        },
        template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
          '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>'+
          '<span data-notify="title">{1}</span>' +
          '<br>'+
          '<span data-notify="message">{2}</span>' +
          '<br>'+
          '<br>'+
          '<form method="post" action="{{url('/cart')}}">'+
            '{{csrf_field()}}'+
            '{{method_field('DELETE')}}'+
            '<input type="hidden" name="cart_detail_id" value="{{$detail->id}}">'+
            "<button type='submit' class='btn btn-success btn-sm' data-notify-text='button'>Continuar</button>"+
            '<button type="button" aria-hidden="true" data-notify="dismiss" class="btn btn-default btn-sm">Cancelar</button>' +
            '</form>'+
            '</div>',
            delay: 15000
          });
        }
      </script>
    @endisset
  @endsection
