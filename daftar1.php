<!DOCTYPE html>
<html>
<head>
    <title>Daftar</title>
    <link rel="stylesheet" type="text/css" href="style_daftar1.css">
    <script type="text/javascript" src="js1/jquery.min.js"></script>
</head>
<body>
    <div class="header_login"></div>
    <div class="werno">&nbsp;
        <div class="body_login">
        <h2>Registrasi</h2>
        <hr>
        <form action="proses_daftar1.php" method="post" enctype="multipart/form-data"><br>
        
            <input type="text" name="induk_siswa" value="" placeholder="Nomer Induk" required><br>
            
            <input type="text" name="nama_siswa" value="" placeholder="Nama Lengkap" required><br>

            <input type="text" name="tempat_tinggal" value="" placeholder="Tempat Tinggal" required><br>

            <input type="text" name="telp" placeholder="No Telepon" maxlength="14" required><br>
        
            <select name="agama" class="agama" >
            <option value="" disabled selected hidden>&nbsp;Pilih Agama</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Buddha">Buddha</option>
            <option value="Hindu">Hindu</option>
            </select>
            <input type="text" name="agama" placeholder="Lainnya">
            <br>
            
            <input type="radio" name="gender" value="L" required=""><label for="gender L">Laki - laki</label>
            
            <input type="radio" name="gender" value="P" required=""><label for="gender P">Perempuan</label><br>
                   
            <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" required><br>
            
            <input type="date" min="1945-01-02" name="tanggal_lahir" ><br>
    
            <input type="text" name="username" placeholder="Username" required><br>
	
            <input type="password" class="form-password" name="password" value="" placeholder="Password" required><br>
            <input type="checkbox" class="form-checkbox"> <text style="color:white;">Show password</text>
            <br>
            <input class="daftar2" type="submit" name="daftar" value="DAFTAR"><br>    
                <a class="sudahpunya">Sudah punya akun? login&nbsp;</a><a class="daftar" href="login1.php">disini.</a>
            
                </form>
    </div>
    </div>
</body>
    <script type="text/javascript">
	$(document).ready(function(){		
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('.form-password').attr('type','text');
			}else{
				$('.form-password').attr('type','password');
			}
		});
	});
</script>
</html>