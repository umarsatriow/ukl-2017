<?php
session_start();
if(!$_SESSION['login_siswa']){
	header('location:../login1.php');
}
?><!DOCTYPE html>
<html>
    <head>
        <title>Umar Satrio</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="../crudstyle.css">
    </head>
    <body>
        <div class="nav">
            <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Galeri</a></li>
            <li><a href="#">Profile</a>
                <ul>
                    <li><a href="#info">Show</a></li>
                    <li><a href="../crud.php">Crud</a></li>
                    <li><a href="../logout1.php"  onclick="return confirm('Yakin arep metu? Mboten dipikir sek?')">Logout</a></li>
                </ul></li>
            </ul>
        </div>
        <div class="benteng">
        <div class="header">
            <div class="video">
          <center><video width="720" height="480" autoplay controls>
            <source src="css/VLOGETARIAN.mp4" type="video/mp4">
                </video></center> 
            </div></div>
            <div class="header3">
                <h1 class="vloge">VLOGETARIAN</h1><br>
                <hr>
                <p style="text-align:center;">Menceritakan tentang youtuber bernama yoga yang konten video nya berisi video blog atau biasa disebut <i>vlog</i>.  Yoga adalah mempunyai saudara kembar yang bernama yogi,mereka anak piatu, ibunya meninggal saat umur 8 tahun, ayahnya bekerja sebaagai pensiunan tentara yang sangat sabar.</p><br>
                <img src="img/vlogetarian.jpg" style="width:150px;height:208px;align-items:center;padding-left:106px;">
                <p style="text-align:center;">Langsung disikat gan, full video? klik <a class="none"  href="https://youtu.be/fFckw3tyHC4">disini!</a></p><br>
            </div>
            <div class="header2" >&nbsp;
            </div></div>
            <div class="info" id="info">
                <?php
                include "../koneksi.php";
        $data = mysqli_query($konek,"SELECT * FROM `data_siswa` WHERE induk_siswa = '".$_SESSION['induk_siswa']."'");
        $tampil = mysqli_fetch_array($data);
                ?>
               <table style="margin-top:40px;">
                <tr>
                    <th>Nomer Induk</th>
                    <th>Nama Siswa</th>
                    <th>Tempat Tinggal</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>
                 <tr>
                    <td><?php echo $tampil['induk_siswa'] ?></td>
                    <td><?php echo $tampil['nama_siswa'] ?></td>
                    <td><?php echo $tampil['tempat_tinggal'] ?></td>
                    <td><?php echo $tampil['username'] ?></td>
                    <td><?php echo $tampil['password'] ?></td>
                </tr>
                
                </table>
                
            
            </div>
    </body>
</html>