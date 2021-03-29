<?php 
//menampilkan tanggal sesuai jam indonesia
	date_default_timezone_set("Asia/Jakarta");	
	echo "<center>".date("G:i:s, D, m F Y ")."</center>";
 ?>