  <nav class="navbar navbar-expand-lg bg-biru-tua navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="{{ asset('img/logo2.png') }}" alt="Logo" width="40" class="img-thumbnail rounded-circle">{{ $name }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Tentang QuickRoom' ? 'active' : '' }}"  href="/about">Tentang QuickRoom</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Bantuan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ $title === 'Pusat Bantuan' ? 'active' : '' }}" href="/bantuan">Pusat Bantuan</a></li>
                            <li><a class="dropdown-item" href="#">Hubungi Kami</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item {{ $title === 'Urus Sendiri' ? 'active' : '' }}" href="/urusSendiri">Urus Sendiri</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Profil' ? 'active' : '' }}" href="/profil">Profil</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Cari Hotel" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">Cari</button>
                </form>
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-primary me-2 {{ $title === 'Login' ? 'active' : '' }}" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-success {{ $title === 'Sign Up' ? 'active' : '' }}" href="/register">Sign Up</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>