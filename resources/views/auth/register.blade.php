@extends('layouts.security')

@section('content')
<div class="container">
    <div class="row" style="margin-top:20px;">
        <div class="col-xl-4 offset-xl-7">

            <div class="login-register-page">
                <!-- Welcome Text -->
                <div class="welcome-text">
                    <h3 style="font-size: 26px;">Create Your Account!</h3>
                    <span>Already have an account? <a href="{{ route('login') }}">Log In!</a></span>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    
                    @error('name')
                    <span class="feedback" style="color: red;" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="input-with-icon-left">

                        <i class="icon-feather-user"></i>
                        <input type="text" class="input-text with-border" name="name" name="name"
                            value="{{ old('name') }}" placeholder="Your Name" />
                    </div>

                    @error('email')
                    <span class="feedback" style="color: red;" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="input-with-icon-left">

                        <i class="icon-material-baseline-mail-outline"></i>
                        <input type="text" class="input-text with-border" name="email" id="email"
                            value="{{ old('email') }}" placeholder="Email Address" />
                    </div>

                    @error('password')
                    <span class="feedback" style="color: red;" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="input-with-icon-left" title="Should be at least 8 characters long"
                        data-tippy-placement="bottom">

                        <i class="icon-material-outline-lock"></i>
                        <input type="password" class="input-text with-border" name="password" id="password"
                            placeholder="Password" />
                    </div>

                    <button class="button full-width button-sliding-icon ripple-effect margin-top-10"
                        type="submit">{{ __('Register') }} <i
                            class="icon-material-outline-arrow-right-alt"></i></button>
                </form>
                <!-- Social Login -->
                <div class="social-login-separator"><span>or</span></div>
                <center>

                    <a href="{{ route('social.oauth', 'github') }}"
                        style="height:40px;font-weight:600;border-radius:3px"
                        class="btn btn-block btn-social btn-github">
                        <span class="fa fa-github"></span> Register via GitHub
                    </a>

                    <div class="margin-top-10"></div>

                    <div class="margin-top-10"></div>

                    <a href="{{ route('social.oauth', 'google') }}">
                        <div class="google-btn">
                            <div class="google-icon-wrapper">
                                <img class="google-icon"
                                    src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" />
                            </div>
                            <p class="btn-text">Register via Google</p>
                        </div>
                    </a>

                    <div class="margin-top-10"></div>

                    <a href="{{ route('social.oauth', 'twitter') }}"
                        style="height:40px;font-weight:600;border-radius:3px"
                        class="btn btn-block btn-social btn-twitter">
                        <span class="fa fa-twitter"></span> Register via Twitter
                    </a>

                    <div class="margin-top-10"></div>

                    <a>
                        <div class="fb-login-button" data-size="large" data-button-type="continue_with"
                            data-layout="default" data-auto-logout-link="false" data-use-continue-as="true"
                            data-width="330"></div>
                    </a>

                    <div class="margin-top-10"></div>
                </center>
                <a href="{{ route('social.oauth', 'facebook') }}"><button class="facebook-login ripple-effect"
                        style="width: 100%"><i class="icon-brand-facebook"></i> Register via Facebook</button></a>
            </div>

        </div>
    </div>
</div>

<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->
<script>
document.title = 'Register | SKILLPARK - Any Job Any Time';
</script>

@endsection