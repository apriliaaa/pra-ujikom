<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = Anggota::all();
        return view('anggota.index', compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anggota.create');
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
            'no_anggota' => 'required|unique:tblanggota',
            'nama' => 'required',
            'pokok' => 'required', 
            'wajib' => 'required',
            'saldo' => 'required',            
        ]);

        $anggota = Anggota::create([
            'no_anggota' => $request->no_anggota,
            'nama' => $request->nama,
            'pokok' => $request->pokok,
            'wajib' => $request->wajib,
            'saldo' => $request->saldo,
        ]);

        if($anggota){
            return redirect()->route('data-anggota')->with('success', 'Data berhasil disimpan!');
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
    public function edit($no_anggota)
    {
        $anggota = Anggota::findorfail($no_anggota);
        return view('anggota.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $no_anggota)
    {
        $anggota = Anggota::findorfail($no_anggota);
        $anggota->update($request->all());
        return redirect()->route('data-anggota')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($no_anggota)
    {
        Anggota::find($no_anggota)->delete();
        return back()->with('success', 'Data berhasil dihapus!');
    }
}
