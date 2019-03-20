<!DOCTYPE html>
<!-- release v4.5.2, copyright 2014 - 2018 Kartik Visweswaran -->
<!--suppress JSUnresolvedLibraryURL -->
<html lang="en">
<head>
    <meta charset="UTF-8"/>

    <link rel="stylesheet" href="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css')}}" crossorigin="anonymous">
    <link href="{{asset('/select/css/fileinput.min.css')}}" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{url('https://use.fontawesome.com/releases/v5.5.0/css/all.css')}}" crossorigin="anonymous">
    {{-- <link href="{{asset('/select/themes/explorer-fas/theme.css')}}" media="all" rel="stylesheet" type="text/css"/> --}}
    <script src="{{url('https://code.jquery.com/jquery-3.3.1.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('/select/js/plugins/sortable.js')}}" type="text/javascript"></script>
    <script src="{{asset('/select/js/fileinput.js')}}" type="text/javascript"></script>
    <script src="{{asset('/select/js/locales/es.js')}}" type="text/javascript"></script>
    <script src="{{asset('/select/themes/fas/theme.js')}}" type="text/javascript"></script>
    <script src="{{asset('/select/themes/explorer-fas/theme.js')}}" type="text/javascript"></script>
</head>
<body>
<div class="container my-4">
    <form action="/upload" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
            <div class="file-loading">
                <input id="file-es" name="photos[]" type="file" multiple>
            </div>
            <div class="text-center">
                <input type="submit" value="Upload" class="btn btn-lg btn-success btn-submit">
                <button type="reset" class="btn btn-lg btn-secondary btn-reset"><i class="fa fa-refresh"></i> Reset</button>
            </div>
    </form>
</div>
<script>
$('#file-es').fileinput({
  theme: 'fas',
  language: 'es',
  maxFileCount: 4,
  allowedFileExtensions: ['jpg', 'png', 'gif'],

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
</body>


</html>
