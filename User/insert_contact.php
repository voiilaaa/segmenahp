<?php
	include('config.php');
if (isset($_POST['contact'])) {

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$pesan = $_POST['pesan'];
	
	$sql = "INSERT INTO contact (`nama`, `email`, `subject`, `pesan`) VALUES ('$nama', '$email', '$subject', '$pesan')";

		$simpan = mysqli_query($kon, $sql);
		if($simpan){
				echo"<script>alert('Succes Add Booking');window.location='index.php'</script>";
			}else{
				echo "<script>alert('Fail Add Booking');window.location='index.php'</script>";
			
		}
	}
?>