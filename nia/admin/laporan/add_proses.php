<?php
include "../../pages/coneksi/config.php";

$date= date("d/m/Y");
$querii="INSERT INTO laporan ( no_akta,
							tgl_akta,
							bentuk_hukum,
							nama_penjual,
							nama_pembeli,
							no_sertifikat,
							alamat_tanah,
							luas_tanah,
							luas_bangunan,
							harga_peralihan_hak,
							nop_tahun,
							njop,
							tgl_ssp,
							h_ssp,
							tgl_ssb,
							h_ssb,
							keterangan,
							tgl_laporan) 
							values 
							('$_POST[n_akta]',
							'$_POST[tgl_akta]',
							'$_POST[bph]',
							'$_POST[pmb]',
							'$_POST[pmn]',
							'$_POST[jnh]',
							'$_POST[ltb]',
							'$_POST[lt]',
							'$_POST[lb]',
							'$_POST[ht]',
							'$_POST[nop]',
							'$_POST[njop]',
							'$_POST[tgl_ssp]',
							'$_POST[rpsp]',
							'$_POST[tgl_ssb]',
							'$_POST[rpsb]',
							'$_POST[ket]',
							'$date')";
mysqli_query($koneksi,$querii);
mysqli_close($koneksi);
header('location:view.php');
?>