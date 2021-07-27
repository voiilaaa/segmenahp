<?php	
		include("includes/config.php");
		$config = new Config();
		$db = $config->getConnection();

		include_once('includes/kriteria.inc.php');
		$kriObj = new Kriteria($db);
?>

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabelalt">Pilih Kriteria</h4>
			</div>
			<div class="modal-body">
				<div class="list-group">
					<?php $kri1 = $kriObj->readAll(); while ($row = $kri1->fetch(PDO::FETCH_ASSOC)): ?>
						<a href="analisa-alternatif-tabel.php?kriteria=<?=$row['id_kriteria']?>" class="list-group-item"><?=$row['nama_kriteria']?></a>
					<?php endwhile; ?>
				</div>
			</div>