<?php
include("koneksi.php");
?>
<?php
$kdbuku=$_GET['kdbuku'];
$edit="select * from buku where kdbuku='$kdbuku' ";
$hasil=mysql_query ($edit);
$data=mysql_fetch_array ($hasil);
?>
<div class="col-md-12">
 <!-- Horizontal Form -->
 <div class="box box-info">
 <div class="box-header with-border">
 <h3 class="box-title">EDIT DATA BUKU</h3>
 </div>
 <!-- /.box-header -->
 <!-- form start -->

 </div>





















<!-- Pembuatan Form Registrasi -->

<div class="container">
<div class="row">

<div class="col-xs-12 col-sm-4 col-md-4">&nbsp;</div>

<div class="col-xs-12 col-sm-4 col-md-4">

              

<div  class="panel panel-default"><div class="panel-body">

<div class="text-center"><h4>Edit Data Buku</h4></div>

<!-- kodingbuton.com -->






<form class="form-horizontal form-label-left input_mask" method="POST" role="form" 
action="home.php?p=proseseditbarang">
 <div class="box-body">
 <table id="datamodaljenis" class="table table-striped responsive-utilities jambo_table" >
 <div class="form-group">
 <label class="col-sm-3 control-label">Kode Buku</label>
 <div class="col-sm-6">
 <input type="text" name="kdbuku" value="<?php echo $data['kdbuku']?>" class="form-control" disabled="true">
 </div>
 </div>
 <div class="form-group">
 <label class="col-sm-3 control-label" align="left">Judul</label>
 <div class="col-sm-6">
 <input type="text" name="judul" value="<?php echo $data['judul']?>" class="form-control" >
 </div>
 </div>
 
 <div class="form-group">
 <label class="col-sm-3 control-label" align="left">Kategori</label>
 <div class="col-sm-6">
 <input type="text" name="kategori" value="<?php echo $data['kategori']?>" class="form-control" >
 </div>
 </div>




 
 <div class="form-group">
 <label class="col-sm-3 control-label">Nomor Rak</label>
 <div class="col-sm-6">
 <input type="text" name="nomorak" value="<?php echo $data['nomorak']?>" class="form-control" >
 </div>
 </div> 

 <div class="form-group">
 <label class="col-sm-3 control-label">Lantai</label>
 <div class="col-sm-6">
 <input type="text" name="lantai" value="<?php echo $data['lantai']?>" class="form-control" >
 </div>
 </div> 
 <div class="form-group">
  <label class="col-sm-6 control-label">Deskripsi Buku</label>
          
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
    <textarea   placeholder="" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" class="form-control" id="deskripsi" name="deskripsi"><?php echo $data['deskripsi'] ?>  </textarea>
              </form>
            </div>
          </div>
 <div class="form-group">
 <label class="col-sm-3 control-label">Tanggal Input</label>
 <div class="col-sm-6">
 <input type="date" name="tglinput" id="tglinput" value="<?php echo $data['tglinput']?>" class="form-control" disabled="true">
 </div>
 </div> 
 </table>
 </div>
 <!-- footer modal -->
 <div class="box-footer">
 <button type="submit" class="btn btn-primary btnSimpan" name="edit" >SIMPAN</button>
 
 <a href="home.php?p=databarang" class="btn btn-danger btn-close"><span class="glyphicon glyphiconcancel"></span>
 Batal</a>
 </div>
 </form>




</div></div>

</div>
</div>

</div>