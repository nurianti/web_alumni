<?php

namespace App\Http\Controllers;

use App\Models\Tracerstudy;
use App\Models\Alumni;
use Illuminate\Http\Request;

class AdminTracerstudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Tracerstudy::all();
        return view('admin.tracerstudy.index', [
              'tracerstudy' => Tracerstudy::all(),
              'alumni' => Alumni::all()
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tracerstudy.create', [
            'alumni' => Alumni::all()
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
            'alumni_id' => 'required',
            'kegiatan_stlh_lulus' => 'required',
            'nama_perusahaan' => 'required',
            'jabatan' => 'required',
            'alamat_kantor' => 'required',
            'tahun_bekerja' => 'required',
            'nama_pt' => 'required',
            'jenjang' => 'required',
            'fakultas' => 'required',
            'prodi' => 'required',
            'tahun_masuk' => 'required',
            'tahun_lulus' => 'required',
            'nama_usaha' => 'required',
            'bidang_usaha' => 'required',
            'alamat_usaha' => 'required',
            'tahun_usaha' => 'required',
            'relevansi' => 'required',
            'saran_masukan' => 'required'
        ]);

        Tracerstudy::create($validatedData);
        return redirect('/admin/tracerstudy')->with('success', 'Data telah berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tracerstudy  $tracerstudy
     * @return \Illuminate\Http\Response
     */
    public function show(Tracerstudy $tracerstudy)
    {
        //return $tracerstudy;
        return view('admin.tracerstudy.detail', [
            'tracerstudy' => $tracerstudy
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tracerstudy  $tracerstudy
     * @return \Illuminate\Http\Response
     */
    public function edit(Tracerstudy $tracerstudy)
    {
        return view('admin.tracerstudy.edit', [
            'tracerstudy' => $tracerstudy,
            'alumni' => Alumni::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tracerstudy  $tracerstudy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tracerstudy $tracerstudy)
    {
        $validatedData = $request->validate([
            'alumni_id' => 'required',
            'kegiatan_stlh_lulus' => 'required',
            'nama_perusahaan' => 'required',
            'jabatan' => 'required',
            'alamat_kantor' => 'required',
            'tahun_bekerja' => 'required',
            'nama_pt' => 'required',
            'jenjang' => 'required',
            'fakultas' => 'required',
            'prodi' => 'required',
            'tahun_masuk' => 'required',
            'tahun_lulus' => 'required',
            'nama_usaha' => 'required',
            'bidang_usaha' => 'required',
            'alamat_usaha' => 'required',
            'tahun_usaha' => 'required',
            'relevansi' => 'required',
            'saran_masukan' => 'required'
        ]);

        Tracerstudy::where('id', $tracerstudy->id)->update($validatedData);
        return redirect('/admin/tracerstudy')->with('succes', 'Data telah berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tracerstudy  $tracerstudy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tracerstudy $tracerstudy)
    {
       Tracerstudy::destroy($tracerstudy->id);
       return redirect('/admin/tracerstudy')->with('success', 'Data telah berhasil dihapus');
    }
}
