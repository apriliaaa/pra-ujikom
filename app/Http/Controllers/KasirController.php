<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kasir = Kasir::all();
        return view('kasir.index', compact('kasir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kasir.create');
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
            'kodeksr' => 'required|unique:tblkasir',
            'namaksr' => 'required',
            'passwordksr' => 'required',            
        ]);

        $kasir = Kasir::create([
            'kodeksr' => $request->kodeksr,
            'namaksr' => $request->namaksr,
            'passwordksr' => $request->passwordksr,
        ]);

        if($kasir){
            return redirect()->route('data-kasir')->with('success', 'Data berhasil disimpan!');
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
    public function edit($kodeksr)
    {
        $kasir = Kasir::findorfail($kodeksr);
        return view('kasir.edit', compact('kasir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kodeksr)
    {
        $kasir = Kasir::findorfail($kodeksr);
        $kasir->update($request->all());
        return redirect()->route('data-kasir')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kodeksr)
    {
        Kasir::find($kodeksr)->delete();
        return back()->with('success', 'Data berhasil dihapus!');
    }
}
