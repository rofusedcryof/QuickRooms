<nav class="navbar navbar-expand-lg bg-biru-tua navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ Auth::check() ? '/home' : '/login' }}">
            <img src="{{ asset('img/logo2.png') }}" alt="Logo" width="40" class="img-thumbnail rounded-circle">
            {{ Auth::check() ? Auth::user()->nama : 'QuickRooms' }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Tentang QuickRoom' ? 'active' : '' }}" href="/about">Tentang QuickRoom</a>
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
                @auth

                @endauth
            </ul>
            <form class="d-flex" role="search" action="/home">
                <input class="form-control me-2" type="text" placeholder="Cari Hotel" name="search" value="{{ request('search') }}" />
                <button class="btn btn-outline-success" type="submit">Cari</button>
            </form>
            <ul class="navbar-nav">
                @guest
                    <!-- Tampilkan jika pengguna belum login -->
                    <li class="nav-item">
                        <a class="btn btn-primary me-2 {{ $title === 'Login' ? 'active' : '' }}" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-secondary {{ $title === 'Register' ? 'active' : '' }}" href="/register">Sign Up</a>
                    </li>
                @endguest

                @auth
                    <!-- Tampilkan jika pengguna sudah login -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->nama }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/profil">Profil</a></li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
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

.navbar-left .brand-text {
  font-size: 20px;
  font-weight: bold;
  color: white;
}

.navbar-menu {
  list-style: none;
  display: flex;
  gap: 20px;
  margin: 0;
  padding: 0;
}

.navbar-menu li a {
  text-decoration: none;
  font-size: 16px;
  color: white;
  transition: color 0.3s;
}

.navbar-menu li a:hover {
  color: #66b2ff;
}

.navbar-search {
  display: flex;
  align-items: center;
  background-color: white;
  border-radius: 20px;
  overflow: hidden;
  height: 36px;
  padding: 0 12px;
}

.navbar-search input[type="search"] {
  border: none;
  padding: 6px 8px;
  outline: none;
  width: 160px;
  font-size: 14px;
  color: #333;
  background: none;
}

.navbar-search button {
  border: none;
  background: none;
  cursor: pointer;
  font-size: 16px;
  padding-left: 6px;
}

.navbar-auth {
  display: flex;
  gap: 10px;
  align-items: center;
}

.btn-login,
.btn-register {
  text-decoration: none;
  padding: 8px 16px;
  border-radius: 6px;
  font-size: 14px;
  transition: background-color 0.3s;
}

.btn-login {
  background-color: transparent;
  border: 1px solid #66b2ff;
  color: #66b2ff;
}

.btn-login:hover {
  background-color: #66b2ff;
  color: #0d1b2a;
}

.btn-register {
  background-color: #66b2ff;
  color: #0d1b2a;
}

.btn-register:hover {
  background-color: #3399ff;
}
.dropdown-menu {
    background-color: #fff;
}

.dropdown-menu .dropdown-item {
    color: #1e293b !important; /* warna teks gelap */
    font-weight: 500;
}

.dropdown-menu .dropdown-item:hover,
.dropdown-menu .dropdown-item.active {
    background-color: #e6f0fa;
    color: #2563eb !important; /* warna biru saat hover */
}

</style>
