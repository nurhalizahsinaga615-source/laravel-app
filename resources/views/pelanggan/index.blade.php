@extends('layouts.app')

@section('content')
<h2>Pelanggan</h2>


@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

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
            <td>
                <a href="{{ url('pelanggan/' .$row->id_pelanggan. '/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                
                <form action="{{ url('/pelanggan/'.$row->id_pelanggan) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"
                    onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
