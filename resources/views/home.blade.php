@extends('layouts.user')

@section('content')
<body>
<div class="" style="padding-left:50px; padding-right:50px background:EEEEEE">
    <div class="row">
        <div class="col" style="margin-top:220px">
            <H1 class="display-4" style="font-family:fantasy">Service Center WSE</H1>
            <H1 class="display-4" style="margin-top:-10px; font-family:fantasy">Universitas Negeri Malang</H1>
            <h1 style="margin-top:10px; font-family:poppins">Menyelesaikan masalah dengan solusi</h1>
            <a href="/order" class="btn btn-success btn-lg" style="margin-top:20px; padding-right:50px; padding-left:50px; justify-center-text background: #85FF00">Service</a>
            <a href="https://wa.me/+6281234849501" class="btn btn-outline-dark btn-lg" style="margin-top:20px; padding-right:50px; padding-left:50px; justify-center-text">Call 📞 </a>
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
</html>
@endsection
