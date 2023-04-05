
<?php
include 'koneksi.php';
$result = mysql_query("SELECT nokeluar,tglkeluar,peminjam  FROM bukukeluar  ORDER BY nokeluar ASC;");
?>
<div class="col-xs-12">
<div class="box">
<div class="box-header">
<h3 class="box-title">List Peminjam</h3>
</div>
<!--/.box-header -->
<div class="box-body">

<table id="databrgmasuk" class="table table-bordered table-striped">
<thead>
<tr>
<th>No</th>
<th>No Peminjaman</th>
<th>Nama Peminjam</th>
<th>Tanggal Keluar</th>
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
<td><?php echo $row['nokeluar'] ?></td>
<td><?php echo $row['peminjam'] ?></td>
<td><?php echo $row['tglkeluar'] ?></td>

<td>
<a href="peminjam.php?p=cetak&nokeluar=<?php echo $row['nokeluar'] ?>"
class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil">Invoice</i></a>
<a href="home.php?p=hapusbuku&nokeluar=<?php echo $row['nokeluar'] ?>" 
onclick="pesan = confirm('Yakin data di hapus?');
if (pesan) return true; else return false;" class="btn btn-danger btn-sm">Hapus<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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


<a data-toggle="modal" data-target="#laporan" class="btn btn-primary"><i 
 class="btn btn-primary">Cetak Laporan</i></a> 


 
              
              
<!-- Modal Cari Pemasok-->
<div id="laporan" class="modal modal fade" role="dialog">
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



<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-11">
                        <form role="form" method="POST" action="data/cetakpeminjam.php" name="penjualan" id="finput">
                            <div class="box-body">
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Bulan</label>
                                    <div class="col-sm-2">
                                        <select name="bulan">
                                            <option value="01">Januari</option>
                                            <option value="02">Februari</option>
                                            <option value="03">Maret</option>
                                            <option value="04">April</option>
                                            <option value="05">Mei</option>
                                            <option value="06">Juni</option>
                                            <option value="07">Juli</option>
                                            <option value="08">Agustus</option>
                                            <option value="09">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="12">November</option>
                                            <option value="12">Desember</option>
                                        </select>
                                    </div>

                                    <br>
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label">Tahun</label>
                                        <div class="col-sm-1">
                                            <select name="tahun">
                                                <?php
                                                $mulai = date('Y') - 50;
                                                for ($i = $mulai; $i < $mulai + 100; $i++) {
                                                    $sel = $i == date('Y') ? ' selected="selected"' : '';
                                                    echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btndefault" name="cetak">CETAK</button>
                                
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function print_d() {
        window.open("data/lappenjualan.php", "_blank");
    }
</script>









<!-- footer modal -->
<div class="modal-footer">
</div>
</form>
</div>

