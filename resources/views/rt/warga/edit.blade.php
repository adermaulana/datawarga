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
                                                <h4 class="fs-16 mb-1">EDIT DATA WARGA</h4>
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
                                        <form class="row g-3 " action="/rt/warga/{{ $warga->id_warga }}" method="POST" enctype="multipart/form-data">
                                            @method('put')
                                            @csrf
                                             <div class="col-md-12">
                                                <label for="validationDefault01" class="form-label">NIK</label>
                                                <input type="text" class="form-control" name="nik_warga" id="validationDefault01" value="{{ $warga->nik_warga }}" required>
                                            </div> 
                                            <div class="col-md-12">
                                                <label for="validationDefault01" class="form-label">NAMA</label>
                                                <input type="text" class="form-control" name="nama_warga" id="validationDefault01" value="{{ $warga->nama_warga }}" required>
                                            </div> 
                                            <div class="col-md-12">
                                                <label for="validationDefault01" class="form-label">TEMPAT LAHIR</label>
                                                <input type="text" class="form-control" name="tempat_lahir_warga" id="validationDefault01" value="{{ $warga->tempat_lahir_warga }}" required>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="validationDefault01" class="form-label">TANGGAL LAHIR</label>
                                                <input type="date" class="form-control" name="tanggal_lahir_warga" id="validationDefault01" value="{{ $warga->tanggal_lahir_warga }}" required>
                                            </div>
                                            <div class="col-md-12">
                                                    <label>JENIS KELAMIN</label>
                                                    <select class="form-control" name="jk_warga" required>
                                                        <option value="{{ $warga->jk_warga }}"  selected >{{ $warga->jk_warga }}</option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                             </div>
                                             <div class="col-md-12">
                                                <label for="validationDefault01" class="form-label">ALAMAT</label>
                                                <input type="text" class="form-control" name="alamat_warga" id="validationDefault01" value="{{ $warga->alamat_warga }}" required>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <label for="validationDefault01" class="form-label">RT</label>
                                                <input type="number" class="form-control" name="rt_warga" id="validationDefault01"  value="{{ $warga->rt_warga }}" readonly>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="validationDefault01" class="form-label">RW</label>
                                                <input type="number" class="form-control" name="rw_warga" id="validationDefault01" value="{{ $warga->rw_warga }}" required>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <label for="validationDefault01" class="form-label">DESA</label>
                                                <input type="text" class="form-control" name="desa_warga" id="validationDefault01" value="{{ $warga->desa_warga }}" required>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="validationDefault01" class="form-label">KECAMATAN</label>
                                                <input type="text" class="form-control" name="kecamatan_warga" id="validationDefault01" value="{{ $warga->kecamatan_warga }}" required>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="validationDefault01" class="form-label">KABUPATEN/KOTA</label>
                                                <input type="text" class="form-control" name="kabupaten_warga" id="validationDefault01" value="{{ $warga->kabupaten_warga }}" required>
                                            </div>
                                            <div class="col-md-12">
                                                    <label>AGAMA</label>
                                                    <select class="form-control" name="agama_warga" required>
                                                        <option value="{{ $warga->agama_warga }}"  selected >{{ $warga->agama_warga }}</option>
                                                        <option value="islam">islam</option>
                                                        <option value="kristen">Kristen</option>
                                                        <option value="khatolik">Katolik</option>
                                                        <option value="budha">Buddha</option>
                                                        <option value="hindu">Hindu</option>
                                                    </select>
                                             </div>
                                            <div class="col-md-12">
                                                    <label>STATUS</label>
                                                    <select class="form-control" name="status_warga" required>
                                                        <option value="{{ $warga->status_warga }}"  selected >{{ $warga->status_warga }} </option>
                                                        <option value="Sudah kawin">Sudah kawin</option>
                                                        <option value="Belum kawin">Belum kawin</option>
                                                    </select>
                                             </div>
                                             <div class="col-md-12">
                                                <label for="validationDefault01" class="form-label">PEKERJAAN</label>
                                                <input type="text" class="form-control" name="pekerjaan_warga" id="validationDefault01" value="{{ $warga->pekerjaan_warga }}" required>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="validationDefault01" class="form-label">NEGARA</label>
                                                <input type="text" class="form-control" name="negara_warga" id="validationDefault01" value="{{ $warga->negara_warga }}" required>
                                            </div>
                                            </div>
                                            <div class="row">
                                                <div class="mt-4">
                                                    <button class="btn btn-primary" name="simpan" type="submit">SUBMIT</button>
                                                    <a class="btn btn-danger" href="/rt/warga" type="reset">BATAL</a>
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