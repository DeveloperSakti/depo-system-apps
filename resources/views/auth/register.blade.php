@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{--  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register &mdash; Stisla</title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ URL::to('vendor/stisla-dashboard/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::to('vendor/stisla-dashboard/modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ URL::to('vendor/stisla-dashboard/modules/jquery-selectric/selectric.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ URL::to('vendor/stisla-dashboard/css/style.css') }}">
  <link rel="stylesheet" href="{{ URL::to('vendor/stisla-dashboard/css/components.css') }}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" type="name" class="form-control" name="name">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="password" class="d-block">Password</label>
                    <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                    <div id="pwindicator" class="pwindicator">
                      <div class="bar"></div>
                      <div class="label"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password2" class="d-block">Password Confirmation</label>
                    <input id="password2" type="password" class="form-control" name="password-confirm">
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>

                <div class="mt-5 text-muted text-center">
                    Have an account? <a href="{{ route('login') }}">Login</a>
                </div>
                <div class="simple-footer">
                  Copyright &copy; Depo System 2019
                </div>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ URL::to('vendor/stisla-dashboard/modules/jquery.min.js') }}"></script>
  <script src="{{ URL::to('vendor/stisla-dashboard/modules/popper.js') }}"></script>
  <script src="{{ URL::to('vendor/stisla-dashboard/modules/tooltip.js') }}"></script>
  <script src="{{ URL::to('vendor/stisla-dashboard/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ URL::to('vendor/stisla-dashboard/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ URL::to('vendor/stisla-dashboard/modules/moment.min.js') }}"></script>
  <script src="{{ URL::to('vendor/stisla-dashboard/js/stisla.js') }}"></script>
  
  <!-- JS Libraies -->
  <script src="{{ URL::to('vendor/stisla-dashboard/modules/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
  <script src="{{ URL::to('vendor/stisla-dashboard/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ URL::to('vendor/stisla-dashboard/js/page/auth-register.js') }}"></script>
  
  <!-- Template JS File -->
  <script src="{{ URL::to('vendor/stisla-dashboard/js/scripts.js') }}"></script>
  <script src="{{ URL::to('vendor/stisla-dashboard/js/custom.js') }}"></script>
</body>
</html>  --}}