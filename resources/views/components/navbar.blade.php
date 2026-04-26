<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="/">AIRU WAREHOUSE</a>
        
        @if(isset($username))
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard', $username) }}">DASHBOARD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pengelolaan', $username) }}">STOK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile', $username) }}">PROFILE</a>
                </li>
                <li class="nav-item ms-lg-3">
                    <span class="badge bg-light text-primary p-2">
                        <i class="fas fa-user me-1"></i> {{ $username }}
                    </span>
                </li>
                <li class="nav-item">
                    <a class="btn btn-danger btn-sm ms-2" href="{{ route('login') }}">Logout</a>
                </li>
            </ul>
        </div>
        @else
            <a href="{{ route('login') }}" class="btn btn-primary ms-auto">Login Admin</a>
        @endif
    </div>
</nav>