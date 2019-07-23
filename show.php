<?php
include "koneksi.php";
    session_start();
    $data = mysqli_query($konek,"SELECT * FROM `data_siswa` WHERE induk_siswa = '".$_SESSION['induk_siswa']."'");
    $tampil = mysqli_fetch_array($data);
?>
<html>
    <head>
        <title>Show Data</title>
        <link rel="stylesheet" type="text/css" href="show.css" />
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    </head>
    
    <body>
        <div class="gambar"></div>
        <div class="kartu">
            <div class="judul">
                <h1>Data Siswa</h1>
            </div>
            <div class="penting">
                <div class="foto">
                </div>
                
                <div class="data">
                    <h1 id="h1" style="font-size: 20px;color: #1b7ea6;margin-bottom: -30px;">Nomor Induk</h1>
                    <h1 id="h1"><?php echo $tampil['induk_siswa'] ?></h1>
                    <h1 id="h1" style="font-size: 20px;color: #1b7ea6;margin-bottom: -30px;">Nama Siswa</h1>
                    <h1 id="h1"><?php echo $tampil['nama_siswa'] ?></h1>
                    <h1 id="h1" style="font-size: 20px;color: #1b7ea6;margin-bottom: -30px;">Username Siswa</h1>
                    <h1 id="h1"><?php echo $tampil['username'] ?></h1>
                    <img id="gambar" src="uklweb/img/dropdown.png" />
                    
                    
                    <h1 id="h2" style="display: none;font-size: 20px;color: #1b7ea6;margin-bottom: -30px;">Tempat Tinggal</h1>
                    <h1 id="h2" style="display: none;"><?php echo $tampil['tempat_tinggal'] ?></h1>
                    <h1 id="h2" style="display: none;font-size: 20px;color: #1b7ea6;margin-bottom: -30px;">No.Telp</h1>
                    <h1 id="h2" style="display: none;"><?php echo $tampil['telp'] ?></h1>
                    <h1 id="h2" style="display: none;font-size: 20px;color: #1b7ea6;margin-bottom: -30px;">Agama</h1>
                    <h1 id="h2" style="display: none;"><?php echo $tampil['agama'] ?></h1>
                    <img id="gambar2" style="display: none;" src="image/dropdown.png" />
                    
                    <h1 id="h3" style="display: none;font-size: 20px;color: #1b7ea6;margin-bottom: -30px;">Gender</h1>
                    <h1 id="h3" style="display: none;"><?php echo $tampil['gender'] ?></h1>
                    <h1 id="h3" style="display: none;font-size: 20px;color: #1b7ea6;margin-bottom: -30px;">Tempat lahir</h1>
                    <h1 id="h3" style="display: none;"><?php echo $tampil['tempat_lahir'] ?></h1>
                    <h1 id="h3" style="display: none;font-size: 20px;color: #1b7ea6;margin-bottom: -30px;">Tanggal Lahir</h1>
                    <h1 id="h3" style="display: none;"><?php echo $tampil['tanggal_lahir'] ?></h1>
                    <img id="gambar3" style="display: none;" src="image/dropdown-walik.png" />
                    
                </div>
                
                
            </div>
        </div>
    </body>
</html>

<script>    
    $(document).ready(function(){
    $("#gambar").click(function(){
        $(".data #h1,#gambar").hide(500);
        $(".data #h2,#gambar2").show(1000);
    });
});

 $(document).ready(function(){
    $("#gambar2").click(function(){
        $(".data #h2,#gambar2").hide(500);
        $(".data #h3,#gambar3").show(1000);
    });
});

    $(document).ready(function(){
    $("#gambar3").click(function(){
        $(".data #h3,#gambar3").hide(500);
        $(".data #h1,#gambar").show(1000);
    });
});

</script>