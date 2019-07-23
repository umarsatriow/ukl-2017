<?php
	include 'koneksi.php';

	$username=$_POST['username'];
	$password=($_POST['password']);
	$hasil = mysqli_query($konek,"SELECT * FROM `data_siswa` WHERE username='$username'AND password='$password'"); 
	$row = mysqli_fetch_array($hasil);
	if ($row['username'] == $username AND $row['password'] == $password) {
	
    session_start(); // memulai fungsi session
	$_SESSION['username'] = $username;
	$_SESSION['password']	= $_POST['password'];
	$_SESSION['induk_siswa']=$row['induk_siswa'];
	$_SESSION['login_siswa']=true;

$_SESSION['nama_siswa']=$data_cek['nama_siswa'];
header('location:redirect.php');

    echo "<script>alert('Klik OK untuk melanjutkan'); location.href='redirect.php'</script>";
	}
	else {
	echo "<script>alert('Gagal Login, Cek Username, Password atau silahkan registrasi!'); location.href='login1.php'</script>";
	}
?>