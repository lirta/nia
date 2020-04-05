<?php 
include 'assets/coneksi/config.php';


$acak = rand(00000000, 99999999);
$date= date("d/m/Y");

$id=$acak;
$id_akta=$_POST['akta'];
$nama=$_POST['nama'];
$hp=$_POST['hp'];
$alamat=$_POST['alamat'];
$status="PERMOHONAN";

$jml=$_POST['jml'];

$namasya=$_POST['sya'];
// $fille=$_POST["gm"];
$namafoto = $_FILES['gm']['name'];
$folderawal = $_FILES['gm']['tmp_name'];

 $queri="INSERT INTO permohonan ( id_permohonan,
 									tgl_pengajuan,
 									jenis_akta,
 									nama,
 									hp,
 									alamat,
 									status) 
									values 
 									('$id',
 									'$date',
 									'$id_akta',
									'$nama',
 									'$hp',
 									'$alamat',
 									'$status')";
 mysqli_query($koneksi,$queri);

for ($i=0;$i<$jml;$i++)
  	{
  		$nmsyrat=$namasya["$i"];
  		$filee=$namafoto["$nmsyrat"];
  		$fileA=$folderawal["$nmsyrat"];
		$nama = $acak.$filee;
		$foldertujuan="assets/file/";
		move_uploaded_file($fileA,$foldertujuan.$nama);
		$querii="INSERT INTO file_permohonan ( id_permohonan,
									nama_file,
									file) 
									values 
									('$id',
									'$nmsyrat',
									'$nama')";
		mysqli_query($koneksi,$querii);
  	}
mysqli_close($koneksi);
echo '<script language="javascript">
      alert ("PENGAJUAN PERMOHONAN ADA BERHASIL SILAHKAN MENUNGGU KONFIRMASI DARI ADMIN KAMI");
      window.location="index.php";
      </script>';
      exit();

?>