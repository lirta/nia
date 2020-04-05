<?php
 include "../../pages/coneksi/config.php";



$querii="UPDATE jenis_akta SET nama_akta		='$_POST[akta]'
						where
						id_jenis_akta 			='$_POST[id]'";
mysqli_query($koneksi,$querii);
mysqli_close($koneksi);
header('location:view.php');

?>