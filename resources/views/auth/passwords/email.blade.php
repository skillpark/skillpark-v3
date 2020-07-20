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
                    <h3>Reset Your Password</h3>
                </div>
                @if (session('status'))
                <div class="notification notice" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <!-- Form -->
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    @error('email')
                    <span class="invalid-feedback" style="color:red;" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="input-with-icon-left">
                        <i class="icon-material-baseline-mail-outline"></i>
                        <input id="email" type="text" class="input-text with-border @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" />

                    </div>
            </div>

            <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit">{{ __('Send Password Reset Link') }}<i class="icon-material-outline-arrow-right-alt"></i></button>

            </form>
        </div>

    </div>
</div>
</div>


<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->


@endsection