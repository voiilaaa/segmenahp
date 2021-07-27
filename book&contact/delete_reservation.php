<?php
include_once('config.php');

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$sql="DELETE FROM reservation WHERE id='$id'";
	$cek=mysqli_query($kon,$sql);
	if($cek)
		header('Location:reservation_table.php?pesan=Data Berhasil Di Hapus');
	else
		header('Location:reservation_table.php?pesan=Data Gagal Di Hapus');
}
?>