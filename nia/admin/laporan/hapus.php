<?php
include "../../pages/coneksi/config.php";

$queri="DELETE FROM laporan WHERE id_laporan='$_GET[id]';";
mysqli_multi_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:view.php');

?>