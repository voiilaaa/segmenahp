<?php
include_once('config.php');

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$sql="DELETE FROM contact WHERE id='$id'";
	$cek=mysqli_query($kon,$sql);
	if($cek)
		header('Location:contact_table.php?pesan=Data Berhasil Di Hapus');
	else
		header('Location:contact_table.php?pesan=Data Gagal Di Hapus');
}
?>