
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="img/logo-sc.png" >
    <title>SERVICE CENTER</title>
    <!-- <title>{{ config('app.name', 'Service Center') }}</title> -->

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">

 <a class="navbar-brand" href="#"><img class="image" src="img/logo-sc.png" width="42px" style="margin:1px; padding:0px; color:white;"></a>

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">

   <ul class="navbar-nav">
     <li class="nav-item active">
       <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="#">About Us</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="#">Product</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="#">Price List</a>
     </li>
   </ul>

   <input id="gen" type="submit" value="Booking Code" class="btn" style="background: #85FF00">
               
</div>
</nav>
</head>
