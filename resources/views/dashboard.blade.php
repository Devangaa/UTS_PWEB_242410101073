@extends('layouts.app')

@section('content')
<div class="p-5 mb-4 bg-white rounded-4 shadow-sm border-start border-primary border-5">
    <h1 class="display-5 fw-bold text-blue">Selamat Datang, {{ $username }}!</h1>
    <p class="col-md-8 fs-4 text-muted">Anda berhasil masuk ke sistem manajemen stok Airu. Gunakan menu di atas untuk mulai mengelola barang.</p>
    <hr class="my-4">
    <a href="{{ route('pengelolaan', $username) }}" class="btn btn-primary btn-lg">Cek Stok Produk</a>
</div>
@endsection