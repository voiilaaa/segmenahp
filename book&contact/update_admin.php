<?php
	include('config.php');

if (isset($_POST['updateadmin'])) {

	$id = $_POST['id'];

	$username = $_POST['username'];
	$password	= $_POST['password'];
	
	

	$sql = " UPDATE admin SET username='$username',password='$password' WHERE id='$id'";
	$simpan = mysqli_query($kon, $sql);

		if($simpan){
			echo"<script>alert('Succes Update Booking');window.location='admin_table.php'</script>";
		}else{
			echo "<script>alert('Fail Update Booking');window.location='admin_table.php'</script>";
		}
	}
?>