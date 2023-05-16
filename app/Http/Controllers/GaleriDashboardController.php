<?php

namespace App\Http\Controllers;
use App\Models\Galeri;
use App\Models\GaleriDashboard;
use App\Http\Requests\StoreGaleriDashboardRequest;
use App\Http\Requests\UpdateGaleriDashboardRequest;
use Illuminate\Http\Request;
class GaleriDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.galeri.index',[
            'galeris'=>Galeri::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.galeri.create',[
            'galeris'=>Galeri::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGaleriDashboardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGaleriDashboardRequest $request)
    {
        $validatedData=$request->validate([
            'title' =>'required|unique:galeris',
        ]);
        Galeri::create($validatedData);
        return redirect('/galeri-dashboard')->with('pesan','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GaleriDashboard  $galeriDashboard
     * @return \Illuminate\Http\Response
     */
    public function show(GaleriDashboard $galeriDashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GaleriDashboard  $galeriDashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeri $galeri)
    {
        return view('dashboard.galeri.edit',[
            'galeri' => $galeri
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGaleriDashboardRequest  $request
     * @param  \App\Models\GaleriDashboard  $galeriDashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeri $galeri)
    {
        $validatedData=$request->validate([
            'title'=>'required',
        ]);
        Galeri::WHERE('id',$galeri->id)->update($validatedData);
        return redirect('/galeri-dashboard')->with('pesan','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GaleriDashboard  $galeriDashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeri $galeri)
    {
        Galeri::destroy($galeri->id);
        return redirect('/galeri-dashboard')->with('Pesan','Data berhasil dihapus');
    }
}
