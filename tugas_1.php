<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- form html dengan method post  -->
	<form method="POST" action="postAct_1.php">
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<!-- menampilkan berberapa inputan-->
			<tr>
				<td width="130"> Nama </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<!-- menampilkan button login dan reset -->
					<input allign type="submit" name="btnLogin" value="Login">
					<input type="submit" name="reset" value="Reset" >
				</td>
			</tr>
		</table>
		
<!-- untuk memanggil file lainnya,  -->
<?php 
	include 'tanggal_1.php';
 ?>
</body>
</html>