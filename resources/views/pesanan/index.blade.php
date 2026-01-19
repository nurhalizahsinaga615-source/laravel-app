@extends('layouts.dashboard')

@section('content')
    <h2>Daftar Pesanan</h2>
    <a href="{{ route('pesanan.create') }}" class="btn btn-primary mb-3">Tambah Pesanan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Pelanggan</th>
                <th>Menu</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pesanans as $index => $pesanan)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $pesanan->pelanggan->nama_pelanggan ?? '-' }}</td>
                <td>{{ $pesanan->menu->nama_menu ?? '-' }}</td>
                <td>{{ $pesanan->jumlah }}</td>
                <td>{{ number_format($pesanan->total_harga, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('pesanan.edit', $pesanan->id_pesanan) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pesanan.destroy', $pesanan->id_pesanan) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
