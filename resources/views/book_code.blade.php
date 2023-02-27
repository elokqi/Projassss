@extends('layouts.user')
@section('content')
<div class="container"  style="box-shadow: 0 3px 20px rgba(0, 0, 0, .5); border-radius: 10px; background-color: white; padding: 15px; font-family:'Montserrat'; width:800px; height:400px; padding-left: 10%; margin-top: 10%; margin-bottom: 10%;">
    <div style="margin-left: 25%;
                font-family: 'Poppins';
                font-style: normal;
                font-weight: 600;
                font-size: 24px;
                line-height: 26px;
                ">
        <h1>Your Order</h1>
    </div>

    <img src="img/Line.png">

    <div style="border-radius: 5px; font-family: 'Poppins'; font-style: normal; font-weight: 600; font-size: 20px; line-height: 13px;">
            <div>
                    <p> Nama Pelanggan : Enrico Ganteng </p>
                    <p> Jenis Barang Elektronik : Laptop Tersayang </p>
                    <p> Keluhan : layarnya muncul deret-deret padahal laptop mahal </p>
                    <p> Booking Code : Y4NGPUNY4GNTG
                    <p style="font-family: 'Poppins';
                            font-style: normal;
                            font-weight: 400;
                            font-size: 16px;
                            "> *remember your booking code to tracing your order</p>
            </div>  

            <div style="text-align: right; margin-right: 20%; font-family: 'Poppins';
                        font-style: normal;
                        font-weight: 500;
                        font-size: 16px;
                        line-height: 24px;">
                <input type="submit" value="Oke" class="btn btn-primary"
                style="
                    background: #85FF00;
                    border-radius: 8px;
                    margin-top: 20px;
                    color: black;
                    border: 1px solid #000000 box-shadow:
                    0px 4px 4px 0px #00000040;
                    box-shadow: 0px 4px 4px 0px #00000040;
                    width: 91px; height: 45px; border-radius:5px
                    margin-top:20%;
                    margin-right: 15px;
                    margin-bottom:5%;
                ">
            </div>
        </form>
        <div style="margin-left: 30%;
                    font-family: 'Poppins';
                    font-style: normal;
                    font-weight: 600;
                    font-size: 24px;
                    line-height: 26px;">
            <p> Service Center </p>
        </div>
    </div>
</div>
@endsection
