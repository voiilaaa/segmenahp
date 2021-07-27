<?php
	include('config.php');
if (isset($_POST['save'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	

	$sql = "INSERT INTO admin (`username`, `password`) VALUES ('$username', '$password')";

		$simpan = mysqli_query($kon, $sql);
		if($simpan){
				echo"<script>alert('Succes Add Admin');window.location='admin_table.php'</script>";
			}else{
				echo "<script>alert('Fail Add Admin');window.location='admin.php'</script>";
			
		}
	}
?>