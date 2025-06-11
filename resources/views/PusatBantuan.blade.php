<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pusat Bantuan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
      .hero {
        background: linear-gradient(to bottom, #2b6cb0, #3182ce);
        color: white;
        padding: 60px 0;
        text-align: center;
      }

      .search-bar {
        max-width: 600px;
        margin: 20px auto;
      }

      .search-bar input {
        padding: 14px 20px;
        border-radius: 10px;
      }

      .section-title {
        font-weight: 600;
        margin-bottom: 20px;
      }

      .produk-icon {
        text-align: center;
        font-size: 14px;
        color: #2d3748;
      }

      .produk-icon img {
        width: 48px;
        height: 48px;
        margin-bottom: 8px;
      }

      .topik-link {
        display: block;
        padding: 12px 0;
        border-bottom: 1px solid #e2e8f0;
        color: #2d3748;
        text-decoration: none;
        font-weight: 500;
      }

      .topik-link:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <!-- Hero Section -->
    <div class="hero">
      <h2 class="fw-bold">Pusat Bantuan QuickRoom</h2>
      <p class="fs-5">Temukan jawaban Anda di sini</p>
      <div class="search-bar">
        <input type="text" class="form-control" placeholder="Ketik topik yang Anda cari (misal: refund)" />
      </div>
    </div>

    <!-- Content Section -->
    <div class="container py-5">
      <div class="row">
        <!-- Topik Populer -->
        <div class="col-md-6">
          <h4 class="section-title">Topik Populer</h4>
          <a href="#" class="topik-link">Cara Koreksi Nama Pemesan Hotel</a>
          <a href="#" class="topik-link">Cara Membatalkan dan Refund Pesanan Hotel Saya</a>
          <a href="#" class="topik-link">Cara Reschedule Pesanan Hotel Saya</a>
          <a href="#" class="topik-link">Cara Check-in Online</a>
          <a href="#" class="topik-link">Janji Refund QuickRoom</a>
        </div>

        
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
