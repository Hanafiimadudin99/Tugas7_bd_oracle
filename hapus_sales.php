<?php 
include "../admin/koneksi.php";

$ID_SALES = $_GET['ID_SALES'];
$sql="DELETE FROM sales WHERE ID_SALES = '$ID_SALES'";
$prepare = ociparse($koneksi, $sql);
ociexecute($prepare);
oci_commit($koneksi);
header("location: sales.php?pesan=hapus");
 ?>