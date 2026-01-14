@extends('layouts.app')

@section('content')

<h2>Tambah Pelanggan</h2>

<form action="{{ url('/pelanggan') }}" method="POST">
    @csrf

    <input type="text" name="nama_pelanggan" required>
    <input type="text" name="no_hp" required>

    <button type="submit">Simpan</button>
</form>

@endsection
