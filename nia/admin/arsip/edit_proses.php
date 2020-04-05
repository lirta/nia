<?php
 include "../../pages/coneksi/config.php";


			$acak = rand(00000000, 99999999);
			$namafoto = $_FILES['berkas']['name'];
			$nama = $acak.$namafoto;
			$folderawal = $_FILES['berkas']['tmp_name'];
			$foldertujuan="../berkas/";
			if (!empty($folderawal))
			 {
			move_uploaded_file($folderawal,$foldertujuan.$nama);
			$querii="UPDATE arsip SET no_akta 				='$_POST[no]',
										berkas				='$nama'
										where
										id_arsip 			='$_POST[id]'";
				mysqli_query($koneksi,$querii);
				mysqli_close($koneksi);
			    }else
			    {
		    	$querii="UPDATE arsip SET no_akta 				='$_POST[no]' where
											id_arsip 			='$_POST[id]'";
				mysqli_query($koneksi,$querii);
				mysqli_close($koneksi);
			    }
header('location:view.php');

?>