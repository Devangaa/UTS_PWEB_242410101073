<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="/">AIRU WAREHOUSE</a>
        
        @if(isset($username))
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{ route('dashboard', $username) }}">DASHBOARD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{ route('pengelolaan', $username) }}">STOK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{ route('profile', $username) }}">PROFILE</a>
                    </li>
                    
                    <li class="nav-item ms-lg-3 my-2 my-lg-0">
                        <span class="badge bg-primary-subtle text-primary p-2 w-100">
                            <i class="fas fa-user me-1"></i> {{ $username }}
                        </span>
                    </li>
                    
                    <li class="nav-item">
                        <a class="btn btn-outline-danger btn-sm ms-lg-2 w-100" href="{{ route('login') }}">
                            <i class="fas fa-sign-out-alt me-1"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        @else
            <a href="{{ route('login') }}" class="btn btn-primary px-4 shadow-sm">
                Login Admin <i class="fas fa-arrow-right ms-1"></i>
            </a>
        @endif
    </div>
</nav>