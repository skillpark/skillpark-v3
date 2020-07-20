@extends('layouts.security')


@section('content')

<style>
p {
    text-align: center;
}
</style>

<div class="container">
    <div class="row" style="margin-top: 20px;margin-left:70px;">
        <div class="col-xl-5 offset-xl-3">

            <div class="login-register-page">
                <!-- Welcome Text -->
                <div class="welcome-text">
                    <h3>{{ __('Verification Required') }}</h3>
                </div>

                @if (session('resent'))
                <div class="notification notice" role="alert">
                    <p> {{ __('A fresh verification link has been sent to your email address.') }}</p>
                </div>
                @endif

                <p style="font-size: 16px;">Please check your email <b>({{ Auth::user()->email }})</b> to confirm your
                    account.</p>

                <p style="font-size: 15px;">If <b>{{ Auth::user()->email }}</b> is not your email address, please <a
                        href="{{ url('register') }}">go back</a> and enter the correct one.</p>

                <p style="font-size: 15px;margin-bottom:5px"> If you haven't received our email in 15 minutes, please
                    check your spam folder or,
                    <!-- Form -->
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <center> <b> <a href="" style="font-size: 15px;"> <button type="submit"
                                        class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request a fresh verification link.') }}</button></a></b>
                        </center>
                </p>
                </form>
            </div>

        </div>
    </div>
</div>


<!-- Spacer -->
<div class="margin-top-100"></div>
<!-- Spacer / End-->


<script>
document.title = 'Verify E-mail Address | {{ Auth::user()->name }}';
</script>
@endsection