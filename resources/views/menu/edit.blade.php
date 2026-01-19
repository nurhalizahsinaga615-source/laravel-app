@extends('layouts.dashboard')

@section('content')
    <h2>Edit Menu</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

   <form action="{{ route('menu.update', $menu->id_menu) }}" method="POST">

        @csrf
        @method('PUT')
        <input type="hidden" name="pelanggan_id" value="{{ $menu->pelanggan_id }}">
        <div class="mb-3">
            <label for="nama_menu" class="form-label">Nama Menu</label>
            <input type="text" name="nama_menu" id="nama_menu" class="form-control" value="{{ $menu->nama_menu }}" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control" value="{{ $menu->harga }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
