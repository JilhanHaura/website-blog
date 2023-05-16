<?php

namespace App\Http\Controllers;
use App\Models\Kontak;
use App\Models\KontakDashboard;
use App\Http\Requests\StoreKontakDashboardRequest;
use App\Http\Requests\UpdateKontakDashboardRequest;

class KontakDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kontak.index',[
            'kontaks'=>Kontak::latest()->paginate(9)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKontakDashboardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKontakDashboardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KontakDashboard  $kontakDashboard
     * @return \Illuminate\Http\Response
     */
    public function show(KontakDashboard $kontakDashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KontakDashboard  $kontakDashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(KontakDashboard $kontakDashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKontakDashboardRequest  $request
     * @param  \App\Models\KontakDashboard  $kontakDashboard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKontakDashboardRequest $request, KontakDashboard $kontakDashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KontakDashboard  $kontakDashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kontak $kontak)
    {
        Kontak::destroy($kontak->id);
        return redirect('/kontak-dashboard')->with('Pesan','Data berhasil dihapus');
    }
}
