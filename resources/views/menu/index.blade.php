@extends('layouts.dashboard')

@section('content')
    <h2>Daftar Menu</h2>
    <a href="{{ route('menu.create') }}" class="btn btn-primary mb-3">Tambah Menu</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Menu</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $menu->nama_menu }}</td>
                    <td>{{ $menu->harga }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('menu.edit', $menu->id_menu) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('menu.destroy', $menu->id_menu) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
