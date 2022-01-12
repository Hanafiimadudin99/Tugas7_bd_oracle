<?php 
include "../admin/koneksi.php"; 

$NAMA_SALES = $_POST['NAMA_SALES'];
$UMUR       = $_POST['UMUR'];
$ALAMAT     = $_POST['ALAMAT'];

$sql="INSERT INTO SALES VALUES ('','$NAMA_SALES','$UMUR','$ALAMAT')";
   $prepare = ociparse($koneksi, $sql);
   ociexecute($prepare);
   oci_commit($koneksi);
   

	if($prepare)
	{
	header('location:sales.php?pesan=input');
	}
	else {echo "gagal";}



 ?>