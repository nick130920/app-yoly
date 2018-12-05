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
                <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" style="display: none;" aria-hidden="true">
                  <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                      <div class="modal-body p-0">
                        <div class="card bg-secondary shadow border-0">
                          <div class="card-header bg-white pb-5">
                            <div class="text-muted text-center mb-3">
                              <small>Sign in with</small>
                            </div>
                          </div>
                          <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                              <small>Or sign in with credentials</small>
                            </div>
                            <div class="form-group">
                              <div class="file-loading">
                                <input id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2" data-theme="fas">
                              </div>
                            </div>
                            <script>
                            $('#file-fr').fileinput({
                              theme: 'fas',
                              language: 'fr',
                              uploadUrl: '#',
                              allowedFileExtensions: ['jpg', 'png', 'gif']
                            });
                            $('#file-es').fileinput({
                              theme: 'fas',
                              language: 'es',
                              uploadUrl: '#',
                              allowedFileExtensions: ['jpg', 'png', 'gif']
                            });
                            $("#file-0").fileinput({
                              theme: 'fas',
                              'allowedFileExtensions': ['jpg', 'png', 'gif']
                            });
                            $("#file-1").fileinput({
                              theme: 'fas',
                              uploadUrl: '#', // you must set a valid URL here else you will get an error
                              allowedFileExtensions: ['jpg', 'png', 'gif'],
                              overwriteInitial: false,
                              maxFileSize: 1000,
                              maxFilesNum: 10,
                              //allowedFileTypes: ['image', 'video', 'flash'],
                              slugCallback: function (filename) {
                                return filename.replace('(', '_').replace(']', '_');
                              }
                            });
                            /*
                            $(".file").on('fileselect', function(event, n, l) {
                            alert('File Selected. Name: ' + l + ', Num: ' + n);
                          });
                          */
                          $("#file-3").fileinput({
                            theme: 'fas',
                            showUpload: false,
                            showCaption: false,
                            browseClass: "btn btn-primary btn-lg",
                            fileType: "any",
                            previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
                            overwriteInitial: false,
                            initialPreviewAsData: true,
                            initialPreview: [
                              "http://lorempixel.com/1920/1080/transport/1",
                              "http://lorempixel.com/1920/1080/transport/2",
                              "http://lorempixel.com/1920/1080/transport/3"
                            ],
                            initialPreviewConfig: [
                              {caption: "transport-1.jpg", size: 329892, width: "120px", url: "{$url}", key: 1},
                              {caption: "transport-2.jpg", size: 872378, width: "120px", url: "{$url}", key: 2},
                              {caption: "transport-3.jpg", size: 632762, width: "120px", url: "{$url}", key: 3}
                              ]
                            });
                            $("#file-4").fileinput({
                              theme: 'fas',
                              uploadExtraData: {kvId: '10'}
                            });
                            $(".btn-warning").on('click', function () {
                              var $el = $("#file-4");
                              if ($el.attr('disabled')) {
                                $el.fileinput('enable');
                              } else {
                                $el.fileinput('disable');
                              }
                            });
                            $(".btn-info").on('click', function () {
                              $("#file-4").fileinput('refresh', {previewClass: 'bg-info'});
                            });
                            /*
                            $('#file-4').on('fileselectnone', function() {
                            alert('Huh! You selected no files.');
                          });
                          $('#file-4').on('filebrowse', function() {
                          alert('File browse clicked for #file-4');
                        });
                        */
                        $(document).ready(function () {
                          $("#test-upload").fileinput({
                            'theme': 'fas',
                            'showPreview': false,
                            'allowedFileExtensions': ['jpg', 'png', 'gif'],
                            'elErrorContainer': '#errorBlock'
                          });
                          $("#kv-explorer").fileinput({
                            'theme': 'explorer-fas',
                            'uploadUrl': '#',
                            overwriteInitial: false,
                            initialPreviewAsData: true,
                            initialPreview: [
                            "http://lorempixel.com/1920/1080/nature/1",
                            "http://lorempixel.com/1920/1080/nature/2",
                            "http://lorempixel.com/1920/1080/nature/3"
                            ],
                            initialPreviewConfig: [
                            {caption: "nature-1.jpg", size: 329892, width: "120px", url: "{$url}", key: 1},
                            {caption: "nature-2.jpg", size: 872378, width: "120px", url: "{$url}", key: 2},
                            {caption: "nature-3.jpg", size: 632762, width: "120px", url: "{$url}", key: 3}
                            ]
                          });
                          /*
                          $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
                          alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
                        });
                        */
                      });
                    </script>



                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                 <!-- <a href="{{url('/admin/products/create')}}" class="btn btn-outline-default" ></a> -->
              </div>
              <hr class="ha">
              <div class="row row-grid text-center">
                @foreach ($images as $image)
                <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
                  <div class="thumbnail">
                    <img class="image" src="{{$image->images}}" alt="Thumbnail Image 1">
                  </div>
                </div>
                @endforeach
              </div>
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
    </div>
    <!-- SVG separator -->
    <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</section>
<section class="section section-lg pt-lg-0 section-contact-us">
    <div class="container">
        <div class="row justify-content-center mt--300">
            <div class="col-lg-8">
                <div class="card bg-gradient-secondary shadow">
                    <div class="card-body p-lg-5">
                        <h4 class="mb-1">¿Quieres hablar con nosotros?</h4>
                        <p class="mt-0">Tu opinión es muy importante.</p>
                        <div class="form-group mt-5">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-user-run"></i></span>
                                </div>
                                <input class="form-control" placeholder="Nombre" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control" placeholder="Email" type="email">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <textarea class="form-control form-control-alternative" name="name" rows="4" cols="80" placeholder="Escribenos..."></textarea>
                        </div>
                        <div>
                            <button type="button" class="btn btn-default btn-round btn-block btn-lg">Enviar mensaje</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
