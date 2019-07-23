<?php
	include 'koneksi.php';
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
	include 'koneksi.php';
//ayomar
    $tes_username=mysqli_query($konek,"SELECT * FROM `data_siswa` WHERE `username`='$username'");
	$tes_induk=mysqli_query($konek,"SELECT * FROM `data_siswa` WHERE `induk_siswa`='$induk_siswa'");
//ayomar2
	$cek_username=mysqli_num_rows($tes_username);
    $cek_induk=mysqli_num_rows($tes_induk);
	if ($cek_username==1) {
		echo "<script>alert('username sudah digunakan'); location.href='daftar1.php'</script>";
	}if ($cek_induk==1) {
		echo "<script>alert('induk sudah digunakan'); location.href='daftar1.php'</script>";
	}
	else
		if($cek_username==0){
		$tes_username=mysqli_query($konek,"INSERT INTO data_siswa VALUES ('$induk_siswa','$nama_siswa','$tempat_tinggal','$telp','$agama','$gender','$tempat_lahir','$tanggal_lahir','$username','".$_POST['password']."')");
		echo "<script>alert('Registrasi Success klik Oke untuk melanjutkan'); location.href='login1.php'</script>";
		mysql_error();
	}else
		if($cek_induk==0){
		$tes_induk=mysqli_query($konek,"INSERT INTO data_siswa VALUES ('$induk_siswa','$nama_siswa','$tempat_tinggal','$telp','$agama','$gender','$tempat_lahir','$tanggal_lahir','$username','".$_POST['password']."')");
		echo "<script>alert('Registrasi Success klik Oke untuk melanjutkan'); location.href='login1.php'</script>";
		mysql_error();
	}
?>