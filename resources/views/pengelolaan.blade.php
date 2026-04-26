@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-blue">Data Inventaris Gudang</h2>
    <span class="badge bg-primary px-3 py-2">Total Produk: {{ count($produk) }}</span>
</div>

<div class="card border-0 shadow-sm overflow-hidden" style="border-radius: 15px;">
    <div class="card-body p-0">
        <table class="table table-hover mb-0">
            <thead class="bg-light text-blue">
                <tr>
                    <th class="ps-4 py-3">NAMA PRODUK</th>
                    <th class="py-3">KATEGORI</th>
                    <th class="py-3 text-center">STOK</th>
                    <th class="py-3 text-center">LOKASI RAK</th>
                </tr>
            </thead>
            <tbody>
                {{-- PROSES DATA RENDERING --}}
                @foreach($produk as $item)
                <tr>
                    <td class="ps-4 fw-bold text-blue">{{ $item['nama'] }}</td>
                    <td>{{ $item['kategori'] }}</td>
                    <td class="text-center">
                        @if($item['stok'] > 0)
                            <span class="badge bg-success-subtle text-success px-3">{{ $item['stok'] }} Unit</span>
                        @else
                            <span class="badge bg-danger-subtle text-danger px-3">Habis</span>
                        @endif
                    </td>
                    <td class="text-center fw-bold text-muted">{{ $item['rak'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="mt-4 text-muted small">
    <i class="fas fa-info-circle me-1"></i> Data di atas diambil secara dinamis dari PageController menggunakan Array.
</div>
@endsection