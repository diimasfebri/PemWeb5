<!DOCTYPE html>
<html>
<head>
	<title>Konversi Tipe</title>
</head>
<body>
<?php 
//inisialisasi variabel
$a = 300.4;
echo $a;
//menampilkan konversi variabel ke berberapa tipe data
echo "<br>";
echo "tipe double : ", doubleval($a), "<br>";
echo "tipe Integer : ", intval($a), "<br>";
echo "tipe string : ", strval($a);
 ?>
</body>
</html>