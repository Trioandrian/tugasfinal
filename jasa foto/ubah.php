<?php
 require 'functions.php';

$id = $_GET['id'];  
$upjasa = query('SELECT * FROM tabel_jasa WHERE id = $id')[0];


// var_dump($upjasa);
 if (isset($_POST['submit'])) {
         if(ubah($_POST) > 0){
             echo "Data berhasil di update";
         }
    } else {
        echo "DATA GAGAL Update";
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Form Update</title>
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
        <input type="hidden" id="nama" name="id" value="<?=$upjasa['id_jasa'];?>" required>
        <input type="text" id="nama" name="nama" value="<?=$upjasa['nama'];?>" required>
      </div>
      <div class="form-group">
        <select name="paket" id="paket">
            <option value="paket A">Paket A</option>
            <option value="paket B">Paket B</option>
        </select>
      </div>
      <div class="form-group">
        <label for="tanggal">Tanggal Pemesanan:</label>
        <input type="date" id="tanggal" name="tanggal"  value="<?=$upjasa['tanggal'];?>" required>
      </div>
      <div class="form-group">
        <label for="pesan">Pesan Tambahan:</label>
        <input id="pesan" name="pesan"  value="<?=$upjasa['komentar'];?>"></input>
      </div>
      <button type="submit" name="submit">Update</button>
    </form>
  </div>
</body>
</html>
