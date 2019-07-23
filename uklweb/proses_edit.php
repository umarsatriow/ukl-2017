<?php
	include '../koneksi.php';
    $induk_siswa=$_POST['induk_siswa'];
	$nama_siswa=$_POST['nama_siswa'];
    $tempat_tinggal=$_POST['tempat_tinggal'];
	$telp=$_POST['telp'];
	$agama=$_POST['agama'];
	$gender=$_POST['gender'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$tanggal_lahir=$_POST['tanggal_lahir'];
	$username=$_POST['username'];
	$password=$_POST['password'];
session_start();

$update=mysqli_query($konek,"UPDATE `data_siswa` SET `induk_siswa`='$induk_siswa',`nama_siswa`='$nama_siswa',`tempat_tinggal`='$tempat_tinggal',`telp`='$telp',`agama`='$agama',`gender`='$gender',`tempat_lahir`='$tempat_lahir',`tanggal_lahir`='$tanggal_lahir',`username`='$username',`password`='$_POST[password]' WHERE induk_siswa='".$_SESSION['induk_siswa']."'");
if($update){
		echo "<script>alert('sukses update');location.href='web.php';</script>";
	}
else{
	echo "<script>alert('Gagal Update');location.href='edit.php';</script>";
}
?>