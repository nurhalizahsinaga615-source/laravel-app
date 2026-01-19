@extends('layouts.dashboard')

@section('content')

<h2>Edit Pelanggan</h2>

<form action="{{ url('/pelanggan/' . $pelanggan->id_pelanggan) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nama_pelanggan" value="{{ $pelanggan->nama_pelanggan }}" required>
    <input type="text" name="no_hp" value="{{ $pelanggan->no_hp }}" required>

    <button type="submit">Update</button>
</form>

@endsection
