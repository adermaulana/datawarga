<?php

namespace App\Http\Controllers;

use App\Models\Mutasi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RTMutasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $auth = auth('rt')->user();
        
        return view('rt.mutasi.index',[
            'mutasi' => Mutasi::where('id_rt', $auth->id_rt)->latest('id_mutasi', 'desc')->get()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mutasi $mutasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mutasi $mutasi)
    {
        //
        $auth = auth('rt')->user();

        return view('rt.mutasi.edit',[
            'mutasi' => $mutasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mutasi $mutasi)
    {
        //
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
        
        Mutasi::where('id_mutasi',$mutasi->id_mutasi)
        ->update($validateData);

        Alert::success('Sukses!','Berhasil Mengubah Data!');

        return redirect('/rt/mutasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mutasi $mutasi)
    {
        //
        Mutasi::destroy($mutasi->id_mutasi);

        Alert::success('Sukses!','Berhasil Menghapus Data!');

        return redirect('/rt/mutasi');
    }
}
