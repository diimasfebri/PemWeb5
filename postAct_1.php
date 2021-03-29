<!-- <?php 
//menampilkan kembali nilai variabel dari file lain
	// echo "<center>Nama :".$_POST['nama']."</center><br>";
	// echo "<center>Email :".$_POST['email']."</center><br>";
//memanggil fungsi dari file lain
	// include 'tanggal_1.php';
 ?> -->

 <?php
	//akan memilah inputan nilai dari hasil submit user 
	if (empty($_POST['nama'])&&empty($_POST['email'])) {
		//jika inputan kosong maka akan memanggil file redirect
		header("Location:tugas_2_redirect.php");
	} else {
		//menampilkan kembali nilai variabel dari file lain
		echo "<center>Nama :".$_POST['nama']."</center><br>";
		echo "<center>Email :".$_POST['email']."</center><br>";
		//memanggil fungsi dari file lain
		include 'tanggal_1.php';
	}
	
?>