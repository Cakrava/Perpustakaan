

















 <script>
	$(document).ready(function (e) {
	$('#databarang').DataTable();
	$('#datapemasok').DataTable();
})
</script>
  
 <script language="javascript">
function hitung(){ 
	var harga=parseInt(document.brgmasuk.judul.value);
	var jumlah=parseInt(document.brgmasuk.jml.value);
	
	var tothrg=harga*jumlah;
	
	document.brgmasuk.subtotal.value=tothrg;
}  
</script>

<script type="text/javascript" src="input.js"></script>
<?php
include '../koneksi.php';
 $today = date("Ymd");
	$query1 = "SELECT max(nomorpinjamkeluar) as maxID FROM bukukeluar WHERE nomorpinjamkeluar LIKE '$today%'";
    $hasil = mysql_query($query1);
    $data = mysql_fetch_array($hasil);
    $idMax = $data['maxID'];
	$NoUrut = (int) substr($idMax, 8, 4);
    $NoUrut++;
	$NewID = $today .sprintf('%04s', $NoUrut);
?>
	<div class="col-md-12">
	<!-- Horizontal Form -->
		<div class="box box-info">
		
            <!-- /.box-header -->
            <!-- form start -->
			




<div class="col-md-12">
 <!-- Horizontal Form -->
 <div class="box box-info">
 <div class="box-header with-border">
 <h3 class="box-title">Tambah Data Peminjaman</h3>
 </div>
 <!-- /.box-header -->
 <!-- form start -->
















<br>
<br>
<br>



            <form class="form-horizontal form-label-left input_mask" method="POST" role="form" action="home.php?p=prosesbantusimpan" name="brgmasuk" id="finput">
			<div class="box-body">
				<div class="form-group">
			

                <div class="box-body">
 <table id="datamodaljenis" class="table table-striped responsive-utilities jambo_table" >
 <div class="form-group">
 <label class="col-sm-3 control-label">Nomor Peminjaman</label>
 <div class="col-sm-6">
 <input type="text" name="kdpinjam" value="<?php echo $data['kdpinjam']?>" class="form-control" readonly>
 </div>
 </div>
 <div class="form-group">
 <label class="col-sm-3 control-label" align="left">Nama Peminjam</label>
 <div class="col-sm-6">
 <input type="text" name="nama" value="<?php echo $data['nama']?>" class="form-control" readonly>
 </div>
 </div>





					<div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Peminjaman</label>
					<div class="col-sm-3">
					<input type="date" name="tglpnj" class="form-control" value="<?php echo $data['tglpnj']?>"required readonly>
					</div>
                
<br>

                
				<div class="form-group">
                   
    
                &nbsp;&nbsp; <button type="button" name="age" id="age" data-toggle="modal" data-target="#modalCaribarang"  
                        class="btn btn-primary">Cari Buku</button>
                       

<br>
<br>

                <label class="col-sm-2 control-label">Kode Buku</label>
                    <div class="col-sm-2">
                		<input type="text" id="kdbuku" name="kdbuku" class="form-control" readonly >
                	</div>
                <label class="col-sm-2 control-label" align="left">Judul Buku</label>
                <div class="col-sm-2">
                <input type="text" id="judul" name="judul" class="form-control" readonly >
                </div>
                </div>
                <div class="form-group">
                <label class="col-sm-2 control-label" align="left">Kategori</label>
                <div class="col-sm-3">
                <input type="text" id="kategori" name="kategori" class="form-control" readonly >
                </div>
             
                </div>
    
                &nbsp;&nbsp;  <button type="submit" class="btn btn-primary btnSimpan" name="ok" id="ok"> <span class="glyphicon glyphicon-floppy-saved"></span> Input</button>
              
                </div>
                </div>
                <!-- footer modal -->
                <div class="box-footer">
               </div>
  
                <?php
include '../koneksi.php';
$result = mysql_query("SELECT kdbuku,kategori FROM buku JOIN bantu ON kdbuku=idbuku ");
$total = mysql_num_rows($result);
?> 
<div class="tampil">
<div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h5 class="box-title">Daftar Buku Yang Dipinjam</h5>
        </div>

        <div class="box-body" id="tampil">
                <table id="datajadwal" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Buku</th>
                            <th>Judul Buku</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        while ($row = mysql_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $nomor ?></td>
                                <td><?php echo $row['kdbuku'] ?></td>
                                <td><?php echo $row['judul'] ?></td>                            
                                <td><?php echo $row['kategori'] ?></td>                            
               
                            
								<td><?php echo $row['subtotal'] ?></td>                           
								<td><a href="home.php?p=hapustemp&kdbuku=<?php echo $row['kdbuku'] ?>" 
                                onclick="pesan = confirm('Yakin data di hapus?'); if (pesan) return true; else return false;" 
                                class="btn btn-danger btn- sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

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
<br>
<br>
<br>
<br>

                <button type="submit" class="btn btn-primary btnSimpan" name="simpan" > <span class="glyphicon glyphicon-floppy-saved"></span> Simpan</button>
                <a href="home.php?p=databukukeluar" class="btn btn-danger btn-close"><span class="glyphicon
                glyphicon-remove-circle"></span> Batal</a>
                </div>
                </form>
                </div>
                </div>
                
                
                <!-- Modal Cari Barang-->
                <div id="modalCaribarang" class="modal modal fade" role="dialog">
                <div class="modal-dialog">
                <!-- konten modal-->
                <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cari Buku</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">


				<?php
               include '../koneksi.php';
                $result = mysql_query("SELECT kdbuku,kategori,judul FROM buku ORDER BY kdbuku ASC");
                ?>

                <table id="barang" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>No</th>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Kategori</th>
                <th>Pilih</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $nomor = 1;
                while ($row = mysql_fetch_assoc($result)) {
                ?>
                <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $row['kdbuku'] ?></td>
                <td><?php echo $row['kategori'] ?></td>
                <td><?php echo $row['judul'] ?></td>
                <td>
                <span  class="btn btn-primary" type="button" onClick="document.getElementById('kdbuku').value =
                '<?php echo $row['kdbuku'] ?>';   document.getElementById('kategori').value = '<?php echo
                $row['kategori'] ?>';
                
                document.getElementById('judul').value = '<?php echo
                $row['judul'] ?>'; $('#modalCaribarang').modal('hide');">O</button><i class="glyphicon glyphicon-ok-sign" aria-hidden="true"></i></span>
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
                <!-- footer modal -->
                <div class="modal-footer">
                </div>
                </form>
                </div>
                </div>


<!-- Modal Cari Pemasok-->
<div id="modalCariPemasok" class="modal modal fade" role="dialog">
<div class="modal-dialog">
<!-- konten modal-->
<div class="modal-content">
<!-- heading modal -->
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Cari Data Pemasok</h4>
</div>
<!-- body modal -->
<div class="modal-body">


<!-- footer modal -->
<div class="modal-footer">
</div>
</form>
</div>









 





 