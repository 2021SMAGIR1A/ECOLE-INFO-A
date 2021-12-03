<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>{{ $title }} | {{ config('app.name') }} - {{ config('app.slogan') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" /> --}}
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app-modern.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{ asset('assets/css/app-modern-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />
        @yield('styles')
    </head>

    <body class="authentication-bg pb-0" data-layout-config='{"darkMode":false}'>

        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="card-body">

                        <!-- Logo -->
                        <div class="auth-brand text-center text-lg-left">
                            <a href="{{ route('home') }}" class="logo-dark">
                                {{-- <span><img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="18"></span> --}}
                                <span><img src="{{ asset('logo.png') }}" alt="" height="70"></span>
                            </a>
                            <a href="{{ route('home') }}" class="logo-light">
                                <span><img src="{{ asset('logo-dark.png') }}" alt="" height="70"></span>
                            </a>
                        </div>

                        <!-- title-->
                        <h4 class="mt-5">{{ $title }}</h4>
                        <p class="text-muted mb-4">{{ $subtitle }}</p>

                        <!-- form -->
                        @yield('content')
                        <!-- end form-->

                        <!-- Footer-->
                        <footer class="footer footer-alt">
                            @yield('footer')
                        </footer>

                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <!-- end auth-fluid-form-box-->

            <!-- Auth fluid right content -->
            <div class="auth-fluid-right text-center">
                <div class="auth-user-testimonial">
                    <h2 class="mb-3">{{ config('app.name') }}</h2>
                    <p class="lead"><i class="mdi mdi-format-quote-open"></i> {{ config('app.slogan') }} . <i class="mdi mdi-format-quote-close"></i>
                    </p>
                    <p>
                        - SMAGIR2A Groupe 1 
                    </p>
                </div> <!-- end auth-user-testimonial-->
            </div>
            <!-- end Auth fluid right content -->
        </div>
        <!-- end auth-fluid-->

        <!-- bundle -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
        <script src="{{ asset('assets/js/app.min.js') }}"></script>

    </body>
</html>