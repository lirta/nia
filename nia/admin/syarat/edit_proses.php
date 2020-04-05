<?php
 include "../../pages/coneksi/config.php";

$ak=$_POST['ak'];
$update="UPDATE syarat SET syarat='$_POST[sa]' WHERE id_syarat= '$_POST[id]'";
mysqli_query($koneksi,$update);
mysqli_close($koneksi);
header("location:detail.php?id=$ak");

?>