<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Avoson Hotel Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('frontend')}}/css/slick.css"/>
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css"/>
    <script src="{{asset('frontend')}}/js/jquery-3.6.3.min.js"></script>
</head>
@include('frontend.master_header_footer.header_page')
{{--///////////////////////////////////////////--}}
{{--@include('frontend.about_us')--}}
@yield('about_us_body')
@yield('contact-us-body')
@yield('index-page-body')
@yield('our_gallery')
@yield('our-service')
@yield('our-staff')
@yield('room-details')
@yield('room-grid')


@include('frontend.master_header_footer.footer_page')
<script src="{{asset('frontend')}}/js/slick.min.js"></script>
<script src="{{asset('frontend')}}/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>

</script>
</body>
</html>
