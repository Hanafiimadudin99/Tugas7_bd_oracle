<?php 
include "../admin/koneksi.php";

$KD_KENDARAAN   = $_POST['KD_KENDARAAN'];
$MERK_KENDARAAN = $_POST['MERK_KENDARAAN'];
$STOK           = $_POST['STOK'];
$HARGA_JUAL     = $_POST['HARGA_JUAL'];

$sql = "UPDATE KENDARAAN SET MERK_KENDARAAN='$MERK_KENDARAAN', STOK='$STOK', HARGA_JUAL='$HARGA_JUAL' WHERE KD_KENDARAAN='$KD_KENDARAAN'";
	$prepare = ociparse($koneksi, $sql);
	ociexecute($prepare);
	oci_commit($koneksi);

	if($prepare)
	{
		header('location: kendaraan.php?pesan=update');
	}
	else {echo "gagal";}
 ?>