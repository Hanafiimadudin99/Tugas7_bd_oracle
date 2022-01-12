<?php 
include "../admin/koneksi.php";

$KD_KENDARAAN = $_GET['KD_KENDARAAN'];
$sql="DELETE FROM kendaraan WHERE KD_KENDARAAN = '$KD_KENDARAAN'";
$prepare = ociparse($koneksi, $sql);
ociexecute($prepare);
oci_commit($koneksi);
header("location: kendaraan.php?pesan=hapus");
 ?>