<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Pelanggan;
use App\Models\Menu;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $pesanans = Pesanan::with(['pelanggan', 'menu'])->get();
        return view('pesanan.index', compact('pesanans'));
    }

    public function create()
    {
        
        $pelanggan = Pelanggan::all();
        $menu = Menu::all();
        return view('pesanan.create', compact('pelanggan', 'menu'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pelanggan_id' => 'required|exists:tb_pelanggan,id_pelanggan',
            'menu_id' => 'required|exists:tb_menu,id_menu',
            'jumlah' => 'required|integer|min:1',
            'total_harga' => 'required|numeric|min:0'
        ]);

        Pesanan::create($request->all());

        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pelanggan = Pelanggan::all();
        $menu = Menu::all();
        return view('pesanan.edit', compact('pesanan', 'pelanggan', 'menu'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pelanggan_id' => 'required|exists:tb_pelanggan,id_pelanggan',
            'menu_id' => 'required|exists:tb_menu,id_menu',
            'jumlah' => 'required|integer|min:1',
            'total_harga' => 'required|numeric|min:0'
        ]);

        $pesanan = Pesanan::findOrFail($id);
        $pesanan->update($request->all());

        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil diperbarui');
    }

    public function destroy($id)
    {
        Pesanan::findOrFail($id)->delete();
        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil dihapus');
    }
}