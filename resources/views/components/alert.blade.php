    @if(session('error'))
        <div class="alert alert-danger border-0 shadow-sm mb-3 d-flex align-items-center" role="alert">
            <i class="fas fa-exclamation-triangle me-3"></i>
            <div>{{ session('error') }}</div>
        </div>
        @endif