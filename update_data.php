<?php
	$nama=$_GET['apanih'];
	$sandi=$_GET['sandi'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Biodata</title>
</head>
<body>
	<b>PERUBAHAN BIODATA MAHASISWA</b>
	<form action="aksi_update.php" method="POST">
	<table border="1">
		<tr>
			<td>
				NAMA
			</td>
			<td>
				<INPUT NAME="nama" TYPE="TEXT" PLACEHOLDER="nama anda" value="<?=$nama;?>" readonly>
			</td>
		</tr>
		<tr>
			<td>
				PASSWORD
			</td>
			<td>
				<INPUT NAME="boleeeh" TYPE="text" PLACEHOLDER="password anda" value="<?=$sandi;?>">
			</td>
		</tr>
		<tr>
			
			<td>
				<INPUT  TYPE="submit" value="Rubah Data">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>