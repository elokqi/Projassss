@extends('layouts.user')

@section('content')
<div class="" style="padding-left:50px; padding-right:50px; background-image: url('img/tracking.png');
                    background-size: 100% 100%;
                    width: 1600px;
                    height: 431px;">
    <div class="row">
        <div class="col" style="margin-top:220px">
            <H1 class="display-4" style="font-family:fantasy">Tracking Service</H1>
        </div>
    </div>
</div>
<div class="" style="padding-left:50px; padding-right:50px">
    <div class="row">
        <div class="col">
            <p style="margin-top:20px;
                font-family: 'Poppins';
                font-style: normal;
                font-weight: 600;
                font-size: 40px;
                text-align: center;
                line-height: 26px;
                /* or 108% */
                font-feature-settings: 'liga' off;
                color: #000000;
                margin-top: 20px;
            ">
                Service Laptop Asus
            </p>
        </div>
    </div>
        <div class="row d-flex justify-content-center">
            <div class="" style="margin-top: 30px; margin-bottom: 30px;">
                <img src="img/IndikatorService.png">
            </div>
        </div>
    <div class="row justify-content-center" style="margin-top: 25px; margin-bottom: 500px;">
        <div class="col-6" style="
            width: 404px;
            height: 55px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 26px;
            /* or 108% */
            font-feature-settings: 'liga' off;
            color: #000000;
            ">
            <p> Kode: XXXXX </p>
            <p> Masuk: 3 September 2022</p>
            <table border="1" width="700">
                <tr style="">
                    <td>Tanggal</td>
                    <td>Waktu</td>
                    <td>Progress</td>
                </tr>
                <tr style="font-weight: 300;">
                    <td>03/09/2022</td>
                    <td>17.30</td>
                    <td>Progress</td>
                </tr>
                <tr style="font-weight: 300;">
                    <td>03/09/2022</td>
                    <td>17.30</td>
                    <td>Progress</td>
                </tr>
                <tr style="font-weight: 300;">
                    <td>03/09/2022</td>
                    <td>17.30</td>
                    <td>Progress</td>
                </tr>
                <tr style="font-weight: 300;">
                    <td>03/09/2022</td>
                    <td>17.30</td>
                    <td>Progress</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
