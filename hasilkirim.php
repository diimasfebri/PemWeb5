<?php
	//akan memilah inputan nilai dari hasil submit user 
	if (empty($_POST['nama'])) {
		//jika inputan kosong maka akan memanggil file redirect
		header("Location:kosong.php");
	} else {
		//jika inputan berisikan nilai maka akan ditampilkan kembali
		echo "<center>Nama:".$_POST['nama']."</center><br>";
	}
	
?>