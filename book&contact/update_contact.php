<?php
	include('config.php');

if (isset($_POST['updatecontact'])) {

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$email	= $_POST['email'];
	$subject = $_POST['subject'];
	$pesan = $_POST['pesan'];
	

	$sql = " UPDATE contact SET nama='$nama',email='$email',subject='$subject' , pesan='$pesan' WHERE id='$id'";
	$simpan = mysqli_query($kon, $sql);

		if($simpan){
			echo"<script>alert('Succes Update Contact');window.location='contact_table.php'</script>";
		}else{
			echo "<script>alert('Fail Update Contact');window.location='contact_table.php'</script>";
		}
	}
?>