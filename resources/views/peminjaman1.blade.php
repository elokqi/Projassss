@extends('layouts.user')

@section('content')
<div class="" style="margin-top: 150px;">
    <div class="row justify-content-center">
        <div class="">
            <p style="margin-top:20px;
                font-family: 'Poppins';
                font-style: normal;
                font-weight: 700;
                font-size: 48px;
                text-align: center;
                line-height: 26px;
                /* or 108% */
                font-feature-settings: 'liga' off;
                color: #000000;
                margin-top: 20px;
            ">
                TOOL LOAN
            </p>
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 25px; margin-bottom: 300px;">
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
            <table border="1" width="700" style="background: #D9D9D9; text-align: center;">
                <tr>
                    <td>Tools</td>
                    <td>Price</td>
                    <td>Amount</td>
                    <td>Amount of Loan</td>
                </tr>
                <tr>
                    <td>HT</td>
                    <td>12.000</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Kamera</td>
                    <td>125.000</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Proyektor</td>
                    <td>50.000</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Layar + Tripod </td>
                    <td>30.000</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Printer</td>
                    <td>225.000</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
            </table>
            <div style="text-align: right; margin-right: 115px;">
            <input type="submit" value="Next" class="btn btn-primary"
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
        </div>
    </div>
</div>
@endsection
