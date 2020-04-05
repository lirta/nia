<?php
include "../../pages/coneksi/config.php";


$querii="INSERT INTO jenis_akta ( nama_akta) values ('$_POST[akta]')";
mysqli_query($koneksi,$querii);
mysqli_close($koneksi);
header('location:view.php');

?>