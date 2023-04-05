<?php
include '../koneksi.php';
?>
<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">TAMBAH DATA PEMINJAm</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal form-label-left input_mask" method="POST" role="form" action="home.php?p=prosestambahpeminjam">
                <div class="box-body">
                    <table id="datamodaljenis" class="table table-striped responsive-utilities jambo_table" >
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Id Peminjam</label>
                            <div class="col-sm-6">
                                <input type="text" name="kdpinjam" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" align="left">Nama Peminjam</label>
                            <div class="col-sm-6">
                                <input type="text" name="nama" class="form-control" >
                            A</div>
                        </div> 

                        <div class="form-group">
                            <label class="col-sm-3 control-label" align="left">Nomor</label>
                            <div class="col-sm-6">
                                <input type="text" name="nomor" class="form-control" >
                            </div>
                        </div>     

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-6">
                                <input type="text" name="alamat" class="form-control" >
                            </div>
                        </div>                         
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal Pinjam</label>
                            <div class="col-sm-6">
                                <input type="date" name="tglpnj" class="form-control" >
                            </div>
                            
                            
                        </div>  
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal Kembali</label>
                            <div class="col-sm-6">
                                <input type="date" name="tglkmb" class="form-control" >
                            </div>                        
                    </table>
                </div>
                <!-- footer modal -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary btnSimpan" name="simpan" >SIMPAN</button>                              
                    <a href="home.php?p=datapeminjam" class="btn btn-danger btn-close"><span class="glyphicon glyphicon-cancel"></span>
                                    Batal</a>
                
                </div>
            </form>
          </div>









          
   
                <!-- Modal Cari Barang-->
                <div id="modalCaribarang" class="modal modal fade" role="dialog">
                <div class="modal-dialog">
                <!-- konten modal-->
                <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cari Data Barang</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">


				<?php
               include '../koneksi.php';
                $result = mysql_query("SELECT kdbrg,namabrg,satuanbrg,hargabrg FROM barang ORDER BY kdbrg ASC");
                ?>


                <table id="barang" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Satuan</th>
                <th>Harga</th>
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
                <td><?php echo $row['kdbrg'] ?></td>
                <td><?php echo $row['namabrg'] ?></td>
                <td><?php echo $row['satuanbrg'] ?></td>
                <td><?php echo $row['hargabrg'] ?></td>
                <td>
                <span class="btn btn-info btn-sm" type="button" onClick="document.getElementById('kdbrg').value =
                '<?php echo $row['kdbrg'] ?>';   document.getElementById('namabrg').value = '<?php echo
                $row['namabrg'] ?>'; document.getElementById('satuan').value = '<?php echo
                $row['satuanbrg'] ?>'; document.getElementById('hargabrg').value = '<?php echo
                $row['hargabrg'] ?>'; $('#modalCaribarang').modal('hide');"></button><i class="glyphicon glyphicon-ok-sign" aria-hidden="true"></i></span>
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






	
            
					<label class="col-sm-2 control-label">Kode Pemasok</label>
					<div class="col-sm-3">
					<input type="text" id="idpem" name="idpem" class="form-control" readonly>
					</div>
					<a class="btn btn-success btn-sm btnTambah" data-toggle="modal" data-target="#modalCariPemasok"><i class="glyphicon glyphicon-search"></i></a>
					</div>

					<div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Masuk</label>
					<div class="col-sm-3">
					<input type="date" name="tglmasuk2010013" class="form-control" required>
					</div>
					<label class="col-sm-2 control-label" align="left">Nama Pemasok</label>
					<div class="col-sm-4">
					<input type="text" id="namapem" name="namapem" class="form-control" readonly >
				




                <div class="form-group">
                    	<label class="col-sm-2 control-label">Kode Barang</label>
                    <div class="col-sm-2">
                		<input type="text" id="kdbrg" name="kdbrg" class="form-control" readonly >
                	</div>
                <div class="col-sm-1">
                <a class="btn btn-success btn-sm btnTambah" data-toggle="modal" data-target="#modalCaribarang"><i class="glyphicon glyphicon-search"></i></a>
                </div>
                <label class="col-sm-2 control-label" align="left">Harga Barang</label>
                <div class="col-sm-2">
                <input type="text" id="hargabrg" name="hargabrg" class="form-control" readonly >
                </div>
                </div>
                <div class="form-group">
                <label class="col-sm-2 control-label" align="left">Nama Barang</label>
                <div class="col-sm-3">




                
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


<?php
include '../koneksi.php';
$result = mysql_query("SELECT * FROM pemasok ORDER BY idpem ASC");
?>
<table id="datapemasok" class="table table-bordered table-striped">
<thead>
<tr>
<th>No</th>
<th>Kode Pemasok</th>
<th>Nama Pemasok</th>
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
<td><?php echo $row['idpem'] ?></td>
<td><?php echo $row['namapem'] ?></td>



<td><span class="btn btn-info btn-sm" type="button" onClick="document.getElementById('idpem').value = '<?php echo $row['idpem'] ?>'; document.getElementById('namapem').value = '<?php echo
$row['namapem'] ?>';$('#modalCariPemasok').modal('hide');"></button><i class="glyphicon glyphicon-ok-sign" aria- hidden="true"></i></span>
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









