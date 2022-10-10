<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/logo-sc.png" type="image/x-icon">
    <title>SERVICE CENTER</title>
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/">
                <img class="image" src="img/logo-sc.png" width="42px" style="margin: 1px; padding: 0px; color:white;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rent List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Price List</a>
                    </li>
                </ul>

                <input id="gen" type="submit" value="Tracking Service" class="btn" style="background: #85FF00">
            </div>
        </nav>
    </header>

    <h3> @yield('judul_halaman') </h3>

    @yield('konten')

    <footer class="fixed-bottom page-footer font-small teal pt-4 bg-dark">
        <div class="container-fluid text-center text-md-left">
            <div class="text-light text-center">
                <b>SERVICE CENTER UM</b>
                <p style="margin-left:50px; margin-right:50px">Badan usaha yang dikelola oleh mahasiswa teknik elektro UM dan bergerak di bidang elektronika dan informatika khususnya jasa servis laptop dan alat elektronik. Pelayanan yang kami sediakan yaitu Jasa Servis laptop (kerusakan hardware maupun software), Jasa Servis Elektronika, Vendor Lighting, Jasa Pembuatan Vandel dan Gantungan kunci akrilik.</p>
            </div>
        </div>

        <div class="container d-flex justify-content-center py-3">
            <a type="button" class="btn btn-lg btn-floating" style="background-color: #ffffff; border-radius: 100%" href="https://instagram.com/service_center_um?igshid=YmMyMTA2M2Y=">
                <i class="fa fa-instagram" style="color:black"></i>
            </a>
            <button type="button" class="btn btn-lg btn-floating mx-2" style="background-color: #ffffff; border-radius: 100%" href="https://wa.link/5v5jbq">
                <i class="fa fa-whatsapp" style="color:black"></i>
            </button>
        </div>

        <div class="footer-copyright text-center py-3 text-light">© 2022 Copyright:
            <a href="/"> Service Center</a>
        </div>
        </div>

    </footer>
</body>

</html>