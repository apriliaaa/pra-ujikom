<?php

namespace App\Http\Controllers;

use App\Models\Simpan;
use Illuminate\Http\Request;

class SimpanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $simpan = Simpan::all();
        return view('simpan.index', compact('simpan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('simpan.create');
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
            'no_simpan' => 'required|unique:tblsimpan',
            'tanggal' => 'required',
            'no_anggota' => 'required', 
            'jmlsimpan' => 'required',
            'kodeksr' => 'required',            
        ]);

        $simpan = Simpan::create([
            'no_simpan' => $request->no_simpan,
            'tanggal' => $request->tanggal,
            'no_anggota' => $request->no_anggota,
            'jmlsimpan' => $request->jmlsimpan,
            'kodeksr' => $request->kodeksr,
        ]);

        if($simpan){
            return redirect()->route('data-simpan')->with('success', 'Data berhasil disimpan!');
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
    public function edit($no_simpan)
    {
        $simpan = Simpan::findorfail($no_simpan);
        return view('simpan.edit', compact('simpan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $no_simpan)
    {
        $simpan = Simpan::findorfail($no_simpan);
        $simpan->update($request->all());
        return redirect()->route('data-simpan')->with('success', 'Data berhasil diupdate!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($no_simpan)
    {
        Simpan::find($no_simpan)->delete();
        return back()->with('success', 'Data berhasil dihapus!');
    }
}
