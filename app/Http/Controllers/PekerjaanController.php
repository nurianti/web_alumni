<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use App\Models\Alumni;
use App\Models\Kuesioner;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pekerjaan.index', [
            'alumni' => Alumni::all(),
            'pekerjaan' => Pekerjaan::all(),
            'kuesioner' => Kuesioner::all()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pekerjaan.create', [
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
            'memiliki_pekerjaan' => 'required',
            'nama_instansi' => 'required',
            'bulan_bekerja' => 'required',
            'tahun_bekerja' => 'required',
            'jenis_instansi' => 'required',
            'info_pekerjaan' => 'required',
            'gaji' => 'required',
            'nama_perusahaan_sebelumnya' => 'required',
            'mulai_kerja' => 'required',
            'alasan_keluar' => 'required'
        ]);

        Pekerjaan::create($validatedData);
        return redirect('/admin/pekerjaan')->with('success', 'Data telah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function show(Pekerjaan $pekerjaan)
    {
        return view('admin.pekerjaan.detail', [
            'pekerjaan' => $pekerjaan,
            'alumni' => Alumni::all(),
            'kuesioner' => Kuesioner::all()
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pekerjaan $pekerjaan)
    {
        return view('admin.pekerjaan.edit', [
            'pekerjaan' => $pekerjaan,
            'alumni' => Alumni::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pekerjaan $pekerjaan)
    {
        $validatedData = $request->validate([
            'alumni_id' => 'required',
            'memiliki_pekerjaan' => 'required',
            'nama_instansi' => 'required',
            'bulan_bekerja' => 'required',
            'tahun_bekerja' => 'required',
            'jenis_instansi' => 'required',
            'info_pekerjaan' => 'required',
            'gaji' => 'required',
            'nama_perusahaan_sebelumnya' => 'required',
            'mulai_kerja' => 'required',
            'alasan_keluar' => 'required'
        ]);

        Pekerjaan::where('id', $pekerjaan->id)->update($validatedData);
        return redirect('/admin/pekerjaan')->with('succes', 'Data telah berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pekerjaan $pekerjaan)
    {
        Pekerjaan::destroy($pekerjaan->id);
       return redirect('/admin/pekerjaan')->with('success', 'Data telah berhasil dihapus');
    }
}
