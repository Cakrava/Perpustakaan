
<script>
 $(document).ready( function () {
 $('#dfensklopedia').DataTable();
} );
</script>
<script>
 $(function () {
 $('#dfensklopedia').DataTable()
 $('#dfensklopedia').DataTable({
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
 <h3 class="box-title">List Buku Pegangan</h3>
 </div>
 <!-- /.box-header -->
 <div class="box-body">
 <table id="judul" class="table table-bordered table-striped">

 <thead>
    
 <?php
 include 'koneksi.php';
 $sql_view = mysql_query("SELECT * FROM buku where kategori ='pegangan' ORDER BY judul ASC");
 $total = mysql_num_rows($sql_view);
 ?>
 <br /><br />
 <table id="" name="dfensklopedia" class="table table-bordered table-hover">
 <thead>
<tr>
 <th>No</th>
 <th>Kode Buku</th>
 <th>Judul Buku</th>
 <th>Kategori</th>
 <th>Nomor Rak </th>
 <th>Lantai</th>
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
 <td><?php echo $data['kdbuku'] ?></td>
 <td><?php echo $data['judul'] ?></td>
 <td><?php echo $data['kategori'] ?></td>
 <td><?php echo $data['nomorak'] ?></td>
 <td><?php echo $data['lantai'] ?></td>

 <td>
<a href="home.php?p=formeditbarang&kdbuku=<?php echo $data['kdbuku'] ?>" class="btn btn-info 
btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
<a href="home.php?p=proseshapusbarang&kdbuku=<?php echo $data['kdbuku'] ?>" onclick="pesan = 
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
