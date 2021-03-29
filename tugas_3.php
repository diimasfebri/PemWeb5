<!DOCTYPE html>
<html>
<head>
	<title>BIODATA</title>
	<style type="text/css">
		body {background-color: #FBE8A6}
		h1{font-family: fantasy; text-align: center;}
	</style>
</head>
<body>
	<!-- form dengan method post -->
	<form method="POST" action="postAct_3.php">
		<h1>BIODATA DIRI</h1>
		<h3 align="center">Silahkan isi data dibawah ini!</h3>
		<table width="400" align="center" cellpadding="2" cellspacing="3">
			<!--membuat berberapa inputan-->
			<tr>
				<td width="130">Nama Lengkap</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">NPM</td>
				<td><input type="text" name=npm></td>
			</tr>
			<tr>
				<td width="130">Tempat,Tanggal Lahir</td>
				<td><input type="text" name="ttl"></td>
			</tr>
			<tr>
				<td width="130">Alamat Rumah</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td width="130">NPWP</td>
				<td><input type="text" name="npwp"></td>
			</tr>
			<tr>
				<td width="130">Jurusan</td>
				<td><input type="text" name="jurusan"></td>
			</tr>
			<tr>
				<td width="130">Fakultas</td>
				<td><input type="text" name="fakultas"></td>
			</tr>
		</table>


		<!--membuat tombol submit dan reset-->
		<p align="center">
			<input type="submit" name="btnLogin" value="Masuk"> 
			<input type="reset" name="reset" value="Hapus">
		</p>
	</form>
</body>
</html>