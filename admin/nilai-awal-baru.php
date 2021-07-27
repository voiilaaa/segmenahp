<?php
include_once('includes/header.inc.php');

include_once('includes/alternatif.inc.php');
$altObj = new Alternatif($db);
$alt = $altObj->readAll();

include_once('includes/kriteria.inc.php');
$kriObj = new Kriteria($db);
$kri = $kriObj->readAll();

if ($_POST) {
    include_once('includes/nilai-awal.inc.php');
    $nilObj = new NilaiAwal($db);
    $nilObj->id_alternatif = $_POST['id_alternatif'];
    $nilai = (array_sum($_POST["kriteria"]) / $kriObj->countAll());
    $nilObj->nilai = $nilai;
    $nilObj->keterangan = $nilObj->getRange($nilai);

    if ($nilObj->insert()) {
      $id = $db->lastInsertId();
      include_once('includes/nilai-awal-detail.inc.php');
      $nilDObj = new NilaiAwalDetail($db);
			foreach ($_POST["kriteria"] as $k => $v) {
        $nilDObj->id_nilai = $id;
        $nilDObj->id_kriteria = $k;
        $nilDObj->nilai = $_POST["kriteria"][$k];
				if (!$nilDObj->insert()) {
          echo "<script type=\"text/javascript\">
  						window.onload=function(){
  							showStickyErrorToast();
  						};
  				</script>";
				}
			}
			echo "<script type=\"text/javascript\">
						window.onload=function(){
							showStickySuccessToast();
						};
				</script>";
    } else {
				echo "<script type=\"text/javascript\">
						window.onload=function(){
							showStickyErrorToast();
						};
				</script>";
		}
}
?>
<div class="row">
	  <div class="col-xs-12 col-sm-12 col-md-12">
			  <ol class="breadcrumb">
					  <li><a href="index.php">Beranda</a></li>
					  <li><a href="nilai-awal.php">Nilai Awal</a></li>
					  <li class="active">Tambah Data</li>
				</ol>
		  	<p style="margin-bottom:10px;">
			  		<strong style="font-size:18pt;"><span class="fa fa-clone"></span> Tambah Nilai Preferensi</strong>
			  		<p>Berikut adalah subkriteria-subkriteria dari Kriteria AHP Kopi Segmen:<br> a. Rasa (Sangat baik : 3, Baik : 2, Cukup : 1)<br> b. Harga (Rp.0 - Rp.18.000 : 3, Rp.18.500 - Rp.20.000 : 2, Rp. 20.000+ : 3)<br> c. Porsi (Liter)<br> d. Bahan(Jumlah Bahan yang di pakai)</p>
		  	</p>
	  	<div class="panel panel-default">
					<div class="panel-body">
						<form method="post">
                <div class="form-group">
                    <label for="id_alternatif">Nama Menu</label>
                    <select class="form-control" id="id_alternatif" name="id_alternatif">
                        <option value="">---</option>
                        <?php while ($row = $alt->fetch(PDO::FETCH_ASSOC)) : ?>
                            <option value="<?=$row["id_alternatif"]?>"><?=$row["nama"]?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <?php while ($row = $kri->fetch(PDO::FETCH_ASSOC)) : ?>
                  <div class="form-group">
                      <label for="<?=$row["nama_kriteria"]?>"><?=ucfirst($row["nama_kriteria"])?></label>
                      <input type="text" name="kriteria[<?=$row["id_kriteria"]?>]" class="form-control">
                  </div>
                <?php endwhile; ?>
								<div class="btn-group">
										<button type="submit" class="btn btn-dark">Simpan</button>
										<button type="button" onclick="location.href='nilai-awal.php'" class="btn btn-default">Kembali</button>
								</div>
						</form>
					</div>
			</div>
	  </div>
</div>

<?php include_once('includes/footer.inc.php');?>
