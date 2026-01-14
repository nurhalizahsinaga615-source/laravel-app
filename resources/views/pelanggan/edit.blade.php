@extends('layouts.app')

@section('content')

<h2>Edit Pelanggan</h2>

<form action="{{ url('/pelanggan/' . $row->id_pelanggan) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nama_pelanggan" value="{{ $row->nama_pelanggan }}" required>
    <input type="text" name="no_hp" value="{{ $row->no_hp }}" required>

    <button type="submit">Update</button>
</form>

@endsection
