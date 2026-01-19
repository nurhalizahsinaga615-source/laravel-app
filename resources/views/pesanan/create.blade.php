@extends('layouts.dashboard')

@section('content')
<div class="container py-4">
    <div class="card-glass p-4">
        
        <div class="page-header mb-4">
            <i class="fas fa-shopping-cart"></i> <h2 class="page-title">Tambah Pesanan Baru 🍜</h2>
        </div>

        <form action="{{ route('pesanan.store') }}" method="POST">
            @csrf

            {{-- Bagian Pelanggan --}}
            <div class="mb-4">
                <label class="form-label fw-bold" style="color: var(--ink);">Pilih Pelanggan</label>
                <select name="pelanggan_id" class="form-control @error('pelanggan_id') is-invalid @enderror" required>
                    <option value="" disabled selected>-- Pilih Nama Pelanggan --</option>
                    @foreach($pelanggan as $p)
                        <option value="{{ $p->id_pelanggan }}">
                            {{ $p->nama_pelanggan }}
                        </option>
                    @endforeach
                </select>
                @error('pelanggan_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Bagian Menu --}}
            <div class="mb-4">
                <label class="form-label fw-bold" style="color: var(--ink);">Pilih Menu Seblak</label>
                <select name="menu_id" class="form-control @error('menu_id') is-invalid @enderror" required id="menu_id">
                    <option value="" disabled selected>-- Pilih Menu --</option>
                    @foreach($menu as $m)
                        <option value="{{ $m->id_menu }}" data-harga="{{ $m->harga }}">
                            {{ $m->nama_menu }} - Rp{{ number_format($m->harga, 0, ',', '.') }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Bagian Jumlah --}}
            <div class="mb-4">
                <label class="form-label fw-bold" style="color: var(--ink);">Jumlah Porsi</label>
                <input type="number" name="jumlah" id="jumlah" class="form-control" min="1" value="1" required>
            </div>

            {{-- Bagian Total Harga (Otomatis) --}}
            <div class="mb-4">
                <label class="form-label fw-bold" style="color: var(--ink);">Total Bayar</label>
                <div class="input-group">
                    <span class="input-group-text bg-light">Rp</span>
                    <input type="number" name="total_harga" id="total_harga" class="form-control" readonly required>
                </div>
                <small class="text-muted">*Total akan terhitung otomatis</small>
            </div>

            {{-- Tombol Aksi --}}
            <div class="d-flex gap-2 mt-4">
                <button type="submit" class="btn btn-primary px-4">
                    Simpan Pesanan ✨
                </button>
                <a href="{{ route('pesanan.index') }}" class="btn btn-warning">
                    Kembali
                </a>
            </div>
        </form>
    </div>
</div>

{{-- Script biar total harga ngitung sendiri (User Experience mantap) --}}
<script>
    const menuSelect = document.getElementById('menu_id');
    const jumlahInput = document.getElementById('jumlah');
    const totalInput = document.getElementById('total_harga');

    function hitungTotal() {
        const selectedOption = menuSelect.options[menuSelect.selectedIndex];
        const harga = selectedOption.getAttribute('data-harga') || 0;
        const jumlah = jumlahInput.value || 0;
        totalInput.value = harga * jumlah;
    }

    menuSelect.addEventListener('change', hitungTotal);
    jumlahInput.addEventListener('input', hitungTotal);
</script>
@endsection