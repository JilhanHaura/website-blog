<?php

namespace App\Http\Controllers;
use App\Models\Prestasi;
use App\Models\PrestasiDashboard;
use App\Http\Requests\StorePrestasiDashboardRequest;
use App\Http\Requests\UpdatePrestasiDashboardRequest;
use Illuminate\Http\Request;

class PrestasiDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.prestasi.index',[
            'prestasis'=>Prestasi::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.prestasi.create',[
            'prestasis'=>Prestasi::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePrestasiDashboardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Prestasi $prestasi)
    {
        $validatedData=$request->validate([
            'nama' =>'required|unique:prestasis',
        ]);
        Prestasi::create($validatedData);
        return redirect('/prestasi-dashboard')->with('pesan','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PrestasiDashboard  $prestasiDashboard
     * @return \Illuminate\Http\Response
     */
    public function show(PrestasiDashboard $prestasiDashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrestasiDashboard  $prestasiDashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestasi $prestasi)
    {
        // dd($prestasi);
        return view('dashboard.prestasi.edit',[
            'prestasi' => $prestasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePrestasiDashboardRequest  $request
     * @param  \App\Models\PrestasiDashboard  $prestasiDashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestasi $prestasi)
    {
        $validatedData=$request->validate([
            'nama'=>'required',
        ]);
        Prestasi::WHERE('id',$prestasi->id)->update($validatedData);
        return redirect('/prestasi-dashboard')->with('pesan','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PrestasiDashboard  $prestasiDashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestasi $prestasi)
    {
        Prestasi::destroy($prestasi->id);
        return redirect('/prestasi-dashboard')->with('Pesan','Data berhasil dihapus');
    }
}
