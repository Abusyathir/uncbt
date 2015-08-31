<?php
	session_start();
	if(isset($_SESSION["mulai_waktu"]))
	{
		$telah_berlalu = time() - $_SESSION["mulai_waktu"];
	}
	else 
	{
		$_SESSION["mulai_waktu"] = time();
		$telah_berlalu = 0;
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Simulasi Ujian Online CBT</title>
	<link rel="stylesheet" href="../b-3.3.5-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../b-3.3.5-dist/css/custom.css">
</head>
<body>
	<!--Header-->
	<section class="container bg-primary" id="header">
		<div class="row">
			<div class="col-sm-2 col-md-2">
				<center><img class="img-circle" src="../img/LOGO.png" alt="Generic placeholder image" width="140" height="140">
				<!--<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">--></center>
			</div>
			<div class="col-sm-4 col-md-4">
				<h3 style="color:#FFF;">SIMULASI UJIAN NASIONAL ONLINE BIMBINGAN BELAJAR ...</h3>
			</div>
			<div class="col-sm-6 col-md-6">
				<p class="pull-right" style="padding-top:4px;">
					<button type="button" class="btn btn-info" onclick="location.href='../pages/'">Home</button>
					<button type="button" class="btn btn-info">Bantuan</button>
					<button type="button" class="btn btn-info">Keluar</button>
				</p>	
			</div>
		</div>
	</section>
	<!--Content Login-->
	<section class="container" id="content">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 bg-info" id="welcome">
				<h4 class="text-info">Selamat datang di Simulasi Ujian Nasional Berbasis Komputer</h4>
				<p>
					Petunjuk mengerjakan:
					<ul>
						<li>Kerjakan soal-soal berikut sesuai dengan kemampuan Anda, dilarang membuka buku atau catatan, menyontek, atau bekerja sama dengan peserta lain</li>
						<li>Gunakan kertas buram yang telah disediakan, apabila diperlukan untuk membantu perhitungan</li>
						<li>Pilihlah salah satu jawaban yang Anda anggap paling benar atau tepat. Anda dapat mengerjakan soal-soal yang Anda anggap mudah terlebih dahulu</li>
						<li>Apabila Anda telah selesai mengerjakan seluruh butir soal dan yakin untuk mengkahiri tes, klik "SELESAI"</li>
						<li>Perhatikan sisa waktu pada bagian kanan atas</li>
						<li>Klik tombol mata pelajaran yang Anda sukai untuk memulai mengerjakan soal.</li>
					</ul>
				</p>
				<div class="col-md-6">
					<p>
					<button type="button" class="btn btn-primary mbottom-5" onclick="mapel_mtkipa()">Matematika IPA</button>
					<button type="button" class="btn btn-primary mbottom-5" onclick="">Bahasa Indonesia</button>
					<button type="button" class="btn btn-primary mbottom-5" onclick="">Bahasa Inggris</button>
					<button type="button" class="btn btn-primary mbottom-5" onclick="mapel_load('Fisika')">Fisika</button>
					<button type="button" class="btn btn-primary mbottom-5" onclick="">Biologi</button>
					<button type="button" class="btn btn-primary mbottom-5" onclick="">Kimia</button>
					</p>
				</div>
				<div class="col-md-6">
					<p>
					<button type="button" class="btn btn-primary mbottom-5" onclick="">Matematika IPS</button>
					<button type="button" class="btn btn-primary mbottom-5" onclick="">Ekonomi</button>
					<button type="button" class="btn btn-primary mbottom-5" onclick="">Sosiologi</button>
					<button type="button" class="btn btn-primary mbottom-5" onclick="">Geografi</button>
					<button type="button" class="btn btn-primary mbottom-5" onclick="">Sejarah</button>
					</p>
				</div>
			</div>
		</div>
	</section>
	<!--Footer-->
	<section class="container" id="footer-login">
		<div class="row">
			<div class="col-md-12">
				<p class="text-muted">Aswan Kreasi Aplikasi &copy; 2015. All Rights Reserved</p>
			</div>
		</div>
	</section>
	<!--JavaScript-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../b-3.3.5-dist/js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../b-3.3.5-dist/js/bootstrap.min.js"></script>
	<!--Ajax Script-->
	<script src="../ajax/js/mapel.js"></script>
</body>
</html>