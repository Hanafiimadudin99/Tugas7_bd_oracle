<?php 
include "../admin/koneksi.php";

$ID_USER = $_GET['ID_USER'];
$sql="DELETE FROM ADMIN WHERE ID_USER = '$ID_USER'";
$prepare = ociparse($koneksi, $sql);
ociexecute($prepare);
oci_commit($koneksi);
header("location: admin.php?pesan=hapus");
 ?>