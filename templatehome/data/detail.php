<div class="container">
        <div class="card">
            
            <div class="card-body">

            <form>

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
 <h3 class="box-title">Deskripsi Buku</h3>
 </div>
 <!-- /.box-header -->
 <!-- form start -->
 <form class="form-horizontal form-label-left input_mask" method="POST" role="form" 
action="home.php?p=proseseditbarang">
 <div class="box-body">
 <table id="datamodaljenis" class="table table-striped responsive-utilities jambo_table" >

 <textarea style="width:600px; height:450px" class="form-control" id="deskripsi" name="deskripsi"><?php echo $data['deskripsi'] ?></textarea>

<br>
 <a href="home.php?p=databarang" class="btn btn-danger btn-close"><span class="glyphicon glyphiconcancel"></span>
 Kembali</a>
 </div>
 </form>
 </div>