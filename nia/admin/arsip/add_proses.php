<?php
include "../../pages/coneksi/config.php";


			$acak = rand(00000000, 99999999);

			$namafoto = $_FILES['berkas']['name'];
			$nama = $acak.$namafoto;
			$folderawal = $_FILES['berkas']['tmp_name'];
			$foldertujuan="../berkas/";
			$id=$user.$acak;

			move_uploaded_file($folderawal,$foldertujuan.$nama);

			$querii="INSERT INTO arsip ( no_akta,
											berkas) 
											values 
											(
											$_POST[no],
											'$nama')";
				mysqli_query($koneksi,$querii);
				mysqli_close($koneksi);
				header('location:view.php');
			
?>