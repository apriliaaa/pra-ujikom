<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pinjam = Pinjam::all();
        return view('pinjam.index', compact('pinjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pinjam.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'no_pinjam' => 'required|unique:tblpinjam',
            'tanggal' => 'required',
            'no_anggota' => 'required', 
            'jmlpinjam' => 'required',
            'kodeksr' => 'required',            
        ]);

        $pinjam = Pinjam::create([
            'no_pinjam' => $request->no_pinjam,
            'tanggal' => $request->tanggal,
            'no_anggota' => $request->no_anggota,
            'jmlpinjam' => $request->jmlpinjam,
            'kodeksr' => $request->kodeksr,
        ]);

        if($pinjam){
            return redirect()->route('data-pinjam')->with('success', 'Data berhasil disimpan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($no_pinjam)
    {
        $pinjam = Pinjam::findorfail($no_pinjam);
        return view('pinjam.edit', compact('pinjam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $no_pinjam)
    {
        $pinjam = Pinjam::findorfail($no_pinjam);
        $pinjam->update($request->all());
        return redirect()->route('data-pinjam')->with('success', 'Data berhasil diupdate!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($no_pinjam)
    {
        Pinjam::find($no_pinjam)->delete();
        return back()->with('success', 'Data berhasil dihapus!');
    }
}
