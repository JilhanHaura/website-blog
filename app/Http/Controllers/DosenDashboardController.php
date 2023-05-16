<?php

namespace App\Http\Controllers;
use App\Models\Dosen;
use App\Models\DosenDashboard;
use App\Models\Jurusan;
use App\Http\Requests\StoreDosenDashboardRequest;
use App\Http\Requests\UpdateDosenDashboardRequest;
use Illuminate\Http\Request;

class DosenDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.dosen.index',[
            'dosens'=>Dosen::latest()->paginate(12)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.dosen.create',[
            'jurusans'=>Jurusan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDosenDashboardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'nip' =>'required|unique:dosens|size:10',
            'nama' =>'required',
            'jenis_kelamin'=>'required|in:P,L',
            'status'=>'required',
            'jurusan_id'=>'required',
            'alamat'=>'required'
        ]);
        // dd($validatedData);
        Dosen::create($validatedData);
        return redirect('/dosen-dashboard')->with('pesan','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DosenDashboard  $dosenDashboard
     * @return \Illuminate\Http\Response
     */
    public function show(DosenDashboard $dosenDashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DosenDashboard  $dosenDashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dosen $dosen)
    {
        return view('dashboard.dosen.edit',[
            'dosens' => $dosen,
            'jurusans' => Jurusan::all(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDosenDashboardRequest  $request
     * @param  \App\Models\DosenDashboard  $dosenDashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dosen $dosen)
    {
        $validatedData=$request->validate([
            'nip' =>'required',
            'nama' =>'required',
            'jenis_kelamin'=>'required|in:P,L',
            'jurusan_id'=>'required',
            'status'=>'required',
            'alamat'=>'required'
        ]);
        Dosen::WHERE('id',$dosen->id)->update($validatedData);
        return redirect('/dosen-dashboard')->with('pesan','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DosenDashboard  $dosenDashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dosen $dosen)
    {
        Dosen::destroy($dosen->id);
        return redirect('/dosen-dashboard')->with('Pesan','Data berhasil dihapus');
    }
}
