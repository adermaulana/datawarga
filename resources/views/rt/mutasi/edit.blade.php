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
                                                <h4 class="fs-16 mb-1">EDIT DATA MUTASI</h4>
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
                                <form class="row g-3 " action="/rt/mutasi/{{ $mutasi->id_mutasi }}" method="POST" enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">NIK</label>
                                        <input type="text" class="form-control" readonly value="{{ $mutasi->nik_mutasi }}" name="nik_mutasi" id="validationDefault01" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">NAMA</label>
                                        <input type="text" class="form-control" readonly value="{{ $mutasi->nama_mutasi }}" name="nama_mutasi" id="validationDefault01" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">TEMPAT LAHIR</label>
                                        <input type="text" class="form-control" readonly value="{{ $mutasi->tempat_lahir_mutasi }}" name="tempat_lahir_mutasi" id="validationDefault01" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">TANGGAL LAHIR</label>
                                        <input type="date" class="form-control" readonly value="{{ $mutasi->tanggal_lahir_mutasi }}" name="tanggal_lahir_mutasi" id="validationDefault01" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label>JENIS KELAMIN</label>
                                        <select class="form-control" name="jk_mutasi" required>
                                            <option value="" disabled selected >Pilih</option>
                                            <option value="Laki-laki"<?= $mutasi->jk_mutasi === 'Laki-laki' ? 'selected' : 'disabled' ?>>Laki-laki</option>
                                            <option value="Perempuan"<?= $mutasi->jk_mutasi === 'Perempuan' ? 'selected' : 'disabled' ?>>Perempuan</option>
                                        </select>
                                    </div>
                                    <hr>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">ALAMAT</label>
                                        <input type="text" class="form-control" value="{{ $mutasi->alamat_mutasi }}" name="alamat_mutasi" id="validationDefault01" value="" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">RT</label>
                                        <input type="text" class="form-control" value="{{ $mutasi->rt_mutasi }}" name="rt_mutasi" id="validationDefault01" value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">RW</label>
                                        <input type="text" class="form-control" value="{{ $mutasi->rw_mutasi }}" name="rw_mutasi" id="validationDefault01" value="" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">DESA</label>
                                        <input type="text" class="form-control" value="{{ $mutasi->desa_mutasi }}" name="desa_mutasi" id="validationDefault01" value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">KECAMATAN</label>
                                        <input type="text" class="form-control" value="{{ $mutasi->kecamatan_mutasi }}" name="kecamatan_mutasi" id="validationDefault01" value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">KABUPATEN/KOTA</label>
                                        <input type="text" class="form-control" value="{{ $mutasi->kabupaten_mutasi }}" name="kabupaten_mutasi" id="validationDefault01" value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">NEGARA</label>
                                        <input type="text" class="form-control" value="{{ $mutasi->negara_mutasi }}" name="negara_mutasi" id="validationDefault01" value="" required>
                                    </div>
                                    <hr>
                                    <div class="col-md-12">
                                        <label>AGAMA</label>
                                        <select class="form-control" name="agama_mutasi" required>
                                            <option value="{{ $mutasi->agama_mutasi }}" selected >{{ $mutasi->agama_mutasi }}</option>
                                            <option value="islam" <?= $mutasi->agama_mutasi === 'islam' ? 'selected' : 'disabled' ?>>islam</option>
                                            <option value="kristen" <?= $mutasi->agama_mutasi === 'kristen' ? 'selected' : 'disabled' ?>>Kristen</option>
                                            <option value="khatolik" <?= $mutasi->agama_mutasi === 'khatolik' ? 'selected' : 'disabled' ?>>Hindu</option>
                                            <option value="budha" <?= $mutasi->agama_mutasi === 'budha' ? 'selected' : 'disabled' ?>>Katolik</option>
                                            <option value="hindu" <?= $mutasi->agama_mutasi === 'hindu' ? 'selected' : 'disabled' ?>>Buddha</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label>STATUS</label>
                                        <select class="form-control" name="status_mutasi" required>
                                            <option value="{{ $mutasi->status_mutasi }}" disabled selected >Pilih </option>
                                            <option value="Sudah kawin"<?= $mutasi->status_mutasi === 'Sudah kawin' ? 'selected' : 'disabled' ?>>Sudah kawin</option>
                                            <option value="Belum kawin"<?= $mutasi->status_mutasi === 'Belum kawin' ? 'selected' : 'disabled' ?>>Belum kawin</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">PEKERJAAN</label>
                                        <input type="text" class="form-control" readonly value="{{ $mutasi->pekerjaan_mutasi }}" name="pekerjaan_mutasi" id="validationDefault01" value="" required>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="mt-4">
                                    <button class="btn btn-primary" name="edit" type="submit">SUBMIT</button>
                                    <button class="btn btn-danger" href="/rt/mutasi" type="reset">BATAL</button>
                                </div>
                            </div>
                            </form>
                        </div>
                            </div>
                        </div> <!-- end col -->
                    </div>

                </div>
                <!-- container-fluid -->
            </div>


@endsection