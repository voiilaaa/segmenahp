<?php
	include('config.php');
if (isset($_POST['booking'])) {

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$tanggal = $_POST['tanggal'];
	$waktu = $_POST['waktu'];
	$telepon = $_POST['telepon'];
	$keterangan = $_POST['keterangan'];
	$status = $_POST['status'];

	$sql = "INSERT INTO reservation (`fname`, `lname`, `tanggal`, `waktu` , `telepon` , `keterangan` , `status` ) VALUES ('$fname', '$lname', '$tanggal', '$waktu' , '$telepon' , '$keterangan' , '$status')";

		$simpan = mysqli_query($kon, $sql);
		if($simpan){
				echo"<script>alert('Succes Add Booking');window.location='index.php'</script>";
			}else{
				echo "<script>alert('Fail Add Booking');window.location='index.php'</script>";
			
		}
	}
?>