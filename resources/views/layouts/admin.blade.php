<!doctype html>
<html lang="en">

<head>
    <title>:: Iconic :: eCommerce</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="https://wrraptheme.com/templates/iconic/dist/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://wrraptheme.com/templates/iconic/dist/assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://wrraptheme.com/templates/iconic/dist/assets/vendor/jvectormap/jquery-jvectormap-2.0.3.min.css" />
    <link rel="stylesheet" href="https://wrraptheme.com/templates/iconic/dist/assets/vendor/charts-c3/plugin.css" />
    <style>
        .annual_report .c3-axis.c3-axis-y {
            display: none;
        }

        .annual_report .c3-axis.c3-axis-x {
            display: none;
        }
    </style>
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="https://wrraptheme.com/templates/iconic/dist/assets/css/main.css">
</head>

<body data-theme="light" class="font-nunito">

    <div id="wrapper" class="theme-cyan">

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img src="https://wrraptheme.com/templates/iconic/dist/assets/images/logo-icon.svg" width="48" height="48" alt="Iconic"></div>
                <p>Please wait...</p>
            </div>
        </div>

        <!-- Top navbar div start -->
        @include('layouts.admin.nav')

        <!-- main left menu -->
        @include('layouts.admin.sidebar')

        <!-- mani page content body part -->
        <div id="main-content">
            @yield('content')
        </div>

    </div>

    <!-- Javascript -->
    <script src="https://wrraptheme.com/templates/iconic/dist/assets/bundles/libscripts.bundle.js"></script>
    <script src="https://wrraptheme.com/templates/iconic/dist/assets/bundles/vendorscripts.bundle.js"></script>

    <script src="https://wrraptheme.com/templates/iconic/dist/assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
    <script src="https://wrraptheme.com/templates/iconic/dist/assets/bundles/c3.bundle.js"></script>


    <!-- page js file -->
    <script src="https://wrraptheme.com/templates/iconic/dist/assets/bundles/mainscripts.bundle.js"></script>
    <script src="../js/index8.js"></script>
</body>

</html>
