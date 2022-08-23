<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Prodi;
use App\Models\Fakultas;
use App\Models\User;
use Illuminate\Http\Request;

class AdminAlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.alumni.index', [
            'alumni' => Alumni::paginate(5),
            'prodis' => Prodi::all(),
            'fakultas' => Fakultas::all(),
            'user' => User::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alumni.create', [
            'prodis' => Prodi::all(),
            'fakultas' => Fakultas::all(),
            'user' => User::all()
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
        return redirect('/admin/alumni')->with('success', 'Data telah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function show(Alumni $alumni)
    {
        return $alumni;
        // return view('admin.alumni.detail', [
        //     'alumni' => $alumni
        //  ]);
        // return view('admin.alumni.detail', [
        //     'nim' => $nim
        //     //'alumni' => Alumni::all(),
        //     //'prodis' => Prodi::all(),
        //     //'fakultas' => Fakultas::all()
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumni $alumni)
    {
        return view('admin.alumni.edit', [
            'alumni' => $alumni,
            'prodis' => Prodi::all(),
            'fakultas' => Fakultas::all()
        ]);
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
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        Alumni::where('id', $alumni->id)->update($validatedData);
        return redirect('/admin/alumni')->with('succes', 'Data telah berhasil Diupdate');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumni $alumni)
    {
        if($alumni->foto){
            Storage::delete($alumni->foto);
        }
        Alumni::destroy($alumni->id);
        return redirect('/admin/alumni')->with('success', 'Data telah berhasil dihapus');
    }
}
