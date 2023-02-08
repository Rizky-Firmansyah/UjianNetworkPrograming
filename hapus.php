<?php 
$id=$_GET['id'];
include "koneksi.php";
mysqli_query($konek,'DELETE FROM tb_pengguna WHERE id_pengguna="'.$id.'"');
header("location:hapus_pengguna.php");
?>