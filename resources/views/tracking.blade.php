@extends('layout.master')

@section('SERVICE CENTER', 'Halaman Home')
@section('konten')

<div class="">
    <div class="backgorund-image">
        <img class="" src="{{ asset('img/Trackin-Service.png') }}">
        <h1 class="text-center display-5 font-weight-bold" >Masukkan kode unik</h1>
        <form class="center">
            <p>
                <input type="text" name="kode_unik" placeholder="kode..." />
            </p>
            <p>
                <button onclick="window.location.href='/tracking2'" class="btn" style="background: #85FF00">Cari</button>
                <!-- <input id="gen" type="submit" value="Cari" class="btn" style="background: #85FF00"> -->
            </p>
        </form>
    </div>
</div>
@endsection


