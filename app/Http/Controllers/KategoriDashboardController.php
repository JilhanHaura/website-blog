<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
class KategoriDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.kategori.index',[
            'kategoris'=>Kategori::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kategori.create',[
            'kategoris'=>Kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Kategori $kategori)
    {
        //
        $validatedData=$request->validate([
            'nama' =>'required',
        ]);
        Kategori::create($validatedData);
        return redirect('/kategori-dashboard')->with('pesan','Data berhasil ditambah');

        // Jurusan::WHERE('id',$jurusan->id)->update($validatedData);
        // return redirect('/jurusan-dashboard')->with('pesan','Data berhasil diubah');
    }


      /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        return view('dashboard.kategori.edit',[
            'kategori' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        $validatedData=$request->validate([
            'nama'=>'required',
        ]);
        Kategori::WHERE('id',$kategori->id)->update($validatedData);
        return redirect('/kategori-dashboard')->with('pesan','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
        Kategori::destroy($kategori->id);
        return redirect('/kategori-dashboard')->with('Pesan','Data berhasil dihapus');
    }
}
