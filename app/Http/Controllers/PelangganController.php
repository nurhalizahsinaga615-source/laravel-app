<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pelanggan::all();
        return view('pelanggan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pelanggan::create([
            
            'nama_pelanggan'=> $request->nama_pelanggan,
            'no_hp'=> $request->no_hp,
            
        ]);
        return redirect('/pelanggan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Pelanggan:: findOrfail($id);
        return view('pelanggan.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $pelanggan = Pelanggan::findOrFail($id);

    $pelanggan->nama_pelanggan = $request->nama_pelanggan;
    $pelanggan->no_hp = $request->no_hp;
    $pelanggan->save(); // Simpan ke database

    return redirect('/pelanggan')->with('success', 'Data pelanggan berhasil diupdate!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $pelanggan = Pelanggan::findOrFail($id);
    $pelanggan->delete();

    return redirect('/pelanggan')->with('success', 'Data pelanggan berhasil dihapus!');

    dd("DELETE request diterima untuk id $id");
}



}
