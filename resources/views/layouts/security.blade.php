<!Doctype html>
<html lang="en">

<head>
    <title>{{config('app.name','SKILLPARK')}}</title>
    <link rel="icon" type="image/png" href="/images/titlelogo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/color.css">
    <link rel="stylesheet" href="/css/bootstrap-social.css">

</head>

<body>
    <div id="wrapper">

        <header id="header-container">

            <div id="header">
                <div class="container">

                    <div class="left-side">
                        <div id="logo" style="border: none">
                            <a href="{{ url('/') }}"><img src="/images/logo.png" alt=""></a>
                        </div>
                        @auth
                        <div class="header-widget" style="border: none;float:right">
                            <a href="{{ route('logout') }}" style="top: 20%;background-color:#0bb744;color:white;" class="button gray ripple-effect  button-sliding-icon" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout <i class="icon-feather-log-out"></i></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>

        </header>
        <div class="clearfix"></div>

        @yield('content')

        <div id="footer">

            <!-- Footer Copyrights -->
            <div class="footer-bottom-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            © 2020 <strong>SKILLPARK</strong>. All Rights Reserved.
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: '288212299120003',
                autoLogAppEvents: true,
                xfbml: true,
                version: 'v7.0'
            });
        };
    </script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>


    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="/js/mmenu.min.js"></script>
    <script src="/js/tippy.all.min.js"></script>
    <script src="/js/bootstrap-select.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/custom.js"></script>
    <script src="/js/simplebar.min.js"></script>
    <script src="/js/bootstrap-slider.min.js"></script>
    <script src="/js/snackbar.js"></script>
    <script src="/js/clipboard.min.js"></script>
    <script src="/js/counterup.min.js"></script>
    <script src="/js/magnific-popup.min.js"></script>

</body>

</html>