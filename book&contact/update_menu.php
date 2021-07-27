<?php
	include('config.php');

if (isset($_POST['updatemenu'])) {

	$id = $_POST['id'];

	$nama = $_POST['nama'];
	$jenis	= $_POST['jenis'];
	$harga = $_POST['harga'];
	

	$sql = " UPDATE menu SET nama='$nama',jenis='$jenis',harga='$harga' WHERE id='$id'";
	$simpan = mysqli_query($kon, $sql);

		if($simpan){
			echo"<script>alert('Succes Update Menu');window.location='menu_table.php'</script>";
		}else{
			echo "<script>alert('Fail Update Menu');window.location='menu_table.php'</script>";
		}
	}
?>