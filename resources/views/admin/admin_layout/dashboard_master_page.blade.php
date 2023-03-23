<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/hyper/saas/crm-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 May 2022 20:22:38 GMT -->
<head>
    <meta charset="utf-8"/>
    <title>CRM Dashboard | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Coderthemes" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets')}}/images/favicon.ico">

    <!-- App css -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets')}}/css/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>
    <link href="{{asset('assets')}}/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets')}}/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css" />

</head>
<body class="loading" data-layout-color="light" data-leftbar-theme="dark" data-layout-mode="fluid"
      data-rightbar-onstart="true">
<!-- Begin page -->
<div class="wrapper">

    @include('admin.admin_layout.left_sidebar')
    <div class="content-page">
        <div class="content">
            @include('admin.admin_layout.top_bar')

            @yield('admin')
{{--            {{ dd(1) }}--}}

        </div>
        <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <script>document.write(new Date().getFullYear())</script>
                        © Hyper - Coderthemes.com
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-end footer-links d-none d-md-block">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- bundle -->

<script src="{{asset('assets')}}/js/vendor.min.js"></script>
<script src="{{asset('assets')}}/js/app.min.js"></script>

<!-- Apex js -->
<script src="{{asset('assets')}}/js/vendor/apexcharts.min.js"></script>

<!-- Todo js -->
<script src="{{asset('assets')}}/js/ui/component.todo.js"></script>

<!-- demo app -->
<script src="{{asset('assets')}}/js/pages/demo.crm-dashboard.js"></script>
<!-- end demo js-->
<!-- Datatables js -->
<script src="{{asset('assets')}}/js/vendor/jquery.dataTables.min.js"></script>
<script src="{{asset('assets')}}/js/vendor/dataTables.bootstrap5.js"></script>
<script src="{{asset('assets')}}/js/vendor/dataTables.responsive.min.js"></script>
<script src="{{asset('assets')}}/js/vendor/responsive.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Datatable Init js -->
<script src="{{asset('assets')}}/js/pages/demo.datatable-init.js"></script>
<script>
    $(".form-control1").select2({
        tags: false
    });
</script>
</body>

<!-- Mirrored from coderthemes.com/hyper/saas/crm-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 May 2022 20:22:38 GMT -->
</html>

