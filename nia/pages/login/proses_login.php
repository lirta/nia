<?php
  include "../coneksi/config.php";
  $username = $_POST['username'];
  $pass     =md5 ($_POST['password']);
  $sql = "SELECT * FROM admin WHERE username='$username' AND password='$pass'";
  $result = mysqli_query($koneksi, $sql);
  $ketemu=mysqli_num_rows($result);
  $r=mysqli_fetch_assoc($result);
  if ($ketemu > 0) {
    
    session_start();
    $_SESSION['username']            = $r['username'];
    $_SESSION['password']            = $r['password'];
    $_SESSION['foto']            = $r['foto'];
    if ($_SESSION['username'] == "admin") {
      header('location:../../admin/index.php');
    }else{
      echo '<script language="javascript">
              alert ("Anda Tida Punya Akses");
              window.location="login.php";
              </script>';
              exit();
    }
 
  }
  else {
    echo '<script language="javascript">
              alert ("Username dan Password Anda Salah");
              window.location="login.php";
              </script>';
              exit();
  }
?>