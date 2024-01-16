@extends('admin.layouts.main')

@section('container')

<div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col">
                            <div class="h-100">
                                <div class="row mb-3 pb-1">
                                    <div class="col-12">
                                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                            <div class="flex-grow-1">
                                                <h4 class="fs-16 mb-1">DASHBOARD</h4>
                                            </div>
                                        </div><!-- end card header -->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                
                                <div class="col-xl-6 col-md-4">
                                         <a href="/admin/rt" class="">
                                        <div class="card card-height-100">
                                            <div class="card-body">
                                                <div class="mb-4 pb-2">
                                                    <img src="/assets/icon/database.png" alt="" class="avatar-sm">
                                                </div>
                                                    <h6 class="fs-15 fw-semibold">BUAT AKUN RT </h6>
                                                <p class="text-muted mb-0"><i class="ri-building-line align-bottom"></i> Themesbrand <span class="ms-2"><i class="ri-map-pin-2-line align-bottom"></i> Indonesia</span></p>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    
                                    <!-- ================================================================================================ -->
                                    <div class="col-xl-6 col-md-4">
                                        <a href="?halaman=datakeluarga" class="">
                                                <div class="card card-height-100">
                                                    <div class="card-body">
                                                        <div class="mb-4 pb-2">
                                                            <i class="ri-registered-fill" style="font-size:50px"></i>
                                                        </div>
                                                            <h6 class="fs-15 fw-semibold">MELIHAT DATA KARTU KELUARGA </h6>
                                                        <p class="text-muted mb-0"><i class="ri-building-line align-bottom"></i> Themesbrand <span class="ms-2"><i class="ri-map-pin-2-line align-bottom"></i> Indonesia</span></p>
                                                    </div>
                                                </div>
                                        </a>
                                    </div>
                                    <!-- ================================================================================================= -->
                                    <div class="col-xl-6 col-md-4">
                                        <a href="?halaman=datawarga" class="">
                                                <div class="card card-height-100">
                                                    <div class="card-body">
                                                        <div class="mb-4 pb-2">
                                                            <img src="assets/icon/database.png" alt="" class="avatar-sm">
                                                        </div>
                                                            <h6 class="fs-15 fw-semibold">MELIHAT DATA WARGA</h6>
                                                        <p class="text-muted mb-0"><i class="ri-building-line align-bottom"></i> Themesbrand <span class="ms-2"><i class="ri-map-pin-2-line align-bottom"></i> Indonesia</span></p>
                                                    </div>
                                                </div>
                                        </a>
                                    </div>

                                    <div class="col-xl-6 col-md-4">
                                        <a href="?halaman=datamutasi" class="">
                                                <div class="card card-height-100">
                                                    <div class="card-body">
                                                        <div class="mb-4 pb-2">
                                                            <img src="assets/icon/database.png" alt="" class="avatar-sm">
                                                        </div>
                                                            <h6 class="fs-15 fw-semibold">MELIHAT DATA MUTASI</h6>
                                                        <p class="text-muted mb-0"><i class="ri-building-line align-bottom"></i> Themesbrand <span class="ms-2"><i class="ri-map-pin-2-line align-bottom"></i> Indonesia</span></p>
                                                    </div>
                                                </div>
                                        </a>
                                    </div>

                                </div> 
                                <!-- end row-->

                            </div> <!-- end .h-100-->

                        </div> <!-- end col -->
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

@endsection