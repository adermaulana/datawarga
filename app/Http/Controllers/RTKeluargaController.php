<?php

namespace App\Http\Controllers;

use App\Models\Keluarga;
use App\Models\Warga;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RTKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $auth = auth('rt')->user();

        return view('rt.keluarga.index',[
            'keluarga' => Keluarga::where('id_rt', $auth->id_rt)->latest('id_warga', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $auth = auth('rt')->user();

        return view('rt.keluarga.create',[
            'rt' => $auth,
            'warga' => Warga::where('id_rt', $auth->id_rt)->orderBy('id_warga','desc')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate([
            'nomor_kartu_keluarga' => 'required',
            'id_warga' => 'required',
            'rt_keluarga' => 'required',
            'rw_keluarga' => 'required',
            'desa_keluarga' => 'required',
            'kecamatan_keluarga' => 'required',
            'kota_keluarga' => 'required',
            'provinsi_keluarga' => 'required',
            'negara_keluarga' => 'required',
            'kode_keluarga' => 'required'
        ]);

        $validateData['id_rt'] = auth()->user()->id_rt;

        Keluarga::create($validateData);

        Alert::success('Sukses!','Berhasil Menambahkan Data!');

        return redirect('/rt/keluarga');
    }

    /**
     * Display the specified resource.
     */
    public function show(Keluarga $keluarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Keluarga $keluarga)
    {
        //
        $auth = auth('rt')->user();

        return view('rt.keluarga.edit',[
            'warga' => Warga::where('id_rt', $auth->id_rt)->orderBy('id_warga','desc')->get(),
            'keluarga' => $keluarga
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Keluarga $keluarga)
    {
        //
        $validateData = $request->validate([
            'nomor_kartu_keluarga' => 'required',
            'id_warga' => 'required',
            'rt_keluarga' => 'required',
            'rw_keluarga' => 'required',
            'desa_keluarga' => 'required',
            'kecamatan_keluarga' => 'required',
            'kota_keluarga' => 'required',
            'provinsi_keluarga' => 'required',
            'negara_keluarga' => 'required',
            'kode_keluarga' => 'required'
        ]);

        Keluarga::where('id_keluarga',$keluarga->id_keluarga)
        ->update($validateData);

        Alert::success('Sukses!','Berhasil Mengubah Data!');

        return redirect('/rt/keluarga');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Keluarga $keluarga)
    {
        //
        Keluarga::destroy($keluarga->id_keluarga);

        Alert::success('Sukses!','Berhasil Menghapus Data!');

        return redirect('/rt/keluarga');
    }
}
