<?php
include "../../pages/coneksi/config.php";

$ak=$_GET['ak'];

$queri="DELETE FROM syarat WHERE id_syarat='$_GET[sya]';";
mysqli_multi_query($koneksi,$queri);
mysqli_close($koneksi);
header("location:detail.php?id=$ak");

?>