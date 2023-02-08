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
                <h1><center>Hapus Pengguna</center></h1>
                <center>

                    <?php 
                    include "koneksi.php";
                    $kueri=mysqli_query($konek,'SELECT * FROM tb_pengguna');
                    ?>
                    <table border="1">
                        <tr>
                            <td>
                                <b>
                                No.
                                </b>
                            </td>
                            <td>
                                <b>
                                Nama Pengguna
                                </b>
                            </td>
                            <td>
                                <b>
                                Sandi Pengguna
                                </b>
                            </td>
                            <td>
                                <center>
                                    <b>
                                    Aksi
                                    </b>
                                </center>
                            </td>
                        </tr>
                    <?php
                    while($row = mysqli_fetch_array($kueri)){
                        echo"<tr><td>";
                        echo $row['id_pengguna'];
                        echo"</td><td>";
                        echo $row['nama_pengguna'];
                        echo"</td><td>";
                        echo $row['sandi_pengguna'];
                        echo"</td>
                        <td>";
                        echo"
                            <a href='hapus.php?id=".$row['id_pengguna']."'>Hapus</a>
                        ";
                    }
                ?>
                </center>
                </table>
			</td>
		</tr>
	</table>
</body>
</html>