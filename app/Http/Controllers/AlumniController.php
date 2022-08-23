<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Prodi;
use App\Models\Fakultas;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumni = Alumni::join('users', 'users.id', '=', 'alumnis.id_user')
                ->where('user->auth->id_user')
                ->first(['alumnis.*', 'users.*']);
        return view('admin.alumni', [
            'alumni' => $alumni,
            'prodis' => Prodi::all(),
            'fakultas' => Fakultas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profile', [
            'prodis' => Prodi::all(),
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
            'id_user' => 'required',
            'nim' => 'required',
            'nama' => 'required',
            'gender' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'fakultas_id' => 'required',
            'prodi_id' => 'required',
            'jenjang' => 'required',
            'tahun_masuk' => 'required',
            'tahun_lulus' => 'required',
            'ipk' => 'required',
            'organisasi' => 'required',
            'foto' => 'image|file|max:1024'
        ]);

        if($request->file('foto')){
            $validatedData['foto'] = $request->file('foto')->store('foto-alumni');
        }

        Alumni::create($validatedData);
        //return redirect('/admin/alumni')->with('success', 'Data telah berhasil ditambahkan');
        return redirect('/alumni')->with('success', 'Data telah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function show(Alumni $alumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumni $alumni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumni $alumni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumni $alumni)
    {
        //
    }
}
