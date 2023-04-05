
<script>
 $(document).ready( function () {
 $('#datapeminjam').DataTable();
} );
</script>
<script>
 $(function () {
 $('#datapeminjam').DataTable()
 $('#datapeminjam').DataTable({
 'paging' : true,
 'lengthChange': false,
 'searching' : false,
 'ordering' : true,
 'info' : true,
 'autoWidth' : false
 })
 })
</script>
<div class="col-xs-12">
<div class="box">
 <div class="box-header">
 <h3 class="box-title">List Peminjam </h3>
 </div>





 <!-- /.box-header -->
 <div class="box-body">
 <table id="judul" class="table table-bordered table-striped">



 <thead>
   

   
 <?php
 include 'koneksi.php';
 $sql_view = mysql_query("SELECT * FROM pinjam ORDER BY kdpinjam ASC");
 $total = mysql_num_rows($sql_view);
 ?>
 <br /><br />
 <table id="datapeminjam" name="datapeminjam" class="table table-bordered table-hover">
 <thead>
<tr>
 <th>No</th>
 <th>Nomor Peminjaman</th>
 <th>Nama Peminjam</th>
 <th>Nomor</th>
 <th>Alamat </th>
 <th>Tanggal Pinjam</th>
 <th>Tanggal Kembali</th>
 <th>Aksi</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $nomor = 1;
 while ($data = mysql_fetch_array($sql_view)) {
 ?>
 <tr>
 <td><?php echo $nomor ?></td>
 <td><?php echo $data['kdpinjam'] ?></td>
 <td><?php echo $data['nama'] ?></td>
 <td><?php echo $data['nomor'] ?></td>
 <td><?php echo $data['alamat'] ?></td>
 <td><?php echo $data['tglpnj'] ?></td>
 <td><?php echo $data['tglkmb'] ?></td>

 <td>
<a href="home.php?p=detail&kdpinjam=<?php echo $data['kdpinjam'] ?>" class="btn btn-info 
btn-sm">Laporan<i class="glyphicon glyphicon-warning"></i></a>

<a href="home.php?p=proseshapuspeminjam&kdpinjam=<?php echo $data['kdpinjam'] ?>" onclick="pesan = 
confirm('Yakin data di hapus?');
if (pesan) return true; else return false;" class="btn btn-danger btn-sm"><span class="glyphicon 
glyphicon-trash" aria-hidden="true">Hapus</span></a>
<a href="" class="btn btn-sm btn-info" data-toggle="modal"
            data-target="#modal<?php echo $data['kdpinjam']; ?>">&nbsp;&nbsp;Edit&nbsp;&nbsp;</a>
        
        <!-- untuk melihat bentuk-bentuk modal kalian bisa mengunjungi laman bootstrap dan cari modal di kotak pencariannya -->
        <!-- id setiap modal juga harus berbeda, cara membedakannya dengan menggunakan kdpinjam -->
        <div class="modal fade" id="modal<?php echo $data['kdpinjam']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit Data Pinjaman</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- di dalam modal-body terdapat 4 form input yang berisi data.
                    data-data tersebut ditampilkan sama seperti menampilkan data pada tabel. -->
                    <div class="modal-body">
            
 <form class="form-horizontal form-label-left input_mask" method="POST" role="form" 
action="home.php?p=proseseditpeminjam">
 <div class="box-body">
 <table id="datamodaljenis" class="table table-striped responsive-utilities jambo_table" >
 <div class="form-group">
 <label class="col-sm-10 control-label">Nomor Peminjaman</label>
 <div class="col-sm-15">
 <input type="text" name="kdpinjam" value="<?php echo $data['kdpinjam']?>" class="form-control" readonly>
 </div>
 </div>
 <div class="form-group">
 <label class="col-sm-10 control-label" align="left">Nama Peminjam</label>
 <div class="col-sm-15">
 <input type="text" name="nama" value="<?php echo $data['nama']?>" class="form-control" >
 </div>
 </div>
 <div class="form-group">
 <label class="col-sm-10 control-label" align="left">Alamat</label>
 <div class="col-sm-15">
 <input type="text" name="alamat" value="<?php echo $data['alamat']?>" class="form-control" >
 </div>
 </div>
 
 
 <div class="form-group">
 <label class="col-sm-10 control-label">Nomor </label>
 <div class="col-sm-15">
 <input type="text" name="nomor" value="<?php echo $data['nomor']?>" class="form-control" >
 </div>
 </div> 
 <div class="form-group">
 <label class="col-sm-10 control-label">Tanggal Pinjam</label>
 <div class="col-sm-15">
 <input type="text" name="tglpnj" value="<?php echo $data['tglpnj']?>" class="form-control"  readonly>
 </div>
 </div> 



 <div class="form-group">
 <label class="col-sm-10 control-label" align="left">Tanggal Kembali</label>
 <div class="col-sm-15">
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
 </td>
 </tr>
 <?php
 $nomor++;
 }
 ?>
 </tbody>
 </table>
 </div>
 </div>
</div>









<?php

include 'koneksi.php';
 

//koding menentukan Nomor Unik Registrasi

$kodingbuton=mysql_query("SELECT * FROM pinjam");

$num=mysql_num_rows($kodingbuton);

$jmlh=$num+1;

$waktu=date('dmY-');
$pinjam=date('d-m-Y');
$nounik="PM".$waktu.$jmlh;

?>



<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>



   </div>
   <div class="modal-body">
   <form class="form-horizontal form-label-left input_mask" method="POST" role="form" action="home.php?p=prosestambahpeminjam">
                <div class="box-body">
                    <table id="datamodaljenis" class="table table-striped responsive-utilities jambo_table" >
                        <div class="form-group">
                            <label class="col-sm-10 control-label">Nomor Peminjaman</label>
                            <div class="col-sm-15">
                                <input type="text" name="kdpinjam" class="form-control" value="<?php echo $nounik ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-10 control-label" align="left">Nama Peminjam</label>
                            <div class="col-sm-15">
                                <input type="text" name="nama" class="form-control" >
                            </div>
                        </div> 

                        <div class="form-group">
                            <label class="col-sm-10 control-label" align="left">Nomor</label>
                            <div class="col-sm-15">
                                <input type="text" name="nomor" class="form-control" >
                            </div>
                        </div>     

                        <div class="form-group">
                            <label class="col-sm-10 control-label">Alamat</label>
                            <div class="col-sm-15">
                                <input type="text" name="alamat" class="form-control" >
                            </div>
                        </div>          

                        <div class="form-group">
                            <label class="col-sm-10 control-label">Tanggal Pinjam</label>
                            <div class="col-sm-15">
                            <input type="date" name="tglpnj" class="form-control"  >
                            </div>
                        </div>    
                      
                    
                        <div class="form-group">
                            <label class="col-sm-10 control-label">Tanggal Kembali</label>
                            <div class="col-sm-15">
                                <input type="date" name="tglkmb" class="form-control" >
                            </div>
                        </div>    
                      
                <!-- footer modal -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary btnSimpan" name="simpan" >SIMPAN</button>                              
                    <a href="home.php?p=datapeminjam" class="btn btn-danger btn-close"><span class="glyphicon glyphicon-cancel"></span>
                                    Batal</a>
                                    
 </form>
 
</div>


