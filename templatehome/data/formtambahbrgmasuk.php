<script>
	$(document).ready(function (e) {
	$('#databarang').DataTable();
	$('#datapemasok').DataTable();
})
</script>
  
 <script language="javascript">
function hitung(){ 
	var harga=parseInt(document.brgmasuk.hargabrg.value);
	var jumlah=parseInt(document.brgmasuk.jml.value);
	
	var tothrg=harga*jumlah;
	
	document.brgmasuk.subtotal.value=tothrg;
}  
</script>

<script type="text/javascript" src="input.js"></script>
<?php
include '../koneksi.php';
 $today = date("Ymd");
	$query1 = "SELECT max(nokeluar) as maxID FROM bukukeluar WHERE nokeluar LIKE '$today%'";
    $hasil = mysql_query($query1);
    $data = mysql_fetch_array($hasil);
    $idMax = $data['maxID'];
	$NoUrut = (int) substr($idMax, 8, 4);
    $NoUrut++;
	$NewID = $today .sprintf('%04s', $NoUrut);
?>
<div class="container">
        <div class="card">
            
            <div class="card-body">

	<div class="col-md-12">
	<!-- Horizontal Form -->
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Input Peminjaman</h3>
			</div>
            <!-- /.box-header -->
            <!-- form start -->
			
            <form class="form-horizontal form-label-left input_mask" method="POST" role="form" action="home.php?p=prosesbantusimpan" name="brgmasuk" id="finput">
			<div class="box-body">
				<div class="form-group">
					<label class="col-sm-10 control-label">No Invoice</label>
					<div class="col-sm-10">
					<input type="text" name="nokeluar" class="form-control" value="<?php echo $NewID; ?>" readonly>
					</div>
					
					<div class="form-group">
                    <label class="col-sm-10 control-label">Tanggal Masuk</label>
					<div class="col-sm-10">
					<input type="date" name="tglkeluar" class="form-control" >
					</div>
					<label class="col-sm-10 control-label" align="left">Nama Peminjam</label>
					<div class="col-sm-10">
					<input type="text" id="nama" name="nama" class="form-control"  >
					</div>
				</div>
                <label class="col-sm-10 control-label" align="left">Alamat</label>
					<div class="col-sm-10">
					<input type="text" id="alamat" name="alamat" class="form-control"  >
					</div>
				</div><label class="col-sm-10 control-label" align="left">Nomor</label>
					<div class="col-sm-10">
					<input type="text" id="nomor" name="nomor" class="form-control"  >
					</div>
				</div>
				<br>
                



                <div class="col-sm-10">
                <a class="btn btn-success btn-sm btnTambah" data-toggle="modal" data-target="#caribuku"><i class="glyphicon glyphicon-search"> Cari Buku</i></a>
                </div>
				<div class="form-group">
                    	<label class="col-sm-10 control-label">Kode Buku</label>
                    <div class="col-sm-10">
                		<input type="text" id="kdbuku" name="kdbuku" class="form-control" readonly >
                	</div>
              
                <label class="col-sm-10 control-label" align="left">Judul Buku</label>
                <div class="col-sm-10">
                <input type="text" id="judul" name="judul" class="form-control" readonly >
                </div>
                </div>
                <div class="form-group">
                <label class="col-sm-10 control-label" align="left">Kategori</label>
                <div class="col-sm-10">
                <input type="text" id="kategori" name="kategori" class="form-control" readonly >
                </div>
            <br>
            &nbsp;&nbsp;   <button type="submit" class="btn btn-primary btnSimpan" name="ok" id="ok"> <span class="glyphicon glyphicon-floppy-saved"></span> Input</button>
              
                </div>
                </div>
                <!-- footer modal -->
                <div class="box-footer">
               </div>
  
                <?php
include '../koneksi.php';
$result = mysql_query("SELECT * FROM buku JOIN bantu ON kdbuku=idbuku ");
$total = mysql_num_rows($result);
?> 
<div class="tampil">
<div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Daftar Buku Yang Dipinjam</h3>
        </div>

        <div class="box-body" id="tampil">
                <table id="datajadwal" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Buku</th>
                            <th>Judul Buku</th>
                            <th>Kategori</th>
                        
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
<center>
                <button type="submit" class="btn btn-primary btnSimpan" name="simpan" > <span class="glyphicon glyphicon-floppy-saved"></span> Simpan</button>
                <a href="home.php?p=databarangmasuk" class="btn btn-danger btn-close"><span class="glyphicon
                glyphicon-remove-circle"></span> Batal</a></center>
                </div>
                </form>
                </div>
                </div>
                











                
              
              
<!-- Modal Cari Pemasok-->
<div id="caribuku" class="modal modal fade" role="dialog">
<div class="modal-dialog">
<!-- konten modal-->
<div class="modal-content">
<!-- heading modal -->
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title"></h4>
</div>
<!-- body modal -->
<div class="modal-body">


<?php
include '../koneksi.php';
$result = mysql_query("SELECT*FROM buku where jumlah='Tersedia' ORDER BY kdbuku ASC");
?>
<table id="pekerja" class="table table-bordered table-striped">
<thead>
<tr>
<th>No</th>
<th>Kode Buku</th>
<th>Judul</th>
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
<td><?php echo $row['judul'] ?></td>
<td><?php echo $row['kategori'] ?></td>
<td><span class="btn btn-info btn-sm" type="button" onClick="
document.getElementById('kdbuku').value = '<?php echo $row['kdbuku'] ?>'; 
document.getElementById('judul').value = '<?php echo
$row['judul'] ?>';
document.getElementById('kategori').value = '<?php echo
$row['kategori'] ?>';
$('#modalCariPemasok').modal('hide');"></button>O<i class="glyphicon glyphicon-ok-sign" aria- hidden="true"></i></span>
</td>
</tr>
<?php
$nomor++;
}
?>
</tbody>
</table>
</div>
<!-- footer modal -->
<div class="modal-footer">
</div>
</form>
</div>







