<?php
include "../../pages/coneksi/config.php";

$queri="DELETE FROM arsip WHERE id_arsip='$_GET[id]';";
mysqli_multi_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:view.php');

?>