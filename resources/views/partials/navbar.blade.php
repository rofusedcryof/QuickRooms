  <nav class="navbar navbar-expand-lg bg-biru-tua navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home"><img src="{{ asset('img/logo2.png') }}" alt="Logo" width="40" class="img-thumbnail rounded-circle">{{ $name }}</a>
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
                <form class="d-flex" role="search" action="/home">
                    <input class="form-control me-2" type="text" placeholder="Cari Hotel" name="search" value="{{request('search')}}"/>
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

    <style>
.navbar {
    background-color: #1e293b;
    padding: 10px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.navbar-brand {
    display: flex;
    align-items: center;
    gap: 10px; /* jarak antara logo dan teks QuickRoom */
    text-decoration: none;
    color: white;
    font-size: 1.5rem;
    font-weight: bold;
}

.navbar-brand img {
    height: 45px; /* pastikan ukuran logo proporsional */
    width: 55px;
}

.navbar-nav {
    list-style: none;
    display: flex;
    gap: 25px;
    margin: 0 20px;
    padding: 0;
}

.nav-item a {
    color: white;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
}

.nav-item a:hover {
    color: #38bdf8;
}

.navbar-right {
    display: flex;
    align-items: center;
    gap: 10px; /* jarak antar elemen kanan termasuk login & signup lebih rapat */
}

.navbar-right input[type="text"] {
    padding: 5px 10px;
    border-radius: 6px;
    border: none;
    outline: none;
}

.navbar-right .btn {
    padding: 6px 12px;
    border: none;
    border-radius: 6px;
    font-weight: 500;
    cursor: pointer;
    transition: 0.3s ease;
}

.navbar-right .btn-cari {
    background-color: transparent;
    color: #16a34a;
    border: 1px solid #16a34a;
}

.navbar-right .btn-cari:hover {
    background-color: #16a34a;
    color: white;
}

.navbar-right .btn-login {
    background-color: #2563eb;
    color: white;
}

.navbar-right .btn-login:hover {
    background-color: #1d4ed8;
}

.navbar-right .btn-signup {
    background-color: #16a34a;
    color: white;
}

.navbar-right .btn-signup:hover {
    background-color: #15803d;
}

.dropdown-menu {
    background-color: white;
    border-radius: 6px;
    padding: 5px 0;
}

.dropdown-menu a {
    color: black !important; /* teks item dropdown jadi hitam */
    padding: 8px 15px;
    display: block;
    text-decoration: none;
}

.dropdown-menu a:hover {
    background-color: #f1f5f9;
}

.navbar-nav .nav-item a {
    font-size: 1.1rem;
    font-weight: 500;
}
    </style>