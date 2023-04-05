
<script>
 $(document).ready( function () {
 $('#formpelanggan').DataTable();
} );
</script>
<script>
 $(function () {
 $('#formpelanggan').DataTable()
 $('#formpelanggan').DataTable({
 'paging' : true,
 'lengthChange': false,
 'searching' : false,
 'ordering' : true,
 'info' : true,
 'autoWidth' : false
 })
 })

 
</script>
<script>
    print();
</script>

            <div class="card-body">
                     
<center><lable> <h3>Invoice Peminjaman</h3><lable></center>
<br>

 <table class="table table-hover table-striped" >
    
                                    <?php
 include 'koneksi.php';
 $nokeluar=$_GET['nokeluar'];
 $sql_view = mysql_query("SELECT * FROM bukukeluar where nokeluar='$nokeluar'");
 $total = mysql_num_rows($sql_view);

 ?>

 <table  border='0' id="formpelanggan" name="formpelanggan" class="table table-bordered table-hover" >
 <thead>
<tr>

 <th>Nomor Invoice</th>
 <th>Tanggal Pinjam</th>
 <th>Nama Peminjam</th>
 <th>Alamat</th>
 <th>Nomor</th>

 </tr>
 </thead>
 <tbody>

 <?php
$nomor = 1;
while ($data = mysql_fetch_array($sql_view)) {
?>
 <tr>

   
   <td><?php echo $data['nokeluar'] ?></td>
   <td><?php echo $data['tglkeluar'] ?></td>
   <td><?php echo $data['peminjam'] ?></td>
   <td><?php echo $data['alamat'] ?></td>
 <td><?php echo $data['nomor'] ?></td>

 
 <td>
 </td>
 </tr>

<?php } ?>                             
                                        </tbody>
                                    </table>
                                



                                    <center><lable>Buku Yang Dipinjam<lable></center>
                                    <center><lable>-------------------------<lable></center>


                                    <?php
 include 'koneksi.php';
 $nokeluar=$_GET['nokeluar'];
 $sql_view = mysql_query("SELECT * FROM detailkeluar where detailnokeluar='$nokeluar'");
 $total = mysql_num_rows($sql_view);

 ?>

 <table  border='0' id="buku" name="buku" class="table table-bordered table-hover" >
 <thead>
<tr>


 <th>Kode Buku</th>
 <th>Judul Buku</th>
 <th>Kategori</th>



 </tr>
 </thead>
 <tbody>

 <?php
$nomor = 1;
while ($data = mysql_fetch_array($sql_view)) {
?>
 <tr>

   
   <td><?php echo $data['detailkdbuku'] ?></td>
   <td><?php echo $data['detailjudul'] ?></td>
   <td><?php echo $data['detailkategori'] ?></td>
 </tr>

<?php } ?>                             
                                        </tbody>
                                    </table>
          


                                    <center><lable>---------------------------------------------------------------------------------<lable></center>
                                    <center><lable>Perpustakaan Nasional Meh Library Padang<lable></center>