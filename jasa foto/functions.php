<?php

 $conn = mysqli_connect("localhost","root","","jasa foto");


function tambahdata($data){
    global $conn;

   $nama = $data['nama'];
   $paket = $data['paket'];
   $tanggal = $data['tanggal'];
   $komentar =  $data['pesan'];

    $sql = "INSERT INTO tabel_jasa (nama,paket, tanggal, komentar) VALUES ('$nama','$paket', '$tanggal', '$komentar')";
    mysqli_query($conn,$sql);
}
function tambahdatausers($data){
    global $conn;

   $nama = $data['nama'];
   $email = $data['email'];
   $password = $data['password'];

//    cek user 
    $cekuser = mysqli_query($conn,"SELECT * FROM tabel_users WHERE nama = '$nama'");

    if(mysqli_fetch_assoc($cekuser)){
        echo "USER SUDAH ADA";
        // echo "<script>alert('Daftar Berhasil');  window.location.href = 'login.php';</script>";
        return false;
    }

    echo "<script>alert('Daftar Berhasil');  window.location.href = 'loguser.php';</script>";
    $sql = "INSERT INTO tabel_users (nama,email,password) VALUES ('$nama','$email','$password')";
    mysqli_query($conn,$sql);
}

function query($query){
    global $conn;

    $result = mysqli_query($conn,$query);


    $rows = [];

    while($row =  mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }
    return $rows;
}
 function ubah($data){
    global $conn;
    // var_dump($data);
    $id = $data['id'];
    $name = $data['nama'];
    $paket = $data['paket'];
    $tanggal = $data['tanggal'];
    $komentar = $data['pesan'];


    $sql = "UPDATE tabel_jasa SET nama='$name', paket='$paket', tanggal='$tanggal',komentar = '$komentar' WHERE id_jasa='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil diperbarui";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
function hapusjasa($id){
    global $conn;
    $sql = "DELETE FROM tabel_jasa WHERE id_jasa='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data Berhasil DiHapus');  window.location.href = 'admin.php';</script>";
      // Pindah ke URL baru
     

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}
?>