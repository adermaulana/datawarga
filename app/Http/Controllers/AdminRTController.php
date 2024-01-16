<?php

namespace App\Http\Controllers;

use App\Models\RT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminRTController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('admin.rt.index',[
            'rt' => RT::orderBy('id_rt','desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.rt.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate([
            'nama_rt' => 'required',
            'username' => 'required',
            'password' => 'required',
            'agama_rt' => 'required',
            'keterangan_rt' => 'required',
            'desa_rt' => 'required',
            'kecamatan_rt' => 'required',
            'kota_rt' => 'required',
            'provinsi_rt' => 'required',
            'negara_rt' => 'required',
            'rt_rt' => 'required',
            'rw_rt' => 'required'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        RT::create($validateData);

        Alert::success('Sukses!','Berhasil Menambahkan Data!');

        return redirect('/admin/rt');

    }

    /**
     * Display the specified resource.
     */
    public function show(RT $rT)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $rt = RT::find($id);

        return view('admin.rt.edit',[
            'rt' => $rt
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $rt = RT::find($id);
        //
        $validateData = $request->validate([
            'nama_rt' => 'required',
            'username' => 'required',
            'password' => 'required',
            'agama_rt' => 'required',
            'keterangan_rt' => 'required',
            'desa_rt' => 'required',
            'kecamatan_rt' => 'required',
            'kota_rt' => 'required',
            'provinsi_rt' => 'required',
            'negara_rt' => 'required',
            'rt_rt' => 'required',
            'rw_rt' => 'required'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        RT::where('id_rt',$rt->id_rt)
        ->update($validateData);

        Alert::success('Sukses!','Berhasil Mengubah Data!');

        return redirect('/admin/rt');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $rt = RT::find($id);

        RT::destroy($rt->id_rt);

        Alert::success('Sukses!','Berhasil Menghapus Data!');

        return redirect('/admin/rt');

    }
}
