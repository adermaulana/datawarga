@extends('rt.layouts.main')

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
                                        <h4 class="fs-16 mb-1">TAMBAH KARTU KELUARGA</h4>
                                    </div>
                                </div><!-- end card header -->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->     <!-- end row-->

                    </div> <!-- end .h-100-->

                </div> <!-- end col -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">SILAHKAN DIISI DENGAN LENGKAP DATA DIBAWAH !</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <!-- <p class="text-muted">Not interested in custom validation feedback messages or writing JavaScript to change form behaviors? All good, you can use the browser defaults. Try submitting the form below. Depending on your browser and OS, you’ll see a slightly different style of feedback.While these feedback styles cannot be styled with CSS, you can still customize the feedback text through JavaScript.</p> -->

                            <div class="live-preview">
                                <form class="row g-3 " action="/rt/keluarga" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">NOMOR KARTU KELUARGA</label>
                                        <input type="text" class="form-control" name="nomor_kartu_keluarga" id="validationDefault01"
                                               value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label>ID WARGA</label>
                                        <select class="form-control" name="id_warga" required>
                                            <option value="" disabled selected></option>
                                            @foreach($warga as $data)
                                                <option value="{{ $data->id_warga }}">{{ $data->nama_warga }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">RT</label>
                                        <input type="text" class="form-control" name="rt_keluarga" value="{{ $rt->rt_rt }}" readonly id="validationDefault01">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">RW</label>
                                        <input type="text" class="form-control" name="rw_keluarga" id="validationDefault01"
                                               value="" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">DESA</label>
                                        <input type="text" class="form-control" name="desa_keluarga" id="validationDefault01"
                                               value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">KECAMATAN</label>
                                        <input type="text" class="form-control" name="kecamatan_keluarga" id="validationDefault01"
                                               value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">KABUPATEN/KOTA</label>
                                        <input type="text" class="form-control" name="kota_keluarga" id="validationDefault01"
                                               value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">PROVINSI</label>
                                        <input type="text" class="form-control" name="provinsi_keluarga" id="validationDefault01"
                                               value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">NEGARA</label>
                                        <input type="text" class="form-control" name="negara_keluarga" id="validationDefault01"
                                               value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">KODE POS</label>
                                        <input type="text" class="form-control" name="kode_keluarga" id="validationDefault01"
                                               value="" required>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="mt-4">
                                    <button class="btn btn-primary" name="simpan" type="submit">SUBMIT</button>
                                    <a class="btn btn-danger" href="/rt/keluarga"
                                            type="reset">BATAL
                                    </a>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>

    </div>
    <!-- container-fluid -->
    </div>

@endsection