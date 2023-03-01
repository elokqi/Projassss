@extends('layouts.user')
@section('content')
<div class="container"  style="box-shadow: 0 3px 20px rgba(0, 0, 0, .5); border-radius: 10px; background-color: white; padding: 15px; font-family:'Montserrat'; width:800px; height:550px; padding-left: 10%; margin-top: 10%; margin-bottom: 10%;">
    <div class="text-center" style="margin-right: 75px;
                font-family: 'Poppins';
                font-style: normal;
                font-weight: 600;
                font-size: 24px;
                line-height: 26px;
                ">
        <h1> PAYMENT METHOD </h1>
    </div>

    <img src="img/Line.png">

    <div class="row justify-content-center" style="margin-top: 20px;">
        <div class="col-8">
            <img src="img/BRI.png">
        </div>
        <div class="col-8">
            <img src="img/DANA.png">
            <img style="margin-left: 25px;" src="img/COD.png">
        </div>
        <div class="col-8">
            <img src="img/OVO.png">
        </div>
    </div>

    <div style="margin-left: 30%;
                margin-top: 10%;
                font-family: 'Poppins';
                font-style: normal;
                font-weight: 600;
                font-size: 24px;
                line-height: 26px;">
        <p> Service Center </p>
    </div>
</div>
@endsection
