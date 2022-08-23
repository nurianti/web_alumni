<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Fakultas;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.prodi.createprodi', [
            'fakultas' => Fakultas::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_prodi' => 'required',
            'fakultas_id' =>'required',
            'nama_prodi' => 'required',
            'jenjang' => 'required'
        ]);

        Prodi::create($validatedData);
        return redirect('/admin/fakultas')->with('success', 'Data telah berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function edit(Prodi $prodi)
    {
        return view('admin.prodi.editprodi', [
            'fakultas' => Fakultas::all(),
            'prodi' => Prodi::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prodi $prodi)
    {
        $validatedData = $request->validate([
            'kode_prodi' => 'required',
            'fakultas_id' =>'required',
            'nama_prodi' => 'required',
            'jenjang' => 'required'
        ]);

        Prodi::where('id', $prodi->id)->update($validatedData);
        return $prodi;
        return redirect('/admin/fakultas')->with('succes', 'Data telah berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prodi $prodi)
    {
        //
    }
}
