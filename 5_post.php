<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- form html dengan method post  -->
	<form method="POST" action="postAct.php">
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<!-- menampilkan inputan nama dan email -->
			<tr>
				<td width="130"> Nama </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>
					<!-- menampilkan button login dan reset -->
					<input type="submit" name="btnLogin" value="Login">
					<input type="submit" name="reset" value="Reset">
				</td>
			</tr>
		</table>
</body>
</html>