@extends('layouts.dashboard')

@section('content')
    <h2>Edit Pesanan</h2>

    <form action="{{ route('pesanan.update', $pesanan->id_pesanan) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="pelanggan_id">Pelanggan</label>
            <select name="pelanggan_id" id="pelanggan_id" class="form-control" required>
                @foreach($pelanggans as $pelanggan)
                    <option value="{{ $pelanggan->id_pelanggan }}" 
                        {{ $pesanan->pelanggan_id == $pelanggan->id_pelanggan ? 'selected' : '' }}>
                        {{ $pelanggan->nama_pelanggan }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="menu_id">Menu</label>
            <select name="menu_id" id="menu_id" class="form-control" required>
                @foreach($menus as $menu)
                    <option value="{{ $menu->id_menu }}" 
                        {{ $pesanan->menu_id == $menu->id_menu ? 'selected' : '' }}>
                        {{ $menu->nama_menu }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control" value="{{ $pesanan->jumlah }}" required>
        </div>

        <div class="mb-3">
            <label for="total_harga">Total Harga</label>
            <input type="number" name="total_harga" id="total_harga" class="form-control" value="{{ $pesanan->total_harga }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Pesanan</button>
    </form>
@endsection
