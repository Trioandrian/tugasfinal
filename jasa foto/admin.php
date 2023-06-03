
<?php

session_start(); // Memulai session

// Cek apakah pengguna telah login, jika tidak, redirect ke halaman login
if(!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}

    require 'functions.php';    
   $jasa =  query("SELECT * FROM tabel_jasa");
 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Menu Admin</title>
  <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
  <div class="sidebar">
    <a href="index.php" style="padding:5px 10px; background-color:lightblue;">< Kembali</a>
    <ul>
      <li><a href="admin.php">Dashboard</a></li>
      <li><a href="#datauser">Data Users</a></li>
      <li><a href="#dataadmin">Data Admin</a></li>
    </ul>
    <button><a href="Logout.php">Logout</a></button>
  </div>
  
  <div class="content">
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Paket</th>
        <th>Tanggal</th>
        <th>Pesan Tambahan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
        <?php $no = 1; foreach($jasa as $datajasa):?>
      <tr>
        <td><?=$no++; ?></td>
        <td><?= $datajasa['nama'];?></td>
        <td><?= $datajasa['paket'];?></td>
        <td><?= $datajasa['tanggal'];?></td>
        <td><?= $datajasa['komentar'];?></td>
        <td>
            <a href="Ubah.php?id=<?=$datajasa['id_jasa'];?>">Ubah</a>
            <a href="deletejasa.php?id=<?=$datajasa['id_jasa'];?>">Hapus</a>
    </td>
      </tr>
      <?php endforeach;?>
      <!-- Tambahkan baris lain sesuai dengan kebutuhan -->
    </tbody>
  </table>
</body>
</html>

