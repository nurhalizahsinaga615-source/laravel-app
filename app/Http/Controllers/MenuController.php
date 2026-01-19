<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        
        $menus = Menu::with('pelanggan')->get();
        return view('menu.index', compact('menus'));
    }

    public function create()
    {
       
        $pelanggans = Pelanggan::all();
        return view('menu.create', compact('pelanggans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pelanggan_id' => 'required',
            'nama_menu' => 'required|string|max:255',
            'harga' => 'required|numeric',
        ]);

        Menu::create([
            'pelanggan_id' => $request->pelanggan_id,
            'nama_menu' => $request->nama_menu,
            'harga' => $request->harga,
        ]);

        return redirect('/menu')->with('success', 'Menu berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        $pelanggans = Pelanggan::all();

        return view('menu.edit', compact('menu', 'pelanggans'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pelanggan_id' => 'required',
            'nama_menu' => 'required|string|max:255',
            'harga' => 'required|numeric',
        ]);

        $menu = Menu::findOrFail($id);

        $menu->update([
            'pelanggan_id' => $request->pelanggan_id,
            'nama_menu' => $request->nama_menu,
            'harga' => $request->harga,
        ]);

        return redirect('/menu')->with('success', 'Menu berhasil diupdate!');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect('/menu')->with('success', 'Menu berhasil dihapus!');
    }
}
