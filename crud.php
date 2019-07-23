<html>
    <head>
        <title>Redirect</title>
        <link rel="stylesheet" type="text/css" href="redirect.css"  />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <script src="js/jquery-3.2.1.min.js"></script>
    </head>
    
    <body>
        <script type="text/javascript">
            $(function(){
            $("body").fadeOut(7000,function(){
               window.location.href = "crud2.php";
            })
            });
        </script>
        <?php
            include "koneksi.php";
            session_start();
            $data = mysqli_query($konek,"SELECT * FROM `data_siswa` WHERE induk_siswa = '".$_SESSION['username']."'");
            $tampil = mysqli_fetch_array($data);            
        ?>
        <div class="tulisan">
            <a class="effect">Pilih Satu Lingkaran</a>
        </div>
    </body>
</html>