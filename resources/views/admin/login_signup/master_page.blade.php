<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/hyper/saas/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 May 2022 20:22:57 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Register | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets')}}/images/favicon.ico">

    <!-- App css -->
    <link href="{{asset('assets')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets')}}/css/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>

</head>

<body class="loading authentication-bg" data-layout-config='{"darkMode":false}'>

<div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-4 col-lg-5">
                <div class="card">
                    <!-- Logo-->
                    <div class="card-header pt-4 pb-4 text-center bg-primary">
                        <a href="index-2.html">
                            <span><img src="{{asset('assets')}}/images/logo.png" alt="" height="18"></span>
                        </a>
                    </div>

                    <div class="card-body p-4">
                        @if(\Illuminate\Support\Facades\Session::has('fail'))
                            <div class="alert alert-danger">
                                {{\Illuminate\Support\Facades\Session::get('fail')}}
                            </div>
                        @endif

                        @if(\Illuminate\Support\Facades\Session::has('success'))
                            <div class="alert alert-success">
                                {{\Illuminate\Support\Facades\Session::get('success')}}
                            </div>
                        @endif
@yield('connection')


<footer class="footer footer-alt">
    2018 - <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
</footer>

<!-- bundle -->
<script src="{{asset('assets')}}/js/vendor.min.js"></script>
<script src="{{asset('assets')}}/js/app.min.js"></script>

</body>

<!-- Mirrored from coderthemes.com/hyper/saas/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 May 2022 20:22:57 GMT -->
</html>
