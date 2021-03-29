<!DOCTYPE html>
<html>
<head>
	<title>BIODATA</title>
	<style type="text/css">
		body {background-color: #FBE8A6}

	</style>
</head>
<body>
<?php
	//untuk menampilkan kembali dari file lain
	echo "<h2><center>Harap di cek kembali</center></h2>";
	echo "<center><h3>Nama</h3>					".$_POST['nama']."</center><br>";
	echo "<center><h3>NPM</h3> 					".$_POST['npm']."</center><br>";
	echo "<center><h3>Tempat,tanggal lahir</h3> ".$_POST['ttl']."</center><br>";
	echo "<center><h3>Alamat Rumah</h3> 		".$_POST['alamat']."</center><br>";
	echo "<center><h3>NPWP</h3> 				".$_POST['npwp']."</center><br>";
	echo "<center><h3>Jurusan</h3> 				".$_POST['jurusan']."</center><br>";
	echo "<center><h3>Fakultas</h3> 			".$_POST['fakultas']."</center><br>";
?>
</body>
</html>
