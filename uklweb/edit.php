<?php
session_start();
 if (!$_SESSION['login_siswa']) {
    header('location:login1.php');
 }
 else {
include "header.php";
include "../koneksi.php";
?>
<link rel="stylesheet" type="text/css" href="edit_style.css">
<center><h2>Edit</h2>
<?php
$siswa_edit=mysqli_query($konek,"SELECT * from data_siswa where induk_siswa='".$_SESSION['induk_siswa']."'");
$data_siswa=mysqli_fetch_array($siswa_edit);
?>
<form action="proses_edit.php" method="post" enctype="multipart/form-data"><br>
    <table>
    <tr>
        <td>Induk Siswa</td><td><input type="text" 
        name="induk_siswa" 
        value="<?php echo $data_siswa['induk_siswa'];?>"></td>
    </tr>
    <tr>
        <td>Nama Siswa</td><td><input type="text" 
        name="nama_siswa" 
        value="<?php echo $data_siswa['nama_siswa'];?>"></td>
    </tr>
    <tr>
        <td>Tempat Tinggal</td><td><input type="text" 
        name="tempat_tinggal" 
        value="<?php echo $data_siswa['tempat_tinggal'];?>"></td>
    </tr>
    <tr>
        <td>Telp</td><td><input type="text" 
        name="telp" 
        value="<?php echo $data_siswa['telp'];?>"></td>
    </tr>
    <tr>
        <td>Agama</td><td>
        <?php 
        $arr_agama=array("Islam","Kristen","Katolik","Hindu","Budha");
        ?>
        <select name="agama">
        <option></option>
        <?php 
        foreach($arr_agama as $ag){
            if($ag==$data_siswa['agama']){
                $selek="selected";
            } else {
                $selek="";
            }
            echo "<option value='$ag' $selek>$ag</option>";
        }
        ?>
        </select>
        </td>
    </tr>
    <tr>
        <td>Gender</td><td>
        <?php 
        $arr_gender=array("L"=>"Laki-laki","P"=>"Perempuan");
        ?>
        <select name="gender">
        <option></option>
        <?php 
        foreach($arr_gender as $kunci=>$nilai){
            if($kunci==$data_siswa['gender']){
                $selek="selected";
            } else {
                $selek="";
            }
            echo "<option value='$kunci' $selek>$nilai</option>";
        }
        ?>
        </select>
        </td>
    </tr>
    <tr>
        <td>Tempat Lahir</td><td><input type="text" 
        name="tempat_lahir" 
        value="<?php echo $data_siswa['tempat_lahir'];?>"></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td><td><input type="date" 
        name="tanggal_lahir" 
        value="<?php echo $data_siswa['tanggal_lahir'];?>"></td>
    </tr>
    <tr>
        <td>Username</td><td><input type="text" 
        name="username" 
        value="<?php echo $data_siswa['username'];?>"></td>
    </tr>
    <tr>
        <td>Password</td><td><input type="password" 
        name="password" 
        value="<?php echo $data_siswa['password'];?>"></td>
    </tr>
</table>
<input type="submit" name="ubah" value="Save">
</form>
</center>
<?php 

 };
     ?>