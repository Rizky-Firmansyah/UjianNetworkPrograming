<?php
include "koneksi.php";
$id = $_POST['id_pengguna'];
$nama=$_POST['nama_pengguna'];
$password=$_POST['sandi_pengguna'];

if(empty($nama)&&empty($password)){
    echo "<script language='javascript'>alert('Tidak Data Yang Di Ubah')
    window.location.href='edit_pengguna.php'
    </script>"; 
}
else if(empty($nama)){
    $query="UPDATE tb_pengguna SET sandi_pengguna='".$password."' WHERE  id_pengguna='".$id."'";
    mysqli_query($konek, $query);
    header("location:edit_pengguna.php");
}
else if(empty($password)){
    $query="UPDATE tb_pengguna SET nama_pengguna='".$nama."' WHERE  id_pengguna='".$id."'";
    mysqli_query($konek, $query);
    header("location:edit_pengguna.php");
}
else{
$query="UPDATE tb_pengguna SET nama_pengguna='".$nama."',sandi_pengguna='".$password."' WHERE  id_pengguna='".$id."'";
mysqli_query($konek, $query);
header("location:edit_pengguna.php");
}

