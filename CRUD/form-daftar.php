<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Siswa</title>

<!-- Link cssnya -->
<link rel="stylesheet" type="text/css" href="style.css">

<!-- Link Bootstrap  -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	  <div class="card mb-3" style="max-width: 1000px;">
		  <div class="row no-gutters">
		    <div class="col-lg-5">
		      <img src="img/smp2.png" alt="smp">
		    </div>
		    <div class="col-lg-7">
		      <div class="card-body">
		        <h2 class="card-title">Formulir Pendaftaran</h2>	
		        <form action="proses-pendaftaran.php" method="POST">
		        	<div class="form-group">
						<label for="nama">Nama:</label>
					    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
					</div>
		        	
		        	<div class="form-group">
					    <label for="alamat">Alamat:</label>
					    <textarea class="form-control" name="alamat" rows="3" placeholder="Alamat Lengkap"></textarea>
					</div>

					<div class="form-group">
					<label for="jenis_kelamin">Jenis Kelamin:</label>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki">
					  <label class="form-check-label" for="laki-laki">
					   	 Laki-laki
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan">
					  <label class="form-check-label" for="perempuan">
					   	Perempuan
					  </label>
					</div>
					</div>

					    <label for="agama">Agama:</label>
					    <select class="form-control" name="agama">
					    <option selected>Pilih...</option>
					      <option>Islam</option>
					      <option>Kristen</option>
					      <option>Katolik</option>
					      <option>Hindu</option>
					      <option>Buddha</option>
					      <option>Konghucu</option>
					      <option>kepercayaan Lain</option>
					    </select>

					<div class="form-group">
						<label for="sekolah_asal">Sekolah Asal:</label>
					    <input type="text" class="form-control" name="sekolah_asal" placeholder="Sekolah Asal">
					</div>

					<button type="submit" value="Daftar" name="daftar" class="btn btn-primary btn-lg btn-block">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
						  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
						</svg>	Daftar
					</button>

		        </form>      
		      </div>
		    <a class="btn btn-danger" href="index.php" role="button">
		      	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
				  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
				</svg></i>
				Kembali
			</a>
		    </div>
		  </div>
		</div>
	</div>

</body>
<!-- Link Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</html>