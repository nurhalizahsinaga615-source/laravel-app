@extends('layouts.dashboard')

@section('content')

    <h2>Tambah Pelanggan</h2>

    <form action="{{ url('pelanggan') }}" method="POST">
        @csrf
  
        <div class="mb-3">
            <label for="nama_pelanggan" class="form-label fw-bold">Nama Pelanggan</label>
            <input type="text" class="form-control" name="nama_pelanggan" id="nama_pelanggan" required>
        </div>

        <div class="mb-3">
            <label for="no_hp" class="form-label fw-bold">No Hp</label>
            <input type="text" class="form-control" name="no_hp" id="no_hp" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

@endsection