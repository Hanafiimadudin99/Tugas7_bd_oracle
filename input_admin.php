<?php 
include "../admin/koneksi.php"; 

$NAMA     = $_POST['NAMA'];
$ALAMAT   = $_POST['ALAMAT'];
$USERNAME = $_POST['USERNAME'];
$PASSWORD = $_POST['PASSWORD'];

$sql="INSERT INTO ADMIN VALUES ('','$NAMA','$ALAMAT','$USERNAME','$PASSWORD')";
   $prepare = ociparse($koneksi, $sql);
   ociexecute($prepare);
   oci_commit($koneksi);
   

	if($prepare)
	{
	header('location:admin.php?pesan=input');
	}
	else {echo "gagal";}



 ?>