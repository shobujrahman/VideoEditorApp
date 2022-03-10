<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel | VideoEditorApp</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="icon" href="{{ url('images/admin_images/icons8-settings-500.png') }}" type="image/gif" sizes="16x16">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ url('plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
    <!-- summernote -->
  <link rel="stylesheet" href="{{ url('plugins/summernote/summernote-bs4.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ url('plugins/select2/css/select2.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('css/admin_css/adminlte.min.css') }}">
  <!-- emoji -->
  <link rel="stylesheet" href="{{ url('/css/admin_css/emojionearea.min.css') }}">
  <link rel="stylesheet" href="{{ url('css/custom.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" rel="stylesheet" type="text/css">

   <!-- Dropify -->
   <link rel="stylesheet" href="{{url('plugins/jQuery-Plugin-To-Beautify-File-Inputs-with-Custom-Styles-Dropify/dist/css/dropify.css')}}">

  

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    @include('layouts.admin_layout.admin_header')
    @include('layouts.admin_layout.admin_sidebar')
    @yield('content')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- DataTables -->
<script src="{{ url('plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ url('plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
  $(function () {
    $("#story").DataTable();
    $("#category").DataTable();

  });
</script>
<!-- Select2 -->
<script src="{{ url('plugins/select2/js/select2.full.min.js')}}"></script>
<script>
  $('.select2').select2();
</script>
<!-- Summernote -->
<script src="{{ url('plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>

<!-- overlayScrollbars -->
<script src="{{url('plugins/overlayScrollbars/js/OverlayScrollbars.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{ url('js/admin_js/adminlte.js') }}"></script>
<!-- emoji Js -->
<script src="{{ url('js/admin_js/emojionearea.min.js') }}"></script>
<script src="{{ url('js/admin_js/custom.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js"></script>


<script>
  @if(Session::has('message'))
      var type="{{Session::get('alert-type','info')}}"
      switch(type){
        case 'info':
                toastr.info("{{Session::get('message')}}");
                break;
        case 'success':
                toastr.success("{{Session::get('message')}}");
                break;
        case 'warning':
                toastr.warning("{{Session::get('message')}}");
                break;
        case 'error':
                toastr.error("{{Session::get('message')}}");
                break;
      }
  @endif  
</script>

<script src="{{url('plugins/jQuery-Plugin-To-Beautify-File-Inputs-with-Custom-Styles-Dropify/dist/js/dropify.js')}}"></script>
<script>
    $('.dropify').dropify();
</script>

</body>
</html>
