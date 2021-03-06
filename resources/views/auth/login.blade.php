@extends('layout.app')

@section('title', 'Login')

<!-- css styles -->
@section('style')
  <!-- insert custom css styles here -->
  <!-- i suggest to avoid custom css styles and have it in the .css file in `public/css` -->
@endsection

@section('body')

  <section class="login-block">
    <div class="login-container">
      <div class="row">
        <div class="col-md-4 login-sec">
          <h2 class="text-center">Login Now</h2>
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="control-label text-white">E-Mail Address</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                  <div class="alert alert-danger alert-spacing small">
                    {{ $errors->first('email') }}
                  </div>
                @endif
              </div>
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="control-label text-white">Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
                @if ($errors->has('password'))
                  <div class="alert alert-danger alert-spacing small">
                    {{ $errors->first('password') }}
                  </div>
                @endif
              </div>
              <div class="form-check">
                <div class="form-check-label text-white">
                      <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                     Remember Me
                </div>
              </div>
                <div class="form-group">
                    <a class="btn login-btn-link" href="{{ route('password.request') }}">
                        <i> Forgot Your Password? </i>
                    </a>
                    <button type="submit" class="btn btn-login float-right">
                        Login
                    </button>
                </div>
            </form>
        </div>
        <div class="col-md-8 login-banner-sec">
            <div id="carouselExampleIndicators" class="login-carousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="login-carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block" src="storage/people-coffee-tea-meeting.jpg" alt="First slide">
                        <div class="login-carousel-caption d-none d-md-block">
                        <div class="login-banner-text">
                            <h2>This is Heaven</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        </div>  
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="storage/people-woman-coffee-meeting.jpg" alt="First slide">
                        <div class="login-carousel-caption d-none d-md-block">
                        <div class="login-banner-text">
                            <h2>This is Heaven</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        </div>  
                        </div>
                    </div>
                     <div class="carousel-item">
                        <img class="d-block" src="storage/pexels-photo.jpg" alt="First slide">
                        <div class="login-carousel-caption d-none d-md-block">
                        <div class="login-banner-text">
                            <h2>This is Heaven</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
@endsection
