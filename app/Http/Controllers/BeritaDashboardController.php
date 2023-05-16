<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\berita;
use App\Models\BeritaDashboard;
use App\Http\Requests\StoreberitaRequest;
use App\Http\Requests\UpdateberitaRequest;

class BeritaDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.berita.index',[
            'beritas'=>berita::latest()->paginate(9)
        ]);

    }
    public function show(berita $berita,$id)
    {
       return view('dashboard.berita.show',[
        'berita'=>berita::find($id)
       ]);
    }
    public function create()
    {
        return view('dashboard.berita.create',[
            'kategoris'=>Kategori::all()
        ]);
    }
    public function store(Request $request)
    {
        //
        $validatedData=$request->validate([
            'title' =>'required|unique:beritas',
            'kategori_id' =>'required',
            'body'=>'required',


        ]);

        $validatedData['user_id']=Auth::user()->id;
        $validatedData['excerpt']=Str::limit($validatedData['body'],100,'...');
        berita::create($validatedData);
        return redirect('/berita-dashboard')->with('pesan','Data berhasil ditambah');
    }
    public function destroy(berita $berita)
    {
        berita::destroy($berita->id);
        return redirect('/berita-dashboard')->with('Pesan','Data berhasil dihapus');
    }
    public function edit(berita $berita)
    {
        return view('dashboard.berita.edit',[
            'kategoris'=>Kategori::all(),
            'berita'=>$berita
        ]);
    }
    public function update(Request $request, berita $berita)
    {
        $validatedData=$request->validate([
            // 'title' =>'required',
            'kategori_id' =>'required',
            'body'=>'required',
        ]);
        berita::WHERE('id',$berita->id)->update($validatedData);
        return redirect('/berita-dashboard')->with('pesan','Data berhasil diubah');
    }

}
