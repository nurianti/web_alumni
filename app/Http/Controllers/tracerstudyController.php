<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tracerstudy;


class tracerstudyController extends Controller
{
    public function index()
    {
    	$tracerstudy = Tracerstudy::all();
    	return view('tracerstudy', ['tracerstudy' => $tracerstudy]);
    }

    public function tambah()
    {
    	return view('tracerstudy_tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'alumni_id' => 'required',
            'kegiatan_stlh_lulus' => 'required',
            'nama_pt' => 'required',
            'nama_tmpt_kerja' => 'required',
            'jabatan' => 'required',
            'alamat_bekerja' => 'required',
            'saran_masukan' => 'required'
    	]);
 
        Tracerstudy::create([
    		'alumni_id' => $request->alumni_id,
            'kegiatan_stlh_lulus' => $request->kegiatan_stlh_lulus,
            'nama_pt' => $request->nama_pt,
            'nama_tmpt_kerja' => $request->nama_tmpt_kerja,
            'jabatan' => $request->jabatan,
            'alamat_bekerja' => $request->alamat_bekerja,
            'saran_masukan' => $request->saran_masukan
    	]);
 
    	return redirect('/tracerstudy');
    }
}
