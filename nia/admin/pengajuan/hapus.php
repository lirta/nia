<?php
include "../../pages/coneksi/config.php";

mysqli_multi_query($koneksi,"DELETE FROM permohonan WHERE id_permohonan='$_GET[id]';");
mysqli_multi_query($koneksi,"DELETE FROM file_permohonan WHERE id_permohonan='$_GET[id]';");
mysqli_close($koneksi);
header('location:view.php');

?>