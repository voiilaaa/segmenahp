<?php
	include('config.php');
if (isset($_POST['save'])) {

	$nama = $_POST['nama'];
	$jenis = $_POST['jenis'];
	$harga = $_POST['harga'];
	

	$sql = "INSERT INTO menu (`nama`, `jenis`, `harga`) VALUES ('$nama', '$jenis', '$harga')";

		$simpan = mysqli_query($kon, $sql);
		if($simpan){
				echo"<script>alert('Succes Add Menu');window.location='menu_table.php'</script>";
			}else{
				echo "<script>alert('Fail Add Menu');window.location='menu.php'</script>";
			
		}
	}
?>