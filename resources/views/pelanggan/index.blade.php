@extends('layouts.app')

@section('content')
<h2>Pelanggan</h2>

<a href="{{ url('pelanggan/create') }}" class="btn btn-primary mb-3">Tambah Data</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>No. HP</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rows as $row)
        <tr>
            <td>{{ $row->id_pelanggan }}</td>
            <td>{{ $row->nama_pelanggan }}</td>
            <td>{{ $row->no_hp }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
