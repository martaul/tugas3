<!DOCTYPE html>
<html>
<head>
	<title>Martaulina</title>

<!-- Link cssnya -->
<link rel="stylesheet" type="text/css" href="style.css">

<!-- Link Bootstrap  -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
			  <a class="navbar-brand" href="list-">Martaulina | 201910225229</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			    <div class="navbar-nav ml-auto">
			      <a class="nav-link active" href="#">Beranda <span class="sr-only">(current)</span></a>
			      <a class="nav-link" href="#">Profil</a>
			      <a class="nav-link" href="#">Akademik</a>
			      <a class="nav-link" href="list-siswa.php">List Siswa</a>
			      <a class="btn tombol" style="background-color: #ADDFFF;" href="form-daftar.php">Pendaftaran</a>
			    </div>
			  </div>
		 </div>
	</nav>
	<!-- Akhir Navbar -->

	<!-- carousel -->

	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="img/slide1.png" class="d-block w-100" alt="sekolah 1">
		    </div>
		    <div class="carousel-item">
		      <img src="img/slide2.png" class="d-block w-100" alt="sekolah 2">
		    </div>
		    <div class="carousel-item">
		      <img src="img/slide3.png" class="d-block w-100" alt="sekolah 3">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		<div class="carousel-caption">
		   <h5>Pendaftaran Siswa</h5>
		   <p>SMP Nusa Bangsa</p>
		</div>
	</div>
	<!-- akhir carousel -->
	<div class="container">
	<!-- Info Panel -->
			<div class="row justify-content-center">
				<div class="col-10 info-panel">
					<div class="row">
						<div class="col-lg">
							<img src="img/icon1.png" alt="lope" class="float-left">
							<h4>Profesional</h4>
							<p>Tenaga Pendidik Yang profesional</p>
						</div>

						<div class="col-lg">
							<img src="img/icon2.png" alt="persik" class="float-left">
							<h4>Terbaik</h4>
							<p>Menghasilakan lulusan terbaik </p>
						</div>

						<div class="col-lg">
							<img src="img/icon3.png" alt="ceri" class="float-left">
							<h4>Lengkap</h4>
							<p>Fasilitas Penunjang yang lengkap </p>
						</div>
					</div>
				</div>
			</div>
	<!-- Akhir info Panel -->

	<!-- tentang kami -->
			<div class="row tentang">
				<div class="col-lg-5">
					<div class="parallax"></div>
				</div>
				<div class="col-lg-6">
					<h3>Sekolah <span>bermutu,</span><br>mencetak generasi <br>yang <span>berilmu.</span></h3>
					<p>SMP Nusa Bangsa Merupakan salah satu sekolah favorit di Bekasi, Jawa Barat, Indonesia. Sekolah ini berada di jalan Tanjung Anom 12.</p>
					<a href="#" class="btn tombol" style="background-color: #ADDFFF;">Tentang Kami</a>
				</div>
			</div>
	<!-- tentang kami -->
	</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ADDFFF" fill-opacity="1" d="M0,32L48,37.3C96,43,192,53,288,85.3C384,117,480,171,576,176C672,181,768,139,864,112C960,85,1056,75,1152,69.3C1248,64,1344,64,1392,64L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
	

<!-- Berita -->
	<div class="berita">
		<div class="container">
		<h2>Berita Terbaru</h2>
			<div class="card-deck">
			  <div class="card">
			    <img src="img/berita1.png" class="card-img-top" alt="berita1" style="width: 350px; height: 350px">
			    <div class="card-body">
			      <h5 class="card-title">Info Lomba</h5>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			    </div>
			  </div>
			  <div class="card">
			    <img src="img/berita2.png" class="card-img-top" alt="berita2" style="width: 350px; height: 350px">
			    <div class="card-body">
			      <h5 class="card-title">Kalender Akademik</h5>
			      <p class="card-text"><small class="text-muted">Last updated 1 hrs ago</small></p>
			      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
			    </div>
			  </div>
			  <div class="card">
			    <img src="img/berita3.png" class="card-img-top" alt="..." style="width: 350px; height: 350px">
			    <div class="card-body">
			      <h5 class="card-title">Info Pembayaran </h5>
			      <p class="card-text"><small class="text-muted">Last updated 3 month ago</small></p>
			      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Proin sed libero enim sed faucibus turpis in. Malesuada fames ac turpis egestas sed tempus urna et pharetra. </p>
			    </div>
			  </div>
			</div>
		</div>
	</div>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ADDFFF" fill-opacity="1" d="M0,288L48,256C96,224,192,160,288,149.3C384,139,480,181,576,208C672,235,768,245,864,213.3C960,181,1056,107,1152,85.3C1248,64,1344,96,1392,112L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>

<footer>By Martaulina Kelas:TIF4A6, NPM:201910225229, Matkul: Pemograman Web </footer>

<!-- akhir berita -->
</body>
<!-- Link Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</html>