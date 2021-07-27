<?php
	include('config.php');

if (isset($_POST['updatereservation'])) {

	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$tanggal = $_POST['tanggal'];
	$waktu = $_POST['waktu'];
	$telepon = $_POST['telepon'];
	$keterangan = $_POST['keterangan'];
	$status = $_POST['status'];
	

	$sql = " UPDATE reservation SET fname='$fname',lname='$lname',tanggal='$tanggal' , waktu='$waktu' , telepon='$telepon' , keterangan='$keterangan' , status='$status' WHERE id='$id'";
	$simpan = mysqli_query($kon, $sql);

		if($simpan){
			echo"<script>alert('Succes Update Reservation');window.location='reservation_table.php'</script>";
		}else{
			echo"<script>alert('Failed Update Reservation');window.location='reservation_table.php'</script>";
		}
	}
?>