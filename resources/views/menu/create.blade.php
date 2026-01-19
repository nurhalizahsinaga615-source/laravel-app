@extends('layouts.dashboard')

@section('content')
<h2>Tambah Menu</h2>

<form action="{{ route('menu.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Pelanggan</label>
        <select name="pelanggan_id" class="form-control" required>
            <option value="">-- Pilih Pelanggan --</option>
            @foreach ($pelanggans as $p)
                <option value="{{ $p->id_pelanggan }}">
                    {{ $p->nama_pelanggan }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Nama Menu</label>
        <input type="text" name="nama_menu" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Harga</label>
        <input type="number" name="harga" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
