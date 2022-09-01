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
<body>
    
<div class="" style="padding-left:50px; padding-right:50px background:EEEEEE">
    <div class="row">
        <div class="col" style="margin-top:220px">
            <H1 class="display-4" style="font-family:fantasy">Service Center WSE</H1>
            <H1 class="display-4" style="margin-top:-10px; font-family:fantasy">Universitas Negeri Malang</H1>
            <h1 style="margin-top:10px; font-family:poppins">Menyelesaikan masalah dengan solusi</h1>
            <a href="/order" class="btn btn-success btn-lg" style="margin-top:20px; padding-right:50px; padding-left:50px; justify-center-text background: #85FF00">Service</a>
            <a href="https://wa.link/5v5jbq" class="btn btn-outline-dark btn-lg" style="margin-top:20px; padding-right:50px; padding-left:50px; justify-center-text">Call 📞 </a>
        </div>
        <div id="carousel" style="margin-top:180px; margin-bottom:100px" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/gambar.jpg') }}" class="d-block" data-interval="1000" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/bunga2.jpg') }}" class="d-block tales" data-interval="1000" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/bunga1.jpg') }}" class="d-block w-100" data-interval="1000" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<div class="bg-light" style="padding-left:50px; padding-right:50px">
    <div class="row">
        <div class="col">
            <a class="display-4" style="margin-top:100px; margin-left:50px; font-family:'poppins' sans-serif; font-weight:bold; color:#85FF00;">WHO </a>
            <a class="display-4" style="margin-top:100px; font-family:'poppins' sans-serif; font-weight:bold; color:#00000;">  We Are</a></br>
            <p style="margin-top:10px; margin-left:50px;">Kami merupakan badan usaha yang dikelola oleh mahasiswa teknik elektro UM dan bergerak di bidang elektronika dan informatika khususnya jasa servis laptop dan alat elektronik. Pelayanan yang kami sediakan yaitu Jasa Servis laptop (kerusakan hardware maupun software), Jasa Servis Elektronika, Jasa Pembuatan Vandel dan Gantungan kunci akrilik. </p>
        </div>
        <div class="col" style="margin-top:50px;">
            <img src="{{ asset('img/logo-sc.png') }}" class="image" alt="..." >
        </div>
    </div>
    <div class="row">
        <div class="col" style="margin-top:50px; margin-bottom:50px">
            <img src="{{ asset('img/gambar3.jpg') }}" class="image" alt="..." >
        </div>
        <div class="col" style="margin-top:150px">
            <a class="display-4" style="font-family:poppins; color:#85FF00;">WHO</a>
            <a class="display-4" style="font-family:poppins; color:#00000;"> We Are</a>
            <h4 style="margin-top:10px; font-family:poppins">Create backend in minute while keep productive! </h4>
        </div>
    </div>
</div>
</body>
<!-- Footer -->
<footer class="page-footer font-small teal pt-4 bg-dark">

  <!-- Footer Text -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row text-light">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3 ">

        <!-- Content -->
        <h5 class="text-uppercase font-weight-bold">Footer text 1</h5>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita sapiente sint, nulla, nihil
          repudiandae commodi voluptatibus corrupti animi sequi aliquid magnam debitis, maxime quam recusandae
          harum esse fugiat. Itaque, culpa?</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-6 mb-md-0 mb-3">

        <!-- Content -->
        <h5 class="text-uppercase font-weight-bold">Footer text 2</h5>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio deserunt fuga perferendis modi earum
          commodi aperiam temporibus quod nulla nesciunt aliquid debitis ullam omnis quos ipsam, aspernatur id
          excepturi hic.</p>

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
      <button type="button" class="btn btn-lg btn-floating mx-2" style="background-color: #eeeeee" href="https://wa.link/5v5jbq">
      <i class="fa fa-whatsapp" style="color:black"></i>
      </button>
    </div>

    <div class="footer-copyright text-center py-3 text-light">© 2020 Copyright:
    <a href="/"> Service Center</a>
    </div>
    </div>

</footer>
<!-- Footer -->
</html>