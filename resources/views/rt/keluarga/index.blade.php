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
                                        <h4 class="fs-16 mb-1">DATA KARTU KELUARGA</h4>
                                    </div>
                                </div><!-- end card header -->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <h5 class="card-title mb-0 flex-grow-1">DATA KELUARGA</h5>
                                        <div>
                                            <a type="button" href="/rt/keluarga/create"
                                                    class="btn btn-primary">
                                                Tambah
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table
                                                    id="example"
                                                    class="table table-bordered dt-responsive table-striped align-middle"
                                                    style="width: 100%"
                                            >
                                                <thead>
                                                <tr>
                                                    <th>NO.</th>
                                                    <th>NOMOR KARTU KELUARGA</th>
                                                    <th>KEPALA KELUARGA</th>
                                                    <th>NIK KEPALA KELUARGA</th>
                                                    <th>RT</th>
                                                    <th>RW</th>
                                                    <th>DESA</th>
                                                    <th>KECAMATAN</th>
                                                    <th>KOTA/KABUPATEN</th>
                                                    <th>PROVINSI</th>
                                                    <th>NEGARA</th>
                                                    <th>KODE POS</th>
                                                    <th>AKSI</th>
                                                </tr>
                                                </thead>


                                                <tbody>
                                                    @foreach($keluarga as $data)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $data->nomor_kartu_keluarga }}</td>
                                                        <td>{{ $data->warga->nama_warga }}</td>
                                                        <td>{{ $data->warga->nik_warga }}</td>
                                                        <td>{{ $data->rt_keluarga }}</td>
                                                        <td>{{ $data->rw_keluarga }}</td>
                                                        <td>{{ $data->desa_keluarga }}</td>
                                                        <td>{{ $data->kecamatan_keluarga }}</td>
                                                        <td>{{ $data->kota_keluarga }}</td>
                                                        <td>{{ $data->provinsi_keluarga }}</td>
                                                        <td>{{ $data->negara_keluarga }}</td>
                                                        <td>{{ $data->kode_keluarga }}</td>
                                                        <td>
                                                            <div class="d-flex flex-wrap gap-2">
                                                                <a type="button"
                                                                        href="/rt/keluarga/{{ $data->id_keluarga }}/edit"
                                                                        class="btn btn-warning waves-effect waves-light">
                                                                    Edit
                                                                </a>
                                                                <form action="/rt/keluarga/{{ $data->id_keluarga }}" method="post">
                                                                    @method('delete')    
                                                                    @csrf
                                                                    <button type="submit"
                                                                            class="btn btn-danger waves-effect waves-light"
                                                                            onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')">
                                                                        Hapus
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row-->

                    </div> <!-- end .h-100-->

                </div> <!-- end col -->
            </div>

        </div>
        <!-- container-fluid -->
    </div>

@endsection