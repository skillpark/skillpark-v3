@extends('layouts.security')


@section('content')
<!-- Page Content
================================================== -->
<div class="container">
    <div class="row" style="margin-top: 40px;margin-bottom:30px;">
        <div class="col-xl-4 offset-xl-4">

            <div class="login-register-page">
                <!-- Welcome Text -->
                <div class="welcome-text">
                    <h3>Reset Password</h3>
                </div>

                <!-- Form -->
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf


                    <input type="hidden" name="token" value="{{ $token }}">

                    @error('email')
                    <span class="invalid-feedback" style="color:red;" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="input-with-icon-left">
                        <i class="icon-material-baseline-mail-outline"></i>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                    </div>

                    @error('password')
                    <span class="invalid-feedback" style="color:red;" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="input-with-icon-left">
                        <i class="icon-material-baseline-mail-outline"></i>
                        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    </div>

                    @error('password')
                    <span class="invalid-feedback" style="color:red;" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="input-with-icon-left">
                        <i class="icon-material-baseline-mail-outline"></i>
                        <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
            </div>

            <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit">{{ __('Reset Password') }}<i class="icon-material-outline-arrow-right-alt"></i></button>

            </form>
        </div>

    </div>
</div>
</div>


<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->


@endsection