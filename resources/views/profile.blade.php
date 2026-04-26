@extends('layouts.app')

@section('content')
<h2 class="fw-bold text-blue mb-4">Profil Admin</h2>
<div class="card border-0 shadow-sm p-4">
    <div class="d-flex align-items-center gap-4">
        <i class="fas fa-user-circle fa-5x text-primary"></i>
        <div>
            <h4 class="mb-1">{{ $username }}</h4>
            <p class="text-muted mb-0">Administrator Gudang Utama</p>
            <span class="badge bg-primary mt-2">Active Status</span>
        </div>
    </div>
</div>
@endsection