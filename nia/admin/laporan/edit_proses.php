<?php
 include "../../pages/coneksi/config.php";


$querii="UPDATE  laporan SET no_akta			='$_POST[n_akta]',
							tgl_akta			='$_POST[tgl_akta]',
							bentuk_hukum		='$_POST[bph]',
							nama_penjual		='$_POST[pmb]',
							nama_pembeli		='$_POST[pmn]',
							no_sertifikat		='$_POST[jnh]',
							alamat_tanah		='$_POST[ltb]',
							luas_tanah			='$_POST[lt]',
							luas_bangunan		='$_POST[lb]',
							harga_peralihan_hak	='$_POST[ht]',
							nop_tahun			='$_POST[nop]',
							njop				='$_POST[njop]',
							tgl_ssp				='$_POST[tgl_ssp]',
							h_ssp 				='$_POST[rpsp]',
							tgl_ssb 			='$_POST[tgl_ssb]',
							h_ssb 				='$_POST[rpsb]',
							keterangan			='$_POST[ket]',
							tgl_laporan			='$_POST[tgl_lap]'
							WHERE id_laporan	='$_POST[id]'";
mysqli_query($koneksi,$querii);
mysqli_close($koneksi);
header('location:view.php');

?>