
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
                     
<center><lable> <h3>List Buku</h3><lable></center>
<br>

 <table class="table table-hover table-striped" >
    
                                    <?php
 include 'koneksi.php';
 $sql_view = mysql_query("SELECT * FROM buku ORDER By kdbuku ASC");
 $total = mysql_num_rows($sql_view);

 ?>

<table id="databarang" name="databarang" class="table table-bordered table-hover">
 <thead>
<tr>
 <th>No</th>
 <th>Kode Buku</th>
 <th>Judul Buku</th>
 <th>Kategori</th>
 <th>Nomor Rak </th>
 <th>Lantai</th>
 <th>Jumlah</th>
 <th>Tanggal Input</th>
 </tr>
 </thead>
 <tbody>
 <?php
 if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $sql_view = mysql_query("select * from buku where judul like '%".$cari."%' or kategori like '%".$cari."%' or kdbuku like '%".$cari."%'");				
}else{
    $sql_view = mysql_query("select * from buku");		
}
 $nomor = 1;
 while($data = mysql_fetch_array($sql_view)){
 ?>
 <tr>
 <td><?php echo $nomor ?></td>
 <td><?php echo $data['kdbuku'] ?></td>
 <td><?php echo $data['judul'] ?></td>
 <td><?php echo $data['kategori'] ?></td>
 <td><?php echo $data['nomorak'] ?></td>
 <td><?php echo $data['lantai'] ?></td>
 <td><?php echo $data['jumlah'] ?></td>
 <td><?php echo $data['tglinput'] ?></td>

 <td>

 </tr>

<?php } ?>                             
                                        </tbody>
                                    </table>
                                



                                    <center><lable>---------------------------------------------------------------------------------<lable></center>
                                    <center><lable>Perpustakaan Nasional Meh Library Padang<lable></center>