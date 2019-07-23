<?php
session_start();
if(!$_SESSION['login_siswa']){
	header('location:../login1.php');
}
?><!DOCTYPE html>
<html>
    <head>
        <title>Crud</title>
        <link rel="stylesheet" type="text/css" href="crudstyle.css">
    </head>
    <body>
        <div class="nav">
            <ul>
            <li><a href="uklweb/web.php">Home</a></li>
            <li><a href="#">Galeri</a></li>
            <li><a href="#">Profile</a>
                <ul>
                    <li><a href="#">Crud</a></li>
                    <li><a href="logout1.php">Logout</a></li>
                </ul></li>
            </ul>
        </div>
    <div class="benteng">
        <div class="headercrud"> 
            <div class="kiri">
                <a href="uklweb/edit.php"><div class="kotak1">
                    <h3 class="hedit">Edit Data</h3>
                    </div></a>
            </div>
            
            <div class="kanan">
                <a href="uklweb/hapus.php"><div class="kotak2">
                    <h3 class="hapus">Hapus Data</h3>
                </div></a>
            </div>
            
        </div>
        </div>
    </body></html>
