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
                                        <h4 class="fs-16 mb-1">DATA WARGA</h4>
                                    </div>
                                </div><!-- end card header -->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table
                                                id="example"
                                                class="table table-bordered dt-responsive table-striped align-middle"
                                                style="width: 100%"
                                        >
                                            <thead>
                                            <tr>
                                                <th>NO.</th>
                                                <th>NIK</th>
                                                <th>NAMA</th>
                                                <th>TEMPAT LAHIR</th>
                                                <th>TANGGAL LAHIR</th>
                                                <th>JENIS KELAMIN</th>
                                                <th>ALAMAT</th>
                                                <th>RT</th>
                                                <th>RW</th>
                                                <th>DESA</th>
                                                <th>KECAMATAN</th>
                                                <th>KOTA/KABUPATEN</th>
                                                <th>AGAMA</th>
                                                <th>STATUS</th>
                                                <th>PEKERJAAN</th>
                                                <th>NEGARA</th>
                                               

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($warga as $data)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $data->nik_warga }}</td>
                                                    <td>{{ $data->nama_warga }}</td>
                                                    <td>{{ $data->tempat_lahir_warga }}</td>
                                                    <td>{{ $data->tanggal_lahir_warga }}</td>
                                                    <td>{{ $data->jk_warga }}</td>
                                                    <td>{{ $data->alamat_warga }}</td>
                                                    <td>{{ $data->rt_warga }}</td>
                                                    <td>{{ $data->rw_warga }}</td>
                                                    <td>{{ $data->desa_warga }}</td>
                                                    <td>{{ $data->kecamatan_warga }}</td>
                                                    <td>{{ $data->kabupaten_warga }}</td>
                                                    <td>{{ $data->agama_warga }}</td>
                                                    <td>{{ $data->status_warga }}</td>
                                                    <td>{{ $data->pekerjaan_warga }}</td>
                                                    <td>{{ $data->negara_warga }}</td>

                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
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