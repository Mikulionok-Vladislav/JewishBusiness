@extends('layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Login</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->



    <!-- Content section Start -->
    <div id="content" class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-xs-12">
                    <div class="page-login-form box">
                        <h3>
                            Login
                        </h3>





                    <form class="login-form" method="POST" action="{{ route('login') }}">
                        @csrf



                        <div class="form-group">
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

                            <div class="input-icon">
                                <i class="lni-user"></i>
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>





                        <div class="form-group">
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

                            <div class="input-icon">
                                <i class="lni-lock"></i>
                                <input id="password" type="password" class="form-control" placeholder="Password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




{{--                        <div class="row mb-3">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
                                <div class="form-group form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
{{--                            </div>--}}
{{--                        </div>--}}




{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
                                <button class="btn btn-common log-btn" type="submit" >
                                    {{ __('Login') }}
                                </button>


{{--                            </div>--}}
{{--                        </div>--}}
                        @if (Route::has('password.request'))
                            <ul class="form-links">
                                <li class="text-center">
                                    <a class="text-center" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </li>
                            </ul>
                        @endif


                    </form>






{{--                        <ul class="form-links">--}}
{{--                            <li class="text-center"><a href="register.html">Don't have an account?</a></li>--}}
{{--                        </ul>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
