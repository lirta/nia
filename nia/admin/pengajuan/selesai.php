<?php
 include "../../pages/coneksi/config.php";


$status="SELESAI";
$querii="UPDATE permohonan SET status		='$status'
						where
						id_permohonan 			='$_GET[id]'";
mysqli_query($koneksi,$querii);
mysqli_close($koneksi);
header('location:view.php');

?>