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
                                                <h4 class="fs-16 mb-1">MEMBUAT AKUN RT</h4>
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
                                        <h5 class="card-title mb-0 flex-grow-1">Add Rows</h5>
                                        <div>
                                        <a href="/admin/rt/create" class="btn btn-primary">
                                            Add New Row
                                        </a>
                                        </div>
                                    </div>
                                        <div class="card-body">
                                            <table
                                                        id="example"
                                                        class="table table-bordered dt-responsive table-striped align-middle"
                                                        style="width: 100%"
                                                        >
                                                        <thead>
                                                            <tr>
                                                                <th>NO.</th>
                                                                <th>NAMA</th>
                                                                <th>USERNAME</th>
                                                                <th>PASSWORD</th>
                                                                <th>AGAMA</th>
                                                                <th>KETERANGAN</th>
                                                                <th>DESA</th>
                                                                <th>KECAMATAN</th>
                                                                <th>KOTA/KABUPATEN</th>
                                                                <th>PROVINSI</th>
                                                                <th>NEGARA</th>
                                                                <th>RT</th>
                                                                <th>RW</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($rt as $data)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td> {{ $data->nama_rt }} </td>
                                                                <td>{{ $data->username }}</td>
                                                                <td>{{ $data->password }}</td>
                                                                <td>{{ $data->agama_rt }}</td>
                                                                <td>{{ $data->keterangan_rt }}</td>
                                                                <td>{{ $data->desa_rt }}</td>
                                                                <td>{{ $data->kecamatan_rt }}</td>
                                                                <td>{{ $data->kota_rt }}</td>
                                                                <td>{{ $data->provinsi_rt }}</td>
                                                                <td>{{ $data->negara_rt }}</td>
                                                                <td>{{ $data->rt_rt }}</td>
                                                                <td>{{ $data->rw_rt }}</td>
                                                                <td>
                                                                    <div class="d-flex flex-wrap gap-2">
                                                                        <a type="button" href="/admin/rt/{{ $data->id_rt }}/edit" class="btn btn-warning waves-effect waves-light">Edit</a>
                                                                        <form action="/admin/rt/{{ $data->id_rt }}" method="post">
                                                                        @method('delete')
                                                                        @csrf
                                                                            <button type="submit" href="" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')" class="btn btn-danger waves-effect waves-light">Hapus</button>
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
                                                    <!-- end row-->
                            </div> <!-- end .h-100-->

                        </div> <!-- end col -->
                    </div>

                </div>
            </div>



@endsection