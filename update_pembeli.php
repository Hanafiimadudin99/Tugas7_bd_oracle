<?php 
include "../admin/koneksi.php";

$ID_PEMBELI = $_POST['ID_PEMBELI'];
$NAMA_PEMBELI = $_POST['NAMA_PEMBELI'];
$ALAMAT  = $_POST['ALAMAT'];

$sql = "UPDATE pembeli SET NAMA_PEMBELI='$NAMA_PEMBELI', ALAMAT='$ALAMAT' WHERE ID_PEMBELI='$ID_PEMBELI'";
	$prepare = ociparse($koneksi, $sql);
	ociexecute($prepare);
	oci_commit($koneksi);

	if($prepare)
	{
		header('location: pembeli.php?pesan=update');
	}
	else {echo "gagal";}
 ?>