<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- form dengan method post  -->
	<form method="POST" action="hasilkirim.php">
		<!--membuat tabel-->
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<!--menampilkan text untuk membuat inputan-->
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<!--menampilkan button login dan reset-->
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="btnLogin" value="Login">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>