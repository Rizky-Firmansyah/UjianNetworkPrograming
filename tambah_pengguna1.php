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

                    <h1><center>Tambah Pengguna</center></h1>
                    <form action="proses_tambah_pengguna.php" method="POST">
                        <input type="text" name="nama" placeholder="Username">
                        <br>
                        <br>
                        <input type="password" name="sandi" placeholder="Password">
                        <br><br>
                        <button class="button login__submit" type="submit">
                            <span class="button__text">Simpan Data</span>
                            <i class="button__icon fas fa-chevron-right"></i>
				        </button>
                    </form>
                </center>
                </table>
			</td>
		</tr>
	</table>
</body>
</html>