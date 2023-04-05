
<script>
 $(document).ready( function () {
 $('#databarang').DataTable();
} );
</script>
<script>
 $(function () {
 $('#databarang').DataTable()
 $('#databarang').DataTable({
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
 <h3 class="box-title">List Admin</h3>
 </div>
 <!-- /.box-header -->
 <div class="box-body">
 <table id="judul" class="table table-bordered table-striped">

 <thead>
    
 <?php
 include 'koneksi.php';
 $sql_view = mysql_query("SELECT * FROM aadmin ORDER BY adminid ASC");
 $total = mysql_num_rows($sql_view);
 ?>
 <a href="home.php?p=formtambahadmin" class="btn btn-success btn-sm btnTambah"><i 
class="glyphicon glyphicon-plus-sign"></i> Tambah</a> 
 <br /><br />
 <table id="databarang" name="databarang" class="table table-bordered table-hover">
 <thead>
<tr>
 <th>No</th>
 <th>ID</th>
 <th>Nama Lengkap</th>
 <th>Password</th>
 <th>Level</th>
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
 <td><?php echo $data['adminid'] ?></td>
 <td><?php echo $data['adminnamalengkap'] ?></td>
 <td><?php echo $data['adminpass'] ?></td>
 <td><?php echo $data['adminlevel'] ?></td>

 <td>
<a href="home.php?p=formeditadmin&adminid=<?php echo $data['adminid'] ?>" class="btn btn-info 
btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
<a href="home.php?p=proseshapusadmin&adminid=<?php echo $data['adminid'] ?>" onclick="pesan = 
confirm('Yakin data di hapus?');
if (pesan) return true; else return false;" class="btn btn-danger btn-sm"><span class="glyphicon 
glyphicon-trash" aria-hidden="true"></span></a>
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
