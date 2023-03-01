@extends('layouts.user')
@section('content')
<div class="container"  style="box-shadow: 0 3px 20px rgba(0, 0, 0, .5); border-radius: 10px; background-color: white; padding: 15px; font-family:'Montserrat'; width:800px; height:550px; padding-left: 10%; margin-top: 10%; margin-bottom: 10%;">
    <div style="margin-left: 30%;
                font-family: 'Poppins';
                font-style: normal;
                font-weight: 600;
                font-size: 24px;
                line-height: 26px;
                ">
        <h1>LOAN</h1>
    </div>

    <img src="img/Line.png">

    <div style="border-radius: 5px; font-family: 'Poppins'; font-style: normal; font-weight: 600; font-size: 20px; line-height: 26px;">
        <form action="" method="post" enctype="multipart/form-data">@csrf
            <div>
                <div>
                    <label for="nama">Nama Pelanggan*</label>
                </div>
                <textarea style="
                    width: 80%;
                    height: 54px;
                    padding: 12px 20px;
                    box-sizing: border-box;
                    border: 2px solid #ccc;
                    border-radius: 4px;
                    background-color: rgba(58, 58, 58, 0.09);
                    font-size: 16px;
                    resize: none;
                " name="deskripsi">Masukkan Nama Anda...</textarea>
            </div>

            <div>
                <div>
                    <label for="nama">No HP*</label>
                </div>
                <textarea style="
                    width: 80%;
                    height: 54px;
                    padding: 12px 20px;
                    box-sizing: border-box;
                    border: 2px solid #ccc;
                    border-radius: 4px;
                    background-color: rgba(58, 58, 58, 0.09);
                    font-size: 16px;
                    resize: none;
                " name="deskripsi">Masukkan No HP Anda...</textarea>
            </div>

            <div class="row">
                <div class="col-5">
                    <div>
                        <label for="nama">Length Of Loan*</label>
                    </div>
                    <textarea style="
                        width: 95%;
                        height: 55px;
                        padding: 12px 20px;
                        box-sizing: border-box;
                        border: 2px solid #ccc;
                        border-radius: 4px;
                        background-color: rgba(58, 58, 58, 0.09);
                        font-size: 20px;
                        resize: none;
                        " name="deskripsi">5 hari</textarea>
                </div>
                <div class="col-5">
                    <div>
                        <label for="tanggal">Loan Date</label>
                    </div>
                    <div>
                        <input type="datetime-local"
                        style="
                            width: 95%;
                            height: 55px;
                            padding: 12px 20px;
                            box-sizing: border-box;
                            border: 2px solid #ccc;
                            border-radius: 4px;
                            background-color: rgba(58, 58, 58, 0.09);
                            font-size: 16px;
                            ">
                    </div>
                </div>
            </div>

            <div style="text-align: right; margin-right: 20%; font-family: 'Poppins';
                        font-style: normal;
                        font-weight: 500;
                        font-size: 16px;
                        line-height: 24px;">
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

                <input type="submit" value="Cancel" class="btn btn-primary"
                    style="
                        background: #D9D9D9;
                        border-radius: 8px;
                        margin-top: 20px;
                        color: black;
                        border: 1px solid #000000 box-shadow:
                        0px 4px 4px 0px #00000040;
                        box-shadow: 0px 4px 4px 0px #00000040;
                        width: 91px; height: 45px; border-radius:5px
                        margin-top:20%;
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
