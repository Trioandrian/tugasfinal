<?php
 require 'functions.php';
 if (isset($_POST['submit'])) {
            tambahdata($_POST);
        echo "Data berhasil ditambahkan";
    } else {
        echo "DATA GAGAL DITAMBAHKAN";
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Form Pemesanan Jasa Fotografi</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- nav -->
    <nav>
        <div class="logo">
            <h5>Logo</h5>
        </div>
        <ul>
          <li><a href="index.html">Beranda</a></li>
          <li><a href="#">Tentang</a></li>
          <li><a href="#">Layanan</a></li>
          <li><a href="#">Kontak</a></li>
        </ul>
        <button id="contactme">login</button>
      </nav>
    <!-- end nav -->
  <div class="container">
    <center>
        <h2>Pemesanan Jasa Fotografi</h2>
    </center>
    <form method="post" action="">
      <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
      </div>
      <div class="form-group">
        <select name="paket" id="paket">
            <option value="paket A">Paket A</option>
            <option value="paket B">Paket B</option>
        </select>
      </div>
      <div class="form-group">
        <label for="tanggal">Tanggal Pemesanan:</label>
        <input type="date" id="tanggal" name="tanggal" required>
      </div>
      <div class="form-group">
        <label for="pesan">Pesan Tambahan:</label>
        <textarea id="pesan" name="pesan"></textarea>
      </div>
      <button type="submit" name="submit">Pesan Sekarang</button>
    </form>
  </div>
</body>
</html>
