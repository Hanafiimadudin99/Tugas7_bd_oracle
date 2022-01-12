<?php 
include "../admin/koneksi.php";

$ID_ADMIN = $_POST['ID_ADMIN'];
$NAMA_ADMIN = $_POST['NAMA_ADMIN'];
$JK_ADMIN  = $_POST['JK_ADMIN'];
$ALAMAT_ADMIN  = $_POST['ALAMAT_ADMIN'];
$USERNAME  = $_POST['USERNAME'];

$sql = "UPDATE admin SET NAMA_ADMIN='$NAMA_ADMIN', JK_ADMIN='$JK_ADMIN', ALAMAT_ADMIN='$ALAMAT_ADMIN', USERNAME='$USERNAME' WHERE ID_ADMIN='$ID_ADMIN'";
	$prepare = ociparse($koneksi, $sql);
	ociexecute($prepare);
	oci_commit($koneksi);

	if($prepare)
	{
		header('location: admin.php?pesan=update');
	}
	else {echo "gagal";}
 ?>