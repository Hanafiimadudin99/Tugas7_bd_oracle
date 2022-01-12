<?php 
include "../admin/koneksi.php";

$ID_TRAN = $_GET['ID_TRAN'];
$sql="DELETE FROM TRANSAKSI WHERE ID_TRAN = '$ID_TRAN'";
$prepare = ociparse($koneksi, $sql);
ociexecute($prepare);
oci_commit($koneksi);
header("location: laporan.php?pesan=hapus");
 ?>