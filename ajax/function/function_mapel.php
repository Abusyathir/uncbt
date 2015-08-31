<?php
$op = $_POST['op'];
require_once('../../config/config.php');

if($op=="")
{
	//do nothing;
}

if($op=="mtkipa")
{
	?>
		<div class="row" id="content_mapel">
			<div class="col-md-10 col-md-offset-1 bg-info" id="infopeserta">
				<div class="col-md-6 table-responsive">
					<table width="100%">
						<tbody>
							<tr>
								<td width="30%">Nama</td><td width="5%">:</td><td></td>
							</tr>
							<tr>
								<td>Satuan Pendidikan</td><td>:</td><td></td>
							</tr>
							<tr>
								<td>No Ujian</td><td>:</td><td></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-6 table-responsive">
					<table width="100%">
						<tbody>
							<tr>
								<td width="30%">Jenjang</td><td width="5%">:</td><td>SMA</td>
							</tr>
							<tr>
								<td>Mata Ujian</td><td>:</td><td>Matematika</td>
							</tr>
							<tr>
								<td>Varian</td><td>:</td><td>IPA</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-md-3 col-md-offset-1" id="test_number">
				<div class="container-fluid" style="padding:0px; margin:0px;">
					<div class="row">
						<div class="col-md-12 col-xs-12"><p style="border-bottom:solid 1px #ccc; padding-bottom:6px;">Pilih Soal</p>
						</div>
						<div class="col-md-3 col-xs-3">
							<ul>
								<?php
									for($no=1; $no<=10; $no++)
									{
										if($no<10){$no = '0'.$no;}
										?>
										<li><a href="#test_content"><?php echo $no; ?></a></li>
										<?
									}
								?>
							</ul>
						</div>
						<div class="col-md-3 col-xs-3">
							<ul>
								<?php
									for($no=11; $no<=20; $no++)
									{
										?>
										<li><a href="#test_content"><?php echo $no; ?></a></li>
										<?
									}
								?>
							</ul>
						</div>
						<div class="col-md-3 col-xs-3">
							<ul>
								<?php
									for($no=21; $no<=30; $no++)
									{
										?>
										<li><a href="#test_content"><?php echo $no; ?></a></li>
										<?
									}
								?>
							</ul>
						</div>
						<div class="col-md-3 col-xs-3">
							<ul>
								<?php
									for($no=31; $no<=40; $no++)
									{
										?>
										<li><a href="#test_content"><?php echo $no; ?></a></li>
										<?
									}
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-7" id="test_content">
				<p class="rightp">Sisa waktu Anda: </p>
				
				<div class="col-md-12" id="soal_content">
					<ul>
						<li>1.</li>
						<li><img class="img-responsive" src="../img/fisika/401/1_fsk_401.png"></li>
					<ul>
				</div>
				<div class="col-md-12" id="jawaban_content">
					<form>
						<input type="radio" name="chooice" value="male"> A
						<br>
						<input type="radio" name="chooice" value="female"> B
						<br>
						<input type="radio" name="chooice" value="female"> C
						<br>
						<input type="radio" name="chooice" value="female"> D
						<br>
						<input type="radio" name="chooice" value="female"> E
					</form>
				</div>
				<div class="col-md-12" id="soal_footer">
					<div class="container-fluid" style="padding:0px; margin:0px;">
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<p>
									<button type="button" class="btn btn-primary mbottom-5" onclick="">&laquo;</button>
									<button type="button" class="btn btn-primary mbottom-5" onclick="">&raquo;</button>
								</p>
							</div>
							<div class="col-md-6 col-xs-6">
								<p>
									<button type="button" class="btn btn-danger mbottom-5" onclick="" style="width:106px;">Selesai</button>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?
}

if($op=="fisika")
{
	?>
		<div class="row" id="content_mapel">
			<!--Identitas peserta-->
			<div class="col-md-10 col-md-offset-1 bg-info" id="infopeserta">
				<div class="col-md-6 table-responsive">
					<table width="100%">
						<tbody>
							<tr>
								<td width="30%">Nama</td><td width="5%">:</td><td></td>
							</tr>
							<tr>
								<td>Satuan Pendidikan</td><td>:</td><td></td>
							</tr>
							<tr>
								<td>No Ujian</td><td>:</td><td></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-6 table-responsive">
					<table width="100%">
						<tbody>
							<tr>
								<td width="30%">Jenjang</td><td width="5%">:</td><td>SMA</td>
							</tr>
							<tr>
								<td>Mata Ujian</td><td>:</td><td>Fisika</td>
							</tr>
							<tr>
								<td>Varian</td><td>:</td><td>IPA</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1" id="content_mapel_soal">
				<!---pilihan paket dan soal-->
				<div class="col-md-3" id="test_number">
					<div id="paketdansoal" class="container-fluid" style="padding:0px; margin:0px;">
						<div class="row">
							<div class="col-md-12 col-xs-12"><p style="border-bottom:solid 1px #ccc; padding-bottom:6px;">Pilih Paket Soal</p>
							</div>
							<div class="col-md-12 col-xs-12">
								<form>
								<?php
									$paket = "SELECT * FROM paketsoal WHERE mapel='fisika' ORDER BY kode ASC";
									$qrypaket = mysql_query($paket);
									while($datapaket = mysql_fetch_array($qrypaket))
									{
										?>
										<button type="button" class="btn btn-default" onclick="paket_kode(<?php echo $datapaket['kode']; ?>)"><?php echo $datapaket['kode']; ?></button>
										<?
									}
								?>
								</form>
								<br/>
							</div>
						</div>
						<div class="row" id="isi_paket_soal">
							<!--
							
							-->
						</div>
					</div>
				</div>
				
				<!---Content soal-->
				<div class="col-md-9" id="test_content">
					<h5 class="text-danger"><center>Belum ada paket soal yang dipilih.<br/></center></h5>
					<!--
					
					-->
				</div>
				<!--end content-->
			</div>
		</div>
	<?php
}

if($op=="loadnumber")
{
	$kode = $_POST['kode'];
	?>
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<p style="border-bottom:solid 0px #ccc;" class="text-success"><strong>Anda memilih Paket Soal <?php echo $kode; ?></strong></p>
			<p style="border-bottom:solid 0px #ccc; padding-bottom:6px;">Silahkan pilih salah satu soal di bawah untuk mulai mengerjakan</p>
		</div>
	</div>
	<div class="row" id="isi_paket_soal">
		<div class="col-md-3 col-xs-3">
			<ul>
				<?php
					for($no=1; $no<=10; $no++)
					{
						//if($no<10){$no = '0'.$no;}
						?>
						<li><a href="#test_content" onclick="load_soal('<?php echo $no; ?>','<?php echo $kode; ?>')"><?php echo $no; ?></a></li>
						<?
					}
				?>
			</ul>
		</div>
		<div class="col-md-3 col-xs-3">
			<ul>
				<?php
					for($no=11; $no<=20; $no++)
					{
						?>
						<li><a href="#test_content" onclick="load_soal('<?php echo $no; ?>','<?php echo $kode; ?>')"><?php echo $no; ?></a></li>
						<?
					}
				?>
			</ul>
		</div>
		<div class="col-md-3 col-xs-3">
			<ul>
				<?php
					for($no=21; $no<=30; $no++)
					{
						?>
						<li><a href="#test_content" onclick="load_soal('<?php echo $no; ?>','<?php echo $kode; ?>')"><?php echo $no; ?></a></li>
						<?
					}
				?>
			</ul>
		</div>
		<div class="col-md-3 col-xs-3">
			<ul>
				<?php
					for($no=31; $no<=40; $no++)
					{
						?>
						<li><a href="#test_content" onclick="load_soal('<?php echo $no; ?>','<?php echo $kode; ?>')"><?php echo $no; ?></a></li>
						<?
					}
				?>
			</ul>
		</div>
	</div>
	<?php
}

if($op=="loadsoal")
{
	$kode = $_POST['kode'];
	$No_soal = $_POST['no'];
	?>
	<!---pilihan paket dan soal-->
	<div class="col-md-3" id="test_number">
		<div id="paketdansoal" class="container-fluid" style="padding:0px; margin:0px;">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<p style="border-bottom:solid 0px #ccc;" class="text-success"><strong>Anda memilih Paket Soal <?php echo $kode; ?></strong></p>
					<p style="border-bottom:solid 0px #ccc; padding-bottom:6px;">Silahkan pilih salah satu soal di bawah untuk mulai mengerjakan</p>
				</div>
			</div>
			<div class="row" id="isi_paket_soal">
				<div class="col-md-3 col-xs-3">
					<ul>
						<?php
							for($no=1; $no<=10; $no++)
							{
								//if($no<10){$no = '0'.$no;}
								?>
								<li><a href="#test_content" onclick="load_per_soal(<?php echo $no; ?>,<?php echo $kode; ?>)"><?php echo $no; ?></a></li>
								<?
							}
						?>
					</ul>
				</div>
				<div class="col-md-3 col-xs-3">
					<ul>
						<?php
							for($no=11; $no<=20; $no++)
							{
								?>
								<li><a href="#test_content" onclick="load_per_soal(<?php echo $no; ?>,<?php echo $kode; ?>)"><?php echo $no; ?></a></li>
								<?
							}
						?>
					</ul>
				</div>
				<div class="col-md-3 col-xs-3">
					<ul>
						<?php
							for($no=21; $no<=30; $no++)
							{
								?>
								<li><a href="#test_content" onclick="load_per_soal(<?php echo $no; ?>,<?php echo $kode; ?>)"><?php echo $no; ?></a></li>
								<?
							}
						?>
					</ul>
				</div>
				<div class="col-md-3 col-xs-3">
					<ul>
						<?php
							for($no=31; $no<=40; $no++)
							{
								?>
								<li><a href="#test_content" onclick="load_per_soal('<?php echo $no; ?>','<?php echo $kode; ?>')"><?php echo $no; ?></a></li>
								<?
							}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<!---Content soal-->
	<div class="col-md-9" id="test_content">
		<p class="rightp">Sisa waktu Anda: </p>
		<div id="wraper_soal_option">
			<div class="col-md-12" id="soal_content">
				<?
				$ambilsoal = "SELECT * FROM soal_soal WHERE no='$No_soal' && kode='$kode'";
				$qryambilsoal = mysql_query($ambilsoal);
				$datasoal = mysql_fetch_array($qryambilsoal);
				?>
				<ul>
					<li><?php echo $No_soal; ?>. </li>
					<li><img class="img-responsive" src="../<?php echo $datasoal['content_soal']; ?>"></li>
				<ul>
			</div>
			<div class="col-md-12" id="jawaban_content">
				<form>
					<input type="radio" name="chooice" value="A"> A
					<br>
					<input type="radio" name="chooice" value="B"> B
					<br>
					<input type="radio" name="chooice" value="C"> C
					<br>
					<input type="radio" name="chooice" value="D"> D
					<br>
					<input type="radio" name="chooice" value="E"> E
				</form>
			</div>
		</div>
		<div class="col-md-12" id="soal_footer">
			<div class="container-fluid" style="padding:0px; margin:0px;">
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<p>
							<button type="button" class="btn btn-danger mbottom-5" onclick="" style="width:106px;">Selesai</button>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end content-->
	<?php
}

if($op=="load_soal_dipilih")
{
	$kode = $_POST['kode'];
	$No_soal_dipilih = $_POST['nodipilih'];
	?>
	<div class="col-md-12" id="soal_content">
		<?
		$ambilsoal = "SELECT * FROM soal_soal WHERE no='$No_soal_dipilih' && kode='$kode'";
		$qryambilsoal = mysql_query($ambilsoal);
		$datasoal = mysql_fetch_array($qryambilsoal);
		?>
		<ul>
			<li><?php echo $No_soal_dipilih; ?>. </li>
			<li><img class="img-responsive" src="../<?php echo $datasoal['content_soal']; ?>"></li>
		<ul>
	</div>
	<div class="col-md-12" id="jawaban_content">
		<form>
			<input type="radio" name="chooice" value="A"> A
			<br>
			<input type="radio" name="chooice" value="B"> B
			<br>
			<input type="radio" name="chooice" value="C"> C
			<br>
			<input type="radio" name="chooice" value="D"> D
			<br>
			<input type="radio" name="chooice" value="E"> E
		</form>
	</div>
	<?
}
?>