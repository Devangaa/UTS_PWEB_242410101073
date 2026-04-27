@extends('layouts.app')

@section('content')
<div class="row justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="col-md-5">
        
        @if(session('error'))
        <div class="alert alert-danger border-0 shadow-sm mb-3 d-flex align-items-center" role="alert">
            <i class="fas fa-exclamation-triangle me-3"></i>
            <div>
                {{ session('error') }}
            </div>
        </div>
        @endif

        <div class="card border-0 shadow-lg" style="border-radius: 15px; overflow: hidden;">
            <div class="bg-primary py-4 text-center text-white">
                <i class="fas fa-warehouse fa-3x mb-2"></i>
                <h4 class="fw-bold mb-0">ADMIN LOGIN</h4>
                <small class="opacity-75">Airu Warehouse Management</small>
            </div>

            <div class="card-body p-5">
                <form action="{{ route('login.proses') }}" method="POST">
                    @csrf
                    
                    <div class="mb-4">
                        <label for="username" class="form-label fw-bold text-blue">Username</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-0"><i class="fas fa-user text-muted"></i></span>
                            <input type="text" name="username" id="username" class="form-control bg-light border-0 py-2" placeholder="Masukkan username..." value="{{ old('username') }}" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label fw-bold text-blue">Password</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-0"><i class="fas fa-lock text-muted"></i></span>
                            <input type="password" name="password" id="password" class="form-control bg-light border-0 py-2" placeholder="Masukkan password..." required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-3 fw-bold shadow-sm">
                        LOG IN <i class="fas fa-sign-in-alt ms-2"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection