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
                font-size: 24px;
                text-align: center;
                line-height: 26px;
                /* or 108% */
                font-feature-settings: 'liga' off;
                color: #000000;
                margin-top: 20px;
            ">
                Masukkan Kode Unik Lalu Klik Cari
            </p>
        </div>
    </div>
    <form action="" method="get">
        <div class="row d-flex justify-content-center">
            <div class="input-group"
                style="width: 941px;
                        height: 69px;
                        background: #FFFFFF;
                        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                        margin-top: 25px;
                        margin-bottom: 25px;
                ">
                <input type="text" name="q" class="form-control"
                    placeholder="Masukkan Kode Unik Order Anda" value="">
            </div>
        </div>
    </form>
    <div class="row justify-content-center" style="margin-top: 25px; margin-bottom: 150px;">
        <button type="submit" class="btn btn-primary"
        style="display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 9px 32px;
        gap: 10px;
        position: absolute;
        width: 135px;
        height: 54px;
        background: #85FF00;
        border-radius: 8px;
        color: black;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 24px;
        ">
        Cari
        </button>
    </div>
</div>
@endsection
