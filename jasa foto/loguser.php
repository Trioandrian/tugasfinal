<?php
session_start();
require 'functions.php';


if(isset($_POST['login'])){
    $nama = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tabel_users WHERE nama ='$nama'";
    $result = $conn->query($sql);
  

    if($result->num_rows == 1){
        $_SESSION['nama'] = $nama;
        $_SESSION['user_login'] = true;
        
        $row = $result->fetch_assoc();
        $passwordnw = $row['password'];
        
        if($password == $passwordnw){
            echo "login berhasil";
            header("Location: index.php");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Menu Login User</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <div class="container">
    <h2>Menu Login</h2>
    <p></p>
    <form method="post"> 
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Masukkan username">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Masukkan password">
        <p>Login Sebagai<a href="login.php"> Admin?</a></p>
      </div>
      <button type="submit" name="login" id="login">Login</button>
    </form>
  </div>
</body>
</html>
