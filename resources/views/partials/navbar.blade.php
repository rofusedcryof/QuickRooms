<nav class="navbar">
  <div class="navbar-left">
    <img src="{{ asset('img/logo2.png') }}" alt="Logo" class="logo" class="img-thumbnail rounded-circle" />
    <span class="brand-text">QuickRoom</span>
  </div>

  <ul class="navbar-menu">
    <li><a href="/">Beranda</a></li>
    <li><a href="/tentang">Tentang</a></li>
    <li><a href="/bantuan">Bantuan</a></li>
  </ul>

  <!-- Search dipindah ke kanan -->
  <form action="/search" method="GET" class="navbar-search">
  <input type="search" name="q" placeholder="Cari kamar..." />
  <button type="submit" aria-label="Cari">🔍</button>
</form>


  <div class="navbar-auth">
    <a href="/login" class="btn-login">Login</a>
    <a href="/register" class="btn-register">Sign Up</a>
  </div>
</nav>


<style>
  .navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: #0d1b2a;
  padding: 10px 30px;
  height: 70px;
  font-family: Arial, sans-serif;
  gap: 20px;
  flex-wrap: wrap;
}

.navbar-left {
  display: flex;
  align-items: center;
  gap: 10px;
}

.navbar-left .logo {
  height: 45px;
  width: 45px;
  object-fit: cover;
  border-radius: 50%;
  border: 2px solid white;
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

</style>
