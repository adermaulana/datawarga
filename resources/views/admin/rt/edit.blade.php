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
                                        <h4 class="fs-16 mb-1">REGISTRASI AKUN RT</h4>
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
                                <form class="row g-3 " action="/admin/rt/{{ $rt->id_rt }}" method="POST" enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">NAMA</label>
                                        <input type="text" class="form-control" name="nama_rt" value="{{ old('nama_rt',$rt->nama_rt) }}" id="validationDefault01"
                                               value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">USERNAME</label>
                                        <input type="text" class="form-control" name="username" value="{{ old('nama_rt',$rt->username) }}" id="validationDefault01"
                                               value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">PASSWORD</label>
                                        <input type="text" class="form-control" name="password" value="" id="validationDefault01"
                                               value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label>AGAMA</label>
                                        <select class="form-control" name="agama_rt" required>
                                            <option value="{{ old('nama_rt',$rt->agama_rt) }}" selected> {{ $rt->agama_rt }} </option>
                                            <option value="islam">islam</option>
                                            <option value="kristen">Kristen</option>
                                            <option value="khatolik">Katolik</option>
                                            <option value="budha">Buddha</option>
                                            <option value="hindu">Hindu</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">KETERANGAN</label>
                                        <input type="text" value="{{ old('nama_rt',$rt->keterangan_rt) }}" class="form-control" name="keterangan_rt" id="validationDefault01"
                                               value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">DESA</label>
                                        <input type="text" class="form-control" value="{{ old('nama_rt',$rt->desa_rt) }}" name="desa_rt" id="validationDefault01"
                                               value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">KECAMATAN</label>
                                        <input type="text" class="form-control" value="{{ old('nama_rt',$rt->kecamatan_rt) }}" name="kecamatan_rt" id="validationDefault01"
                                               value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">KABUPATEN/KOTA</label>
                                        <input type="text" class="form-control" value="{{ old('nama_rt',$rt->kota_rt) }}" name="kota_rt" id="validationDefault01"
                                               value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">PROVINSI</label>
                                        <input type="text" class="form-control" value="{{ old('nama_rt',$rt->provinsi_rt) }}" name="provinsi_rt" id="validationDefault01"
                                               value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">NEGARA</label>
                                        <input type="text" class="form-control" value="{{ old('nama_rt',$rt->negara_rt) }}" name="negara_rt" id="validationDefault01"
                                               value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">RT</label>
                                        <input type="text" class="form-control" value="{{ old('nama_rt',$rt->rt_rt) }}" name="rt_rt" id="validationDefault01"
                                               value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">RW</label>
                                        <input type="text" class="form-control" value="{{ old('nama_rt',$rt->rw_rt) }}" name="rw_rt" id="validationDefault01"
                                               value="" required>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="mt-4">
                                    <button class="btn btn-primary" name="simpan" type="submit">SUBMIT</button>
                                    <a class="btn btn-danger" href="/admin/rt"
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