<?php 
include "../admin/koneksi.php";

$ID_KELAPA = $_POST['ID_KELAPA'];
$JENIS_KELAPA = $_POST['JENIS_KELAPA'];
$HARGA_KELAPA  = $_POST['HARGA_KELAPA'];

$sql = "UPDATE kelapa SET JENIS_KELAPA='$JENIS_KELAPA', HARGA_KELAPA='$HARGA_KELAPA' WHERE ID_KELAPA='$ID_KELAPA'";
	$prepare = ociparse($koneksi, $sql);
	ociexecute($prepare);
	oci_commit($koneksi);

	if($prepare)
	{
		header('location: kelapa.php?pesan=update');
	}
	else {echo "gagal";}
 ?>