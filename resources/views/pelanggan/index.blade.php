@extends('layouts.dashboard')

@section('content')

<h2>Pelanggan</h2>
<a href="{{ url('pelanggan/create') }}" class="btn btn-primary mb-3">Tambah Pelanggan</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>No Hp</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pelanggans as $index => $pelanggan)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $pelanggan->nama_pelanggan }}</td>
            <td>{{ $pelanggan->no_hp }}</td>
            <td>
                <a href="{{ url('pelanggan/'. $pelanggan->id_pelanggan .'/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ url('pelanggan/'. $pelanggan->id_pelanggan) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Ingin Hapus Data Pelanggan?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
