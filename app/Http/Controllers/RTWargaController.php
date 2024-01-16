<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\Mutasi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RTWargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $auth = auth('rt')->user();

        return view('rt.warga.index',[
            'warga' => Warga::where('id_rt', $auth->id_rt)->latest('id_warga', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $auth = auth('rt')->user();

        return view('rt.warga.create',[
            'rt' => $auth
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate([
            'nik_warga' => 'required',
            'nama_warga' => 'required',
            'tempat_lahir_warga' => 'required',
            'tanggal_lahir_warga' => 'required',
            'jk_warga' => 'required',
            'alamat_warga' => 'required',
            'rt_warga' => 'required',
            'rw_warga' => 'required',
            'desa_warga' => 'required',
            'kecamatan_warga' => 'required',
            'kabupaten_warga' => 'required',
            'agama_warga' => 'required',
            'status_warga' => 'required',
            'pekerjaan_warga' => 'required',
            'negara_warga' => 'required',
        ]);

        $validateData['id_rt'] = auth()->user()->id_rt;

        Warga::create($validateData);

        Alert::success('Sukses!','Berhasil Menambahkan Data!');

        return redirect('/rt/warga');
    }

    /**
     * Display the specified resource.
     */
    public function show(Warga $warga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Warga $warga)
    {

        return view('rt.warga.edit',[
            'warga' => $warga
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Warga $warga)
    {
        //
        $validateData = $request->validate([
            'nik_warga' => 'required',
            'nama_warga' => 'required',
            'tempat_lahir_warga' => 'required',
            'tanggal_lahir_warga' => 'required',
            'jk_warga' => 'required',
            'alamat_warga' => 'required',
            'rt_warga' => 'required',
            'rw_warga' => 'required',
            'desa_warga' => 'required',
            'kecamatan_warga' => 'required',
            'kabupaten_warga' => 'required',
            'agama_warga' => 'required',
            'status_warga' => 'required',
            'pekerjaan_warga' => 'required',
            'negara_warga' => 'required',
        ]);

        Warga::where('id_warga',$warga->id_warga)
        ->update($validateData);

        Alert::success('Sukses!','Berhasil Mengubah Data!');

        return redirect('/rt/warga');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Warga $warga)
    {
        //
        Warga::destroy($warga->id_warga);

        Alert::success('Sukses!','Berhasil Menghapus Data!');

        return redirect('/rt/warga');
    }

    public function mutasi($id){

        $warga = Warga::find($id);

        return view('rt.warga.mutasi',[
            'warga' => $warga
        ]);
    }

    public function store_mutasi(Request $request){

        $validateData = $request->validate([
            'nik_mutasi' => 'required',
            'nama_mutasi' => 'required',
            'tempat_lahir_mutasi' => 'required',
            'tanggal_lahir_mutasi' => 'required',
            'jk_mutasi' => 'required',
            'alamat_mutasi' => 'required',
            'rt_mutasi' => 'required',
            'rw_mutasi' => 'required',
            'desa_mutasi' => 'required',
            'kecamatan_mutasi' => 'required',
            'kabupaten_mutasi' => 'required',
            'agama_mutasi' => 'required',
            'status_mutasi' => 'required',
            'pekerjaan_mutasi' => 'required',
            'negara_mutasi' => 'required',
        ]);

        $validateData['id_rt'] = auth()->user()->id_rt;

        $mutasi = Mutasi::create($validateData);

        Alert::success('Sukses!','Berhasil Mutasi Data!');

        return redirect('/rt/warga');
    }
}
