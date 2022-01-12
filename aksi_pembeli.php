<?php 
include ("koneksi.php");

$act=$_GET['act'];

if ($act=='delete'){
	$ID_PEMBELI=$_GET['ID_PEMBELI'];
	$sql="DELETE FROM pembeli WHERE ID_PEMBELI = '$ID_PEMBELI'";
	$prepare = ociparse($koneksi, $sql);
	ociexecute($prepare);
	oci_commit($koneksi);
	header('location:pembeli.php');
}

elseif ($act=='input'){

	$NAMA_PEMBELI = $_POST["NAMA_PEMBELI"];
 	$ALAMAT = $_POST["ALAMAT"];

   $sql="INSERT INTO pembeli VALUES ('','$NAMA_PEMBELI','$ALAMAT') ";
   $prepare = ociparse($koneksi, $sql);
   ociexecute($prepare);
   oci_commit($koneksi);
   

	if($prepare)
	{
	header('location:pembeli.php?pesan=input');
	}
	else {echo "gagal";}

}

elseif ($act=='update'){
	$ID_PEMBELI = $_POST['ID_PEMBELI'];
	$NAMA_PEMBELI = $_POST['NAMA_PEMBELI'];
	$ALAMAT = $_POST['ALAMAT'];

	$sql = "UPDATE pembeli SET NAMA_PEMBELI='$NAMA_PEMBELI', ALAMAT='$ALAMAT' WHERE ID_PEMBELI='$ID_PEMBELI'";
	$prepare = ociparse($koneksi, $sql);
	ociexecute($prepare);
	oci_commit($koneksi);

	if($prepare)
	{
		header('location: pembeli.php');
	}
	else {echo "gagal";}
}
 ?>