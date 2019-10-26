<!DOCTYPE html>
<html>
<head>
  @include('layouts.partials.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
  @include('layouts.partials.header')
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
  @include('layouts.partials.sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
 @include('layouts.partials.footer')
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
@include('layouts.partials.scripts')
@yield('scripts')
</body>
</html>
