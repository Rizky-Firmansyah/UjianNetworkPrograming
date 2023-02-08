<?php
    $id = $_GET["idku"];
	$nama=$_GET["namaku"];
	$sandi=$_GET["sandiku"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman beranda</title>
	<style type="text/css">
		ul {  
			list-style-type: none;  
		}
        a {
            text-decoration: none;
            color :white;
        }
	</style>
</head>
<body bgcolor="red" style="color:white;">
	<table  width="100%">
		<tr>
            <td colspan="2">
                <center>
                    <h1>SELAMAT DATANG :)</h1>
                </center>
            </td>
		</tr>
		<tr>
			<td width="25%">
                <ul>
                    <li>
                        <a href="lihat_pengguna.php"><h1 style="background-color: blue;">Lihat Pengguna</h1></a>
                    </li>
                    <li>
                        <a href="tambah_pengguna1.php"><h1 style="background-color: blue;">Tambah Pengguna</h1></a>
                    </li>
                    <li>
                        <a href="Hapus_pengguna.php"><h1 style="background-color: blue;">Hapus Pengguna</h1></a>
                    </li>
                    <li>
                        <a href="edit_pengguna.php"><h1 style="background-color: blue;">Edit Pengguna</h1></a>
                    </li>
                </ul>
			</td>
			<td>
                <center>
                    <h1><center>Form Edit Pengguna</center></h1>
                    <form action="aksi_update.php" method="POST">
                         <input type="text" name="id_pengguna" placeholder="<?=$id;?>" readonly>
                        <br>
                        <br>
                        <input type="text" name="nama_pengguna" placeholder="<?=$nama;?>">
                        <br>
                        <br>
                        <input type="password" name="sandi_pengguna" placeholder="<?=$sandi;?>">
                        <br><br>
                        <INPUT  TYPE="submit" value="Rubah Data">
                    </form>
                </center>
                </table>
			</td>
		</tr>
	</table>
</body>
</html>