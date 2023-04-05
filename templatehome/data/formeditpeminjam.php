<?php
include("koneksi.php");
?>
<?php
$kdpinjam=$_GET['kdpinjam'];
$edit="select * from pinjam where kdpinjam='$kdpinjam' ";
$hasil=mysql_query ($edit);
$data=mysql_fetch_array ($hasil);
?>
<div class="col-md-12">
 <!-- Horizontal Form -->
 <div class="box box-info">
 <div class="box-header with-border">
 <h3 class="box-title">Edit Data Peminjam</h3>
 </div>
 <!-- /.box-header -->
 <!-- form start -->
 <form class="form-horizontal form-label-left input_mask" method="POST" role="form" 
action="home.php?p=proseseditpeminjam">
 <div class="box-body">
 <table id="datamodaljenis" class="table table-striped responsive-utilities jambo_table" >
 <div class="form-group">
 <label class="col-sm-3 control-label">Id Peminjam</label>
 <div class="col-sm-6">
 <input type="text" name="kdpinjam" value="<?php echo $data['kdpinjam']?>" class="form-control">
 </div>
 </div>
 <div class="form-group">
 <label class="col-sm-3 control-label" align="left">Nama Peminjam</label>
 <div class="col-sm-6">
 <input type="text" name="nama" value="<?php echo $data['nama']?>" class="form-control" >
 </div>
 </div>
 
 <div class="form-group">
 <label class="col-sm-3 control-label" align="left">Nomor Telepon</label>
 <div class="col-sm-6">
 <input type="text" name="nomor" value="<?php echo $data['nomor']?>" class="form-control" >
 </div>
 </div>
 
 <div class="form-group">
 <label class="col-sm-3 control-label">Alamat</label>
 <div class="col-sm-6">
 <input type="text" name="alamat" value="<?php echo $data['alamat']?>" class="form-control" >
 </div>
 </div> 

 <div class="form-group">
 <label class="col-sm-3 control-label"> Tanggal Pinjam</label>
 <div class="col-sm-6">
 <input type="date" name="tglpnj" value="<?php echo $data['tglpnj']?>" class="form-control" >
 </div>
 </div> 
 <div class="form-group">
 <label class="col-sm-3 control-label"> Tanggal Kembali</label>
 <div class="col-sm-6">
 <input type="date" name="tglkmb" value="<?php echo $data['tglkmb']?>" class="form-control" >
 </div>
 </div> 
 </table>
 </div>
 <!-- footer modal -->
 <div class="box-footer">
 <button type="submit" class="btn btn-primary btnSimpan" name="edit" >SIMPAN</button>
 
 <a href="home.php?p=datapeminjam" class="btn btn-danger btn-close"><span class="glyphicon glyphiconcancel"></span>
 Batal</a>
 </div>
 </form>
 </div>