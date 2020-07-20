@extends('layouts.security')

@section('content')

<div class="container">
    <div class="row" style="margin-top: 20px;margin-bottom:30px;">
        <div class="col-xl-4 offset-xl-7">


            <div class="login-register-page">
                <!-- Welcome Text -->
                <div class="welcome-text">
                    <h3>Login To Skillpark!</h3>
                    <span>Don't have an account? <a href="{{ route('register') }}">Sign Up!</a></span>
                </div>

                <!-- Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    @error('email')
                    <span class="feedback" style="color:red;" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="input-with-icon-left">
                        <i class="icon-material-baseline-mail-outline"></i>
                        <input id="email" type="text" class="input-text with-border @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" />

                    </div>

                    @error('password')
                    <span class="feedback" style="color:red;" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="input-with-icon-left">

                        <i class="icon-material-outline-lock"></i>

                        <input type="password" class="input-text with-border @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" autofocus />

                    </div>

                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif

                    <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit">{{ __('Login') }}<i class="icon-material-outline-arrow-right-alt"></i></button>

                </form>
                <!-- Social Login -->
                <div class="social-login-separator"><span>or</span></div>
                <center>

                    <a href="{{ route('social.oauth', 'github') }}" style="height:40px;border-radius:3px" class="btn btn-block btn-social btn-github">
                        <span class="fa fa-github"></span> Sign In with GitHub
                    </a>

                    <div class="margin-top-10"></div>

                    <a href="{{ route('social.oauth', 'google') }}">
                        <div class="google-btn">
                            <div class="google-icon-wrapper">
                                <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" />
                            </div>
                            <p class="btn-text">Sign In with Google</p>
                        </div>
                    </a>

                    <div class="margin-top-10"></div>

                    <a href="{{ route('social.oauth', 'twitter') }}" style="height:40px;border-radius:3px" class="btn btn-block btn-social btn-twitter">
                        <span class="fa fa-twitter"></span> Sign In with Twitter
                    </a>

                    <div class="margin-top-10"></div>
                    <a>
                        <div class="fb-login-button" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="true" data-width="330"></div>
                    </a>

                    <div class="margin-top-10"></div>

                </center>
                <a href="{{ route('social.oauth', 'facebook') }}"><button class="facebook-login ripple-effect" style="width: 100%"><i class="icon-brand-facebook"></i> Sign In via Facebook</button></a>
            </div>
        </div>

    </div>
</div>
</div>

<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->
<script>
    document.title = 'Login | SKILLPARK - Any Job Any Time';
</script>

@endsection