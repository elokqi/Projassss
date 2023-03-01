@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-bottom: 150px;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="page-footer font-small teal pt-4 bg-dark">

    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row text-light">

        <!-- Grid column -->
        <div class="">

          <!-- Content -->
          <h5 class="text-uppercase text-center font-weight-bold" style="margin-bottom: 25px;">Service Center UM</h5>
          <p class="col-md-6" style="text-align: center; margin-left: 25%;"> Badan usaha yang dikelola oleh mahasiswa teknik elektro UM dan bergerak di bidang elektronika dan informatika
              khususnya jasa servis laptop dan alat elektronik. Pelayanan yang kami sediakan yaitu Jasa Servis laptop
              (kerusakan hardware maupun software),
              Jasa Servis Elektronika, Vendor Lighting, Jasa Pembuatan Vandel dan Gantungan kunci akrilik.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-6 mb-md-0 mb-3">

          <!-- Content -->

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Text -->
  <!-- Remove the container if you want to extend the Footer to full width. -->

      <div class="container d-flex justify-content-center py-5">
        <a type="button" class="btn btn-lg btn-floating" style="background-color: #eeeeee" href="https://instagram.com/service_center_um?igshid=YmMyMTA2M2Y=">
        <i class="fa fa-instagram" style="color:black"></i>
        </a>
        <button type="button" class="btn btn-lg btn-floating mx-2" style="background-color: #eeeeee" href="https://wa.me/+6281234849501">
        <i class="fa fa-whatsapp" style="color:black"></i>
        </button>
      </div>

      <div class="footer-copyright text-center py-3 text-light">© 2020 Copyright:
      <a href="/"> Service Center</a>
      </div>
      </div>

  </footer>
  <!-- Footer -->
@endsection
