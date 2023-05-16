<?php

namespace App\Http\Controllers;

use App\Models\BeritaHome;
use Illuminate\Http\Request;
use App\Models\berita;
class BeritaHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('berita.indexhome',[
            'beritas'=>Berita::latest()->paginate(9)
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BeritaHome  $beritaHome
     * @return \Illuminate\Http\Response
     */
    public function show(BeritaHome $beritaHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BeritaHome  $beritaHome
     * @return \Illuminate\Http\Response
     */
    public function edit(BeritaHome $beritaHome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BeritaHome  $beritaHome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BeritaHome $beritaHome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BeritaHome  $beritaHome
     * @return \Illuminate\Http\Response
     */
    public function destroy(BeritaHome $beritaHome)
    {
        //
    }
}
