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
                                                <h4 class="fs-16 mb-1">DATA MUTASI</h4>
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
                                        <h5 class="card-title mb-0 flex-grow-1">DATA MUTASI</h5>
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
                                                                <th>AKSI</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($mutasi as $data)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $data->nik_mutasi }}</td>
                                                                <td>{{ $data->nama_mutasi }}</td>
                                                                <td>{{ $data->tempat_lahir_mutasi }}</td>
                                                                <td>{{ $data->tanggal_lahir_mutasi }}</td>
                                                                <td>{{ $data->jk_mutasi }}</td>
                                                                <td>{{ $data->alamat_mutasi }}</td>
                                                                <td>{{ $data->rt_mutasi }}</td>
                                                                <td>{{ $data->rw_mutasi }}</td>
                                                                <td>{{ $data->desa_mutasi }}</td>
                                                                <td>{{ $data->kecamatan_mutasi }}</td>
                                                                <td>{{ $data->kabupaten_mutasi }}</td>
                                                                <td>{{ $data->agama_mutasi }}</td>
                                                                <td>{{ $data->status_mutasi }}</td>
                                                                <td>{{ $data->pekerjaan_mutasi }}</td>
                                                                <td>{{ $data->negara_mutasi }}</td>
                                                                <td>
                                                                 <div class="d-flex flex-wrap gap-2">
                                                                 <a type="button" href="/rt/mutasi/{{ $data->id_mutasi }}/edit"  class="btn btn-warning waves-effect waves-light">Edit</a>
                                                                 <form action="/rt/mutasi/{{ $data->id_mutasi }}" method="post">
                                                                    @method('delete')
                                                                    @csrf
                                                                     <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"  class="btn btn-danger waves-effect waves-light">Hapus</button>
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