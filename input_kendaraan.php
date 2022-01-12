<?php 
include "../admin/koneksi.php"; 

$KD_KENDARAAN    = $_POST['KD_KENDARAAN'];
$MERK_KENDARAAN  = $_POST['MERK_KENDARAAN'];
$STOK    		 = $_POST['STOK'];
$HARGA_JUAL    	 = $_POST['HARGA_JUAL'];

$sql="INSERT INTO KENDARAAN VALUES ('$KD_KENDARAAN','$MERK_KENDARAAN','$STOK','$HARGA_JUAL')";
   $prepare = ociparse($koneksi, $sql);
   ociexecute($prepare);
   oci_commit($koneksi);
   

	if($prepare)
	{
	header('location:kendaraan.php?pesan=input');
	}
	else {echo "gagal";}



 ?>