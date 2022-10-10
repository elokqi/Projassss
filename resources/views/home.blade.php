@extends('layout.master')

@section('SERVICE CENTER', 'Halaman Home')
@section('konten')
    <div class="">
        <div class="row" style="background-color: #F8FBFF;">
            <div class="col" style="margin-top:130px; margin-left:50px;">
                <H1 class="display-4" style="font-family:fantasy">Service Center WSE</H1>
                <H1 class="display-4" style="margin-top:-10px; font-family:fantasy">Universitas Negeri Malang</H1>
                <h1 style="margin-top:10px; font-family:poppins; font-size:30px">Menyelesaikan masalah dengan solusi</h1>
                <a href="/order" class="btn btn-success btn-lg col-6 col-sm-3" style="margin-top:20px; padding-right:50px; padding-left:50px; background: #85FF00">Service</a>
                <a href="https://wa.link/5v5jbq" class="btn btn-outline-dark btn-lg" style="margin-top:20px; padding-right:50px; padding-left:50px; ">Call 📞 </a>
            </div>
            <div id="carousel" style="margin-top:100px; margin-bottom:80px; margin-right:50px;" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner img-thumbnail" style="width: 30rem;">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/carousel1.jpg') }}" class="d-block w-100" data-interval="1000" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/carousel2.jpg') }}" class="d-block w-100" data-interval="1000" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/carousel3.jpg') }}" class="d-block w-100 data-interval="1000" alt="...">
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
        <!-- who we are -->
        <div class="row" class="bg-light">
            <div class="col-7" style="margin-top:80px; margin-left:80px;">
                <a class="display-3" style="font-family:'poppins' sans-serif; font-weight:bold; color:#85FF00;">WHO </a>
                <a class="display-3" style="font-family:'poppins' sans-serif; font-weight:bold; color:#000000;">  We Are?</a></br>
                <p style="font-size:20px">Kami merupakan badan usaha yang dikelola oleh mahasiswa teknik elektro UM dan bergerak di bidang elektronika dan informatika khususnya jasa servis laptop dan alat elektronik. Pelayanan yang kami sediakan yaitu Jasa Servis laptop (kerusakan hardware maupun software), Jasa Servis Elektronika, Vendor Lighting, Jasa Pembuatan Vandel dan Gantungan kunci akrilik. </p>
            </div>
            <div class="col" style="margin-top:30px; margin-right:100px; margin-bottom:30px;">
                <img src="{{ asset('img/logoSC.png') }}" class="image float-right" alt="..." >
            </div>
        </div>
        <!-- servis elektronik -->
        <div class="row" style="background-color: #F8FBFF;">
            <div class="col" style="margin-top:50px; margin-left:80px; margin-bottom:30px;">
                <img src="{{ asset('img/servis-elektronik.jpg') }}" alt="...">
            </div>
            <div class="col" style="margin-top:150px; margin-right:50px; margin-left:20px; margin-bottom:30px;">
                <a class="display-4" style="font-family:poppins; color:#000000;">Servis Elektronik</a>
                <h4 style="margin-top:10px; font-family:poppins">Peralatan elektronik menangani masalah seputar laptop, handphone, kipas angin, TV, dan peralatan elektronik lainnya</h4>
            </div>
        </div>
        <!-- vendor lighting -->
        <div class="row" style="background-color: #F8FBFF;">
            <div class="col" style="margin-top:150px; margin-left:80px; margin-bottom:50px;">
                <a class="display-4" style="font-family:poppins; color:#000000;">Vendor Lighting</a>
                <h4 style="margin-top:10px; font-family:poppins">Sewa lighting panggung untuk event di Malang dan sekitarnya</h4>
            </div>
            <div class="col" style="margin-top:50px; margin-right:50px; margin-bottom:30px;">
                <img src="{{ asset('img/vendor-lighting.jpg') }}" alt="...">
            </div>
        </div>
        <!-- ganci dan akrilik -->
        <div class="row" style="background-color: #F8FBFF;">
            <div class="col" style="margin-top:50px; margin-left:80px; margin-bottom:30px;">
                <img src="{{ asset('img/akrilik.jpg') }}" alt="...">
            </div>
            <div class="col" style="margin-top:150px; margin-right:50px; margin-left:20px; margin-bottom:30px;">
                <a class="display-4" style="font-family:poppins; color:#000000;">Jasa Pembuatan Akrilik dan Ganci</a>
                <h4 style="margin-top:10px; font-family:poppins">Pembuatan akrilik dan gantungan kunci dengan design yang dapat request sesuka hati</h4>
            </div>
        </div>
    </div>
@endsection