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


                    <!-- start hero section -->
                    <section class="section nft-hero mt-0" id="hero">
                <div class="bg-overlay"></div>
                <div class="container">
                    <!--  -->
                    <div class="row justify-content-center">
                            <div class="text-center mb-0">
                                <h2 class="mb-3 mt-0 fw-semibold text-light lh-base">PENDATAAN WARGA</h2>
                            </div>
                        <!-- end col -->
                        <div class="col-lg-8 col-sm-10">
                            <div class="text-center">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">STATISTIK DATA WARGA</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="simple_pie_chart2"
                                             data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger"]'
                                             class="apex-charts" dir="ltr"></div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                        </div><!--end col-->
                    </div><!-- end row -->
                </div><!-- end container -->
            </section><!-- end hero section -->

                      <!-- start wallet -->
            <section class="section" id="wallet">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h2 class="mb-3 fw-semibold lh-base">HALLO, WARGA SEKALIAN</h2>
                                <p class="text-muted">Website ini kami buat sebagai tempat ataupun wadah menginput data
                                    diri agar terdaftar di tempat domisili anda sekarang,
                                    mohon diisi menu yang ingin diisi dibawah dengan baik,bijak dan seksama. Terima
                                    kasih.</p>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div class="row g-4">
                        <a href="/rt/warga">
                        <div class="col-lg-4">
                            <div class="card text-center border">
                                <div class="card-body py-5 px-4">
                                    <img src="/assets/images/nft/wallet/metamask.png" alt="" height="55"
                                         class="mb-3 pb-2">
                                    <h5>Data Warga</h5>
                                    <p class="text-muted pb-1 fs-13">Jika anda ingin mengisi atau menginput data
                                        warga anda.</p>
                                    <a href="/rt/warga" class="btn btn-soft-info">TEKAN UNTUK MENGINPUT</a>
                                </div>
                            </div>
                        </div><!-- end col -->
                        </a>

                        <div class="col-lg-4">
                            <a href="/rt/keluarga">
                            <div class="card text-center border">
                                <div class="card-body py-5 px-4">
                                    <img src="/assets/images/nft/wallet/coinbase.png" alt="" height="55"
                                         class="mb-3 pb-2">
                                    <h5>Data Kartu Keluarga</h5>
                                    <p class="text-muted pb-1 fs-13">Jika ingin menginput data kartu keluarga
                                        anda.</p>
                                    <a href="/rt/keluarga" class="btn btn-info">TEKAN UNTUK MENGINPUT</a>
                                </div>
                            </div>
                            </a>
                        </div>

                        <!-- end col -->
                        <div class="col-lg-4">
                            <a href="/rt/mutasi">
                                <div class="card text-center border">
                                    <div class="card-body py-5 px-4">
                                        <img src="/assets/images/nft/wallet/binance.png" alt="" height="55"
                                             class="mb-3 pb-2">
                                        <h5>Data Mutasi</h5>
                                        <p class="text-muted pb-1 fs-13">Disini bisa mengajukan data mutasi jika ingin
                                            pindah domisili.</p>
                                        <a href="/rt/mutasi" class="btn btn-soft-info">TEKAN UNTUK MENGINPUT</a>
                                    </div>
                                </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </section><!-- end wallet -->
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
    <script>
        function getChartColorsArray(e) {
            if (null !== document.getElementById(e)) return e = document.getElementById(e).getAttribute("data-colors"), (e = JSON.parse(e)).map(function (e) {
                var t = e.replace(" ", "");
                return -1 === t.indexOf(",") ? getComputedStyle(document.documentElement).getPropertyValue(t) || t : 2 == (e = e.split(",")).length ? "rgba(" + getComputedStyle(document.documentElement).getPropertyValue(e[0]) + "," + e[1] + ")" : t
            })
        }

        var upadatedonutchart, chartPieBasicColors = getChartColorsArray("simple_pie_chart2"),
            chartDonutBasicColors = (chartPieBasicColors && (options = {
                series: [{{ $warga_laki }}, {{ $warga_perempuan }}, {{ $warga_seventeen }}, {{ $warga_under_seventeen }}],
                chart: {height: 300, type: "pie"},
                labels: ["Laki-Laki", "Perempuan", "Warga Diatas 17 Tahun", "Warga Dibawah 17 Tahun"],
                legend: {position: "bottom"},
                dataLabels: {dropShadow: {enabled: !1}},
                colors: chartPieBasicColors
            }, (chart = new ApexCharts(document.querySelector("#simple_pie_chart2"), options)).render()), getChartColorsArray("simple_dount_chart2")),
            chartDonutupdatingColors = (chartDonutBasicColors && (options = {
                series: [{{ $warga_laki }}, {{ $warga_perempuan }}, {{ $warga_seventeen }}, {{ $warga_under_seventeen }}],
                chart: {height: 300, type: "donut"},
                legend: {position: "bottom"},
                dataLabels: {dropShadow: {enabled: !1}},
                colors: chartDonutBasicColors
            }, (chart = new ApexCharts(document.querySelector("#simple_dount_chart2"), options)).render()), getChartColorsArray("updating_donut_chart2"));
    </script>
    </body>


    <!-- Mirrored from themesbrand.com/velzon/html/material/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Dec 2022 13:42:47 GMT -->
    </html>
