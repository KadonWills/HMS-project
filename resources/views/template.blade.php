<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HMS - @yield('title')</title>

  <!-- Fontawesome -->
  <link href="{{ asset('css/brands.css') }}" rel="stylesheet">
  <link href="{{ asset('css/solid.css') }}" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!--external css-->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">

  <!-- scripts -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}" defer></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}" defer></script>
  <script class="include" type="text/javascript" src="{{ asset('lib/jquery.dcjqaccordion.2.7.js') }}" defer></script>
  <script src="{{ asset('lib/jquery.scrollTo.min.js') }}" defer></script>
  <script src="{{ asset('lib/jquery.nicescroll.js') }}" type="text/javascript" defer></script>
  <!--common script for all pages-->
  <script src="{{ asset('js/common-scripts.js') }}" defer></script>

</head>

<body>

  <section id="container">

    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="{{url('/')}}" class="logo"><b>RMS</b></a>
      <!--logo end-->

      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    @yield('sub-menu')
    <!--sidebar end-->

    <div class="container">
      @yield('content')
    </div>


    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy;<strong>2019</strong>. Software Engineering
        </p>
        <div class="credits">
          <a href="url('/')'">Hospital Management System</a>
        </div>
      </div>
    </footer>
    <!--footer end-->

  </section>

</body>

</html>