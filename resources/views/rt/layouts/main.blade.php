<!doctype html>
    <html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
          data-sidebar-image="none" data-preloader="disable">


    <!-- Mirrored from themesbrand.com/velzon/html/material/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Dec 2022 13:42:44 GMT -->
    <head>

        <meta charset="utf-8"/>
        <title>Dashboard </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
        <meta content="Themesbrand" name="author"/>
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- jsvectormap css -->
        <link href="/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css"/>

        <!--Swiper slider css-->
        <link href="/assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css"/>

        <!-- Layout config Js -->
        <script src="/assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Icons Css -->
        <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css"/>
        <!-- App Css-->
        <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css"/>
        <!-- custom Css-->
        <link href="/assets/css/custom.min.css" rel="stylesheet" type="text/css"/>
        <!--datatable css-->
        <link
                rel="stylesheet"
                href="/cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css"
        />
        <!--datatable responsive css-->
        <link
                rel="stylesheet"
                href="/cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css"
        />

        <link
                rel="stylesheet"
                href="/cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css"
        />


    </head>

    <body>

    <div class="layout-wrapper landing">
        @include('sweetalert::alert')
        @include('rt.partials.header')

            <div class="bg-overlay bg-overlay-pattern"></div>
            <!-- end navbar -->


        @yield('container')
        @include('rt.partials.footer')


    </div>

    <script
            src="/code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"
    ></script>
    <!-- JAVASCRIPT -->
    <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/assets/libs/node-waves/waves.min.js"></script>
    <script src="/assets/libs/feather-icons/feather.min.js"></script>
    <script src="/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="/assets/js/plugins.js"></script>
    <!-- apexcharts -->
    <script src="/assets/libs/apexcharts/apexcharts.min.js"></script>
    <!-- Vector map-->
    <script src="/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="/assets/libs/jsvectormap/maps/world-merc.js"></script>
    <!--Swiper slider js-->
    <script src="/assets/libs/swiper/swiper-bundle.min.js"></script>
    <!-- Dashboard init -->
    <script src="/assets/js/pages/dashboard-ecommerce.init.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--datatable js-->
    <script src="/cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="/cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="/cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="/cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="/cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="/cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="/cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="/cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="/cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="/assets/js/pages/datatables.init.js"></script>
    <!-- apexcharts -->
    <script src="/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- piecharts init -->
    <script src="/assets/js/pages/apexcharts-pie.init.js"></script>

    <!-- App js -->
    <script src="/assets/js/app.js"></script>

    </body>


    <!-- Mirrored from themesbrand.com/velzon/html/material/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Dec 2022 13:42:47 GMT -->
    </html>
