<?php
include "../koneksi.php";
session_start();
$induk_siswa=$_SESSION['induk_siswa'];
$hapus=mysqli_query($konek, "DELETE FROM data_siswa where induk_siswa='$induk_siswa'");
if($hapus){
    echo "<script>alert('Data sukses dihapus');location.href='../login1.php'</script>";
}else{
     echo "<script>alert('Data gagal dihapus');location.href='../crud.php'</script>";
}
?>