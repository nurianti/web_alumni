<?php

namespace App\Http\Controllers;

use App\Models\Kuesioner;
use App\Models\Alumni;
use Illuminate\Http\Request;

class KuesionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kuesioner.index', [
            'alumni' => Alumni::all(),
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
        return view('admin.kuesioner.create', [
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
            'pertanyaan_satu' => 'required',
            'pertanyaan_dua' => 'required',
            'pertanyaan_tiga' => 'required',
            'pertanyaan_empat' => 'required',
            'integritas' => 'required',
            'keahlian' => 'required',
            'bahasa' => 'required',
            'teknologi' => 'required',
            'komunikasi' => 'required',
            'kerjasama' => 'required',
            'pengembangan_diri' => 'required',
            'pertanyaan_lima' => 'required',
            'pertanyaan_enam' => 'required',
            'pertanyaan_tujuh' => 'required',
            'pertanyaan_delapan' => 'required',
            'pertanyaan_sembilan' => 'required',
            'pertanyaan_sepuluh' => 'required'
        ]);

        Kuesioner::create($validatedData);
        return redirect('/admin/kuesioner')->with('success', 'Data telah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kuesioner  $kuesioner
     * @return \Illuminate\Http\Response
     */
    public function show(Kuesioner $kuesioner)
    {
        return view('admin.kuesioner.detail', [
            'kuesioner' => $kuesioner
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kuesioner  $kuesioner
     * @return \Illuminate\Http\Response
     */
    public function edit(Kuesioner $kuesioner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kuesioner  $kuesioner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kuesioner $kuesioner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kuesioner  $kuesioner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kuesioner $kuesioner)
    {
        //
    }
}
