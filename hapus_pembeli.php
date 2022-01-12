<?php 
include "../admin/koneksi.php";

$ID_PEMBELI = $_GET['ID_PEMBELI'];
$sql="DELETE FROM pembeli WHERE ID_PEMBELI = '$ID_PEMBELI'";
$prepare = ociparse($koneksi, $sql);
ociexecute($prepare);
oci_commit($koneksi);
header("location: pembeli.php?pesan=hapus");
 ?>