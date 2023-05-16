<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;
class JurusanDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.jurusan.index',[
            'jurusans'=>Jurusan::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.jurusan.create',[
            'jurusans'=>Jurusan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Jurusan $jurusan)
    {
        //
        $validatedData=$request->validate([
            'nama' =>'required|unique:jurusans',
        ]);
        Jurusan::create($validatedData);
        return redirect('/jurusan-dashboard')->with('pesan','Data berhasil ditambah');
        // Jurusan::WHERE('id',$jurusan->id)->update($validatedData);
        // return redirect('/jurusan-dashboard')->with('pesan','Data berhasil diubah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Jurusan $jurusan)
    {
        return view('dashboard.jurusan.edit',[
            'jurusan' => $jurusan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jurusan $jurusan)
    {
        $validatedData=$request->validate([
            'nama'=>'required',
        ]);
        Jurusan::WHERE('id',$jurusan->id)->update($validatedData);
        return redirect('/jurusan-dashboard')->with('pesan','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jurusan $jurusan)
    {
        Jurusan::destroy($jurusan->id);
        return redirect('/jurusan-dashboard')->with('Pesan','Data berhasil dihapus');
    }

}

