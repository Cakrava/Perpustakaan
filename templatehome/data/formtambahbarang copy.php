<?php

include 'koneksi.php';
 

//koding menentukan Nomor Unik Registrasi

$kodingbuton=mysql_query("SELECT * FROM buku");

$num=mysql_num_rows($kodingbuton);

$jmlh=$num+1;

$waktu=date('dmy');

$nounik="BK-".$jmlh;

?>

 

<?php

//koding simpan data

if(isset($_POST['simpan'])){

$no_reg=$_POST['no_reg'];

$nama_lengkap=$_POST['nama_lengkap'];

$email=$_POST['email'];

$no_hp=$_POST['no_hp'];

 

// insert simpan data

$a=mysql_query("INSERT INTO pendaftaran(id_daftar,no_reg,nama_lengkap,email,no_hp)VALUES('','$no_reg','$nama_lengkap','$email','$no_hp')");

if($a){

echo 'Data Berhasil Di Simpan..!';

echo "<meta http-equiv='refresh' content='2; url='>";

}

}

?>

<!-- Pembuatan Form Registrasi -->

<div class="container">
<div class="row">

<div class="col-xs-12 col-sm-4 col-md-4">&nbsp;</div>

<div class="col-xs-12 col-sm-4 col-md-4">

              

<div  class="panel panel-default"><div class="panel-body">

<div class="text-center"><h4>Form Daftar</h4></div>

<!-- kodingbuton.com -->

<form method="post" action="">

<div class="form-group">

<label>Nomor Registrasi</label>

<input type="text" class="form-control" name="no_reg"  value="<?php echo $nounik ?>" readonly>

</div>

<div class="form-group">

<label>Nama Lengkap</label>

<input type="text" class="form-control" name="nama_lengkap">

                     </div>

<div class="form-group">

<label>Email</label>

<input type="text" class="form-control" name="email">

                     </div>

<div class="form-group">

<label>No. HP</label>

<input type="text" class="form-control" name="no_hp" >

</div>

<button type="submit" name="simpan" class="btn btn-primary">Daftar</button>

</form>

</div></div>

</div>
</div>

</div>