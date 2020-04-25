<?php

namespace App\Http\Controllers;

use App\Ujian;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ujian=Ujian::all();
        return view('ujian.index',compact('ujian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('ujian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_mk'=>'required',
            'dosen'=>'required',
            'jumlah_soal'=>'required',
            'keterangan'=>'required'
            ]);

        Ujian::create($request->all());
        return redirect ('/ujian')->with('status','Data Mata Kuliah Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function show(Ujian $ujian)
    {
        return view('ujian.show', compact('ujian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function edit(Ujian $ujian)
    {
        return view('ujian.edit', compact('ujian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ujian $ujian)
    {
        $request->validate([
            'nama_mk'=>'required',
            'dosen'=>'required',
            'jumlah_soal'=>'required',
            'keterangan'=>'required'
            ]);

        Ujian::where('id',$ujian->id)
            ->update([
                'nama_mk'=>$request->nama_mk,
                'dosen'=>$request->dosen,
                'jumlah_soal'=>$request->jumlah_soal,
                'keterangan'=>$request->keterangan
            ]);
        return redirect ('/ujian')->with('status','Data Mata Kuliah Berhasil Diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ujian $ujian)
    {
        ujian::destroy($ujian->id);
        return redirect ('/ujian')->with('status','Data Mata Kuliah Berhasil Dihapus!');

    }
}
