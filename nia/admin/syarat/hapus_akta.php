<?php
include "../../pages/coneksi/config.php";

mysqli_multi_query($koneksi,"DELETE FROM jenis_akta WHERE id_jenis_akta='$_GET[id]'");
mysqli_multi_query($koneksi,"DELETE FROM syarat WHERE jenis_akta='$_GET[id]'");
mysqli_close($koneksi);
header('location:view.php');

?>