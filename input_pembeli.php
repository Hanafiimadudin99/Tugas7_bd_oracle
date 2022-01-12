<?php 
include "../admin/koneksi.php";

$NAMA_PEMBELI = $_POST['NAMA_PEMBELI'];
$ALAMAT_PEMBELI       = $_POST['ALAMAT_PEMBELI'];

$sql="insert into pembeli values ('','$NAMA_PEMBELI','$ALAMAT_PEMBELI')";
   $prepare = ociparse($koneksi, $sql);
   ociexecute($prepare);
   oci_commit($koneksi);
   

	if($prepare)
	{
	header('location:pembeli.php?pesan=input');
	}
	else {echo "gagal";}



 ?>