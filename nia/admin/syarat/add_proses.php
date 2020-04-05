<?php
include "../../pages/coneksi/config.php";


			
$kat	= $_POST['akta'];
$input = $_POST['sa'];
foreach ($input as $output) {
$queri="INSERT INTO syarat (jenis_akta, syarat) values ('$kat', '$output')";
mysqli_query($koneksi,$queri); }

header('location:view.php');
 
			
?>