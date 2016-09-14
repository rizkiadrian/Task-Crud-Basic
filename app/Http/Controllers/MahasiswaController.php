<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Http\Requests\SiteRequest;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('disp.index', compact('mahasiswas'));
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('include.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SiteRequest $request)
    {
        $mahasiswas = new Mahasiswa();
        $mahasiswas->nim = $request->nim;
        $mahasiswas->nama = $request->nama;
        $mahasiswas->kelas = $request->kelas;
		$mahasiswas->email = $request->email;
        $mahasiswas->save();
		return redirect()->route('home.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswas = Mahasiswa::findOrFail($id);
		return view('include.show', compact('mahasiswas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswas = Mahasiswa::findOrFail($id);
        return view('include.edit', compact('mahasiswas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SiteRequest $request, $id)
    {
        $mahasiswas = Mahasiswa::findOrFail($id);
        $mahasiswas->nim = $request->nim;
        $mahasiswas->nama = $request->nama;
        $mahasiswas->kelas = $request->kelas;
		  $mahasiswas->email = $request->email;
        $mahasiswas->save();
        return redirect()->route('home.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $mahasiswas = Mahasiswa::findOrFail($id);
        $mahasiswas->delete();
        return redirect()->route('home.index');
    }
}
