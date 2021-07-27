<?php
include_once 'includes/header.inc.php';

include_once 'includes/nilai.inc.php';
$pro3 = new Nilai($db);


include_once 'includes/alternatif.inc.php';
$pro1 = new Alternatif($db);
$stmt1 = $pro1->readAlluser();
$stmt4 = $pro1->readAllmt();
$stmt3 = $pro1->readAllmb();
$stmt6 = $pro1->readAllsc();
$stmt7 = $pro1->readAllnc();
$stmt8 = $pro1->readAllteh();

include_once 'includes/kriteria.inc.php';
$pro2 = new Kriteria($db);
$stmt2 = $pro2->readAll();

include_once 'includes/bobot.inc.php';
$pro5 = new Bobot($db);
$stmt5 = $pro5->readAll();
?>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="jumbotron">
			    <h1>Selamat datang!</h1>
			    <p>Silahkan Pilih Menu Anda!</p>
			</div>
			<br/>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Manual Brew</h3>
						</div>
						<div class="panel-body">
							<ol>
								<?php while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) : ?>
									<li><?php echo $row3['nama'] ?> - Rp.<?php echo $row3['Harga'] ?></li>
								<?php endwhile; ?>
							</ol>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Speciality Coffee</h3>
						</div>
						<div class="panel-body">
							<ol>
								<?php while ($row2 = $stmt6->fetch(PDO::FETCH_ASSOC)) : ?>
									<li><?php echo $row2['nama'] ?> - Rp.<?php echo $row2['Harga'] ?></li>
								<?php endwhile; ?>
							</ol>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Non-Coffee</h3>
						</div>
						<div class="panel-body">
							<ol>
								<?php while ($row5 = $stmt7->fetch(PDO::FETCH_ASSOC)) : ?>
									<li><?php echo $row5['nama'] ?> - Rp.<?php echo $row5['Harga'] ?></li>
								<?php endwhile; ?>
							</ol>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Teh</h3>
						</div>
						<div class="panel-body">
							<ol>
								<?php while ($row6 = $stmt8->fetch(PDO::FETCH_ASSOC)) : ?>
									<li><?php echo $row6['nama'] ?> - Rp.<?php echo $row6['Harga'] ?></li>
								<?php endwhile; ?>
							</ol>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Menu Terbaik Kopi Segmen <img src="img/crown.png" width="5%"></h3>
						</div>
						<div class="panel-body">
							<ol>
							<?php while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)) : ?>
								<li><?php echo $row4['nama'] ?> - Rp.<?php echo $row4['Harga'] ?></li>
							<?php endwhile; ?>
							</ol>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Signature Coffee</h3>
						</div>
						<div class="panel-body">
							<ol>
							<?php while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) :?>
								<li><?php echo $row1['nama'] ?> - Rp.<?php echo $row1['Harga'] ?></li>
							<?php endwhile; ?>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<hr>
	<footer class="text-center">&copy; Kelompok 6 CCIT 5</footer>
	<br>
	<br>
	</div>

	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/highcharts.js"></script>
	<script src="assets/js/exporting.js"></script>
</body>
</html>
