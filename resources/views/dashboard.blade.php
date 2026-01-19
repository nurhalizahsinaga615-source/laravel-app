@extends('layouts.dashboard')

@section('content')
<div class="container py-4">
    <div class="page-header text-center mb-4">
        <i class="bi bi-speedometer2" style="font-size: 40px; color: var(--primary);"></i> 
        <h2 class="fw-bold">Pusat Kendali NyeblakYuk</h2>
    </div>

    <div class="card-glass p-5">
        <div class="dashboard-welcome text-center">
            <h3 class="fw-bold" style="color: var(--ink);">Halo, Admin! 👋</h3>
            <p class="text-muted">Selamat datang kembali di sistem internal manajemen NyeblakYuk.</p>
            
            <hr class="my-4" style="border-top: 2px dashed var(--line);">

            <div class="mb-4">
                <p>Dashboard ini dirancang untuk memudahkanmu dalam mengelola operasional toko secara efisien:</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <span class="badge bg-white text-dark p-2 shadow-sm rounded-pill">👥 Kelola Pelanggan</span>
                    <span class="badge bg-white text-dark p-2 shadow-sm rounded-pill">📜 Pantau Pesanan</span>
                    <span class="badge bg-white text-dark p-2 shadow-sm rounded-pill">🍲 Update Stok Menu</span>
                </div>
            </div>

            <div class="alert bg-light border-0 rounded-4 p-4">
                <p class="mb-2"><strong>Daftar Varian Menu Saat Ini:</strong></p>
                <p class="mb-0 text-secondary">
                    Seblak Telur • Seblak Ayam • Seblak Sosis • Seblak Komplit
                </p>
                <small class="text-primary mt-2 d-block font-italic">"Pastikan kualitas rasa tetap terjaga untuk pelanggan setia!"</small>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4 mb-3">
            <div class="card-stat text-center">
                <div class="card-stat-header">Total Menu</div>
                <div class="card-stat-value">4 Varian</div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card-stat text-center">
                <div class="card-stat-header">Status Sistem</div>
                <div class="card-stat-value" style="font-size: 18px;">Online & Stabil</div>
            </div>
        </div>
    </div>
</div>
@endsection