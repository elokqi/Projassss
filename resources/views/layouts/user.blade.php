<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="img/logo-sc.png" >
    <title>SERVICE CENTER</title>
    <!-- <title>{{ config('app.name', 'Service Center') }}</title> -->

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">

 <a class="navbar-brand" href="#"><img class="image" src="img/logo-sc.png" width="42px" style="margin: 1px;padding: 0px color:white;"></a>

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">

   <ul class="navbar-nav">
     <li class="nav-item active">
       <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="#">About Us</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="#">Product</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="#">Price List</a>
     </li>
   </ul>

   <input id="gen" type="submit" value="Booking Code" class="btn" style="background: #85FF00">

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav ml-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>

    </div>
    </nav>
    </head>

    <main class="flex-shrink-0">
        @yield('content')
    </main>

<!-- Footer -->
<footer class="page-footer font-small teal pt-4 bg-dark">

    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row text-light">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3 ">

          <!-- Content -->
          <h5 class="text-uppercase font-weight-bold" style="margin-bottom: 25px;">Service Center UM</h5>
          <p> Badan usaha yang dikelola oleh mahasiswa teknik elektro UM dan bergerak di bidang elektronika dan informatika
              khususnya jasa servis laptop dan alat elektronik. Pelayanan yang kami sediakan yaitu Jasa Servis laptop
              (kerusakan hardware maupun software),
              Jasa Servis Elektronika, Vendor Lighting, Jasa Pembuatan Vandel dan Gantungan kunci akrilik.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-6 mb-md-0 mb-3">

          <!-- Content -->
          <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
              src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Service Center UM, Kesekretariatan HMJ TE - Fakultas Teknik, Jl. SEMARANG No.5 - Gedung G4 115, Sumbersari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
              </div><style>.mapouter{position:relative;text-align:right;width:100%;height:350px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:350px;}.gmap_iframe {height:350px!important;}</style></div>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Text -->
  <!-- Remove the container if you want to extend the Footer to full width. -->

      <div class="container d-flex justify-content-center py-5">
        <a type="button" class="btn btn-lg btn-floating" style="background-color: #eeeeee" href="https://instagram.com/service_center_um?igshid=YmMyMTA2M2Y=">
        <i class="fa fa-instagram" style="color:black"></i>
        </a>
        <button type="button" class="btn btn-lg btn-floating mx-2" style="background-color: #eeeeee" href="https://wa.me/+6281234849501">
        <i class="fa fa-whatsapp" style="color:black"></i>
        </button>
      </div>

      <div class="footer-copyright text-center py-3 text-light">© 2020 Copyright:
      <a href="/"> Service Center</a>
      </div>
      </div>

  </footer>
  <!-- Footer -->
