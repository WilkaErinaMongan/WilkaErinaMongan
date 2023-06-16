<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rekomendasi</title>

	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

	<!-- leaflet routing machine -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />

	<!-- leaflet locate -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.css" />

	<style>
		html, body {
			height: 100%;
			margin: 0;
		}
		.leaflet-container {
			height: 400px;
			width: 600px;
			max-width: 100%;
			max-height: 100%;
		}
        .content {
            background-image: url('assets/img/back_main2.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

    </style>

	 <!-- local css -->
	 <link rel="stylesheet" href="assets/css/style.css">

	 <!-- bootstrap css -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	 
</head>
<body class="content">
	<!-- leaflet js locate -->
	<script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>

	<!-- leaflet js routing machine -->
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

	<center>
		<h1 class="ml16">Mau makan apa hari ini?</h1>
	</center>

	<center class="tombol">
		<div class="row justify-content-center">
		  <div class="col-2">
			<a href="rekomendasi.php">
			</a>
		  </div>
	</center>

	<center class="tombol">
		<div class="row justify-content-center">
		  <div class="col-2">
			<a href="rekomendasi.php">
				<button type="button" id="tombol" class="btn btn-secondary btn-lg">Rekomendasi</button>
			</a>
		  </div>
		  <div class="col-2 ">
			<a href="baksobabi.php">
				<button type="button" id="tombol" class="btn btn-secondary btn-lg">Bakso Babi</button>
			</a>
		  </div>
		  <div class="col-2 ">
			<a href="cafe.php">
				<button type="button" id="tombol" class="btn btn-secondary btn-lg">Cafe & Resto</button>
			</a>
		  </div>
		  <div class="col-2 ">
			<a href="warung.php">
				<button type="button" id="tombol" class="btn btn-secondary btn-lg">Warung Makan</button>
			</a>
		  </div>
		  <div class="col-1 ">
			<a href="logout.php">
				<button type="button" id="tombol" class="btn btn-danger btn-lg">Logout</button>
			</a>
		  </div>
		</div>
		
	</center>
	<br>
<br>

<div class="card-group">
  <div class="card">
  <img src="cafetori.PNG" class="card-img-top" height="400px">
    <div class="card-body">
      <h5 class="card-title">
	  <?php
include "../koneksi.php";
$tampildata = 'SELECT judul FROM makanan WHERE id = 1';
$query = mysqli_query($koneksi, $tampildata);
while ($row = mysqli_fetch_array($query))
{
    echo '<td>'. $row ['judul'].'</td>';
}
?>
<br><br>
<?php
include "../koneksi.php";
$tampildata = 'SELECT info FROM makanan WHERE id = 1';
$query = mysqli_query($koneksi, $tampildata);
while ($row = mysqli_fetch_array($query))
{
    echo '<td>'. $row ['info'].'</td>';
}
?> 
    </div>
  </div>


  <div class="card">
  <img src="5.PNG" class="card-img-top" height="400px">
    <div class="card-body">
      <h5 class="card-title">
      <?php
include "../koneksi.php";
$tampildata = 'SELECT judul FROM makanan WHERE id = 2';
$query = mysqli_query($koneksi, $tampildata);
while ($row = mysqli_fetch_array($query))
{
    echo '<td>'. $row ['judul'].'</td>';
}
?>
<br><br>
<?php
include "../koneksi.php";
$tampildata = 'SELECT info FROM makanan WHERE id = 2';
$query = mysqli_query($koneksi, $tampildata);
while ($row = mysqli_fetch_array($query))
{
    echo '<td>'. $row ['info'].'</td>';
}
?> 


    </div>
  </div>
  <div class="card">
  <img src="7.PNG" class="card-img-top" height="400px">
    <div class="card-body">
      <h5 class="card-title">
      <?php
include "../koneksi.php";
$tampildata = 'SELECT judul FROM makanan WHERE id = 3';
$query = mysqli_query($koneksi, $tampildata);
while ($row = mysqli_fetch_array($query))
{
    echo '<td>'. $row ['judul'].'</td>';
}
?>
<br><br>
 <?php
include "../koneksi.php";
$tampildata = 'SELECT info FROM makanan WHERE id = 3';
$query = mysqli_query($koneksi, $tampildata);
while ($row = mysqli_fetch_array($query))
{
    echo '<td>'. $row ['info'].'</td>';
}
?>
    </div>
  </div>
</div>
	
	<!-- moving letter js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- local js -->
    <script src="assets/js/script.js"></script>
</body>
</html>