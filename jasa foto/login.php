<?php
session_start(); // Memulai session
require 'functions.php';


if(isset($_POST['login'])){
    $nama = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tabel_admin WHERE username ='$nama'";
    $result = $conn->query($sql);


    if($result->num_rows == 1){
        $_SESSION['username'] = $nama;
        $_SESSION['admin_logged_in'] = true;

        $row = $result->fetch_assoc();
        $passwordnw = $row['password'];

        if($password == $passwordnw){
                echo "login berhasil";
                header("Location: index.php");

        }else{
            echo "login gagal";
        }
    }else{
       $eror = true;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Menu Login Admin</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <div class="container">
    <h2>Menu Login Admin</h2>
    <form method="post"> 
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Masukkan username">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Masukkan password">
        <p>Belum Punya <a href="register.php">Register</a></p>
      </div>
      <button type="submit" name="login" id="login">Login</button>
    </form>
  </div>
</body>
</html>
