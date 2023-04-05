













<?php
include 'koneksi.php';
 
?>
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
 <h3 class="box-title">List Buku </h3>
 </div>





 <!-- /.box-header -->
 <div class="box-body">
 <table id="judul" class="table table-bordered table-striped">



 <thead>

  



 



 <table id="databarang" name="databarang" class="table table-bordered table-hover">
 <thead>
<tr>
 <th>No</th>
 <th>Kode Buku</th>
 <th>Judul Buku</th>
 <th>Kategori</th>
 <th>Nomor Rak </th>
 <th>Lantai</th>
 <th>Tanggal Input</th>
 <th>Aksi</th>
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
 <td><?php echo $data['tglinput'] ?></td>

 <td>











    


<a href="home.php?p=proseshapusbuku&kdbuku=<?php echo $data['kdbuku'] ?>" onclick="pesan = 
confirm('Yakin data di hapus?');
if (pesan) return true; else return false;" class="btn btn-danger btn-sm"><span class="glyphicon 
glyphicon-trash" aria-hidden="true">Hapus</span></a>








   <!-- edit -->
&nbsp;


<a href="" class="btn btn-sm btn-info" data-toggle="modal"
            data-target="#modal<?php echo $data['kdbuku']; ?>">&nbsp;&nbsp;Edit&nbsp;&nbsp;</a>
        
        <!-- untuk melihat bentuk-bentuk modal kalian bisa mengunjungi laman bootstrap dan cari modal di kotak pencariannya -->
        <!-- id setiap modal juga harus berbeda, cara membedakannya dengan menggunakan kdbuku -->
        <div class="modal fade" id="modal<?php echo $data['kdbuku']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit Data Buku</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- di dalam modal-body terdapat 4 form input yang berisi data.
                    data-data tersebut ditampilkan sama seperti menampilkan data pada tabel. -->
                    <div class="modal-body">
            
 <form class="form-horizontal form-label-left input_mask" method="POST" role="form" 
action="home.php?p=proseseditbuku">
 <div class="box-body">
 <table id="datamodaljenis" class="table table-striped responsive-utilities jambo_table" >
 <div class="form-group">
 <label class="col-sm-10 control-label">Kode Buku</label>
 <div class="col-sm-15">
 <input type="text" name="kdbuku" value="<?php echo $data['kdbuku']?>" class="form-control" readonly>
 </div>
 </div>
 <div class="form-group">
 <label class="col-sm-10 control-label" align="left">Judul Buku</label>
 <div class="col-sm-15">
 <input type="text" name="judul" value="<?php echo $data['judul']?>" class="form-control" >
 </div>
 </div>
 
 <div class="form-group">
                            <label class="col-sm-10 control-label">Kategori</label>
                        
                            &nbsp;  &nbsp;  <select name="kategori">
<option value="Direktori">Direktori&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br></option>
<option value="Ensklopedia">Ensklopedia</option>
<option value="Kamus">Kamus</option>
<option value="Pegangan">Pegangan</option>
<option value="Almanak">Almanak</option>
</select>
                            </div>
                        </div>    
  
 
 <div class="form-group">
 <label class="col-sm-10 control-label">Nomor Rak</label>
 <div class="col-sm-15">
 <input type="text" name="nomorak" value="<?php echo $data['nomorak']?>" class="form-control" >
 </div>
 </div> 
 <div class="form-group">
 <label class="col-sm-10 control-label">Lantai</label>
 <div class="col-sm-15">
 <input type="text" name="lantai" value="<?php echo $data['lantai']?>" class="form-control" >
 </div>
 </div> 

 <div class="form-group">
 <label class="col-sm-10 control-label">Deskripsi</label>
 <div class="col-sm-15">
 <textarea  class="form-control" id="deskripsi" name="deskripsi"><?php echo $data['deskripsi'] ?></textarea>
 </div>
 </div> 



 
 <div class="form-group">
 <label class="col-sm-10 control-label"> Tanggal Input</label>
 <div class="col-sm-15">
 <input type="date" name="tglinput" value="<?php echo $data['tglinput']?>" class="form-control" readonly >
 </div>
 </div> 
 </table>
 </div>
 <!-- footer modal -->
 <div class="box-footer">
 <button type="submit" class="btn btn-primary btnSimpan" name="edit" >SIMPAN</button>
 
 <a href="home.php?p=databarang" class="btn btn-danger btn-close"><span class="glyphicon glyphiconcancel"></span>
 Batal</a>
 </div>
 </form>
 </div>




 
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

$kodingbuton=mysql_query("SELECT * FROM buku");

$num=mysql_num_rows($kodingbuton);

$jmlh=$num+1;

$waktu=date('dmy');

$nounik="BK-".$jmlh;

?>

























       


        

<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>



   </div>
   <div class="modal-body">
   <form class="form-horizontal form-label-left input_mask" method="POST" role="form" action="home.php?p=prosestambahbarang">
                <div class="box-body">
                    <table id="datamodaljenis" class="table table-striped responsive-utilities jambo_table" >
                        
                    
                        <div class="form-group">
                            <label class="col-sm-10 control-label">Kode Buku</label>
                            <div class="col-sm-15">
                           
                                <input type="text" name="kdbuku" class="form-control"  value="<?php echo $nounik ?>" readonly>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-10 control-label" align="left">Judul</label>
                           
                                <input type="text" name="judul" class="form-control" >
                            </div>
                        </div> 

                        <div class="form-group">
                            <label class="col-sm-10 control-label">Kategori</label>
                        
                            &nbsp;  &nbsp;  <select name="kategori">
<option value="Direktori">Direktori&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br></option>
<option value="Ensklopedia">Ensklopedia</option>
<option value="Kamus">Kamus</option>
<option value="Pegangan">Pegangan</option>
<option value="Almanak">Almanak</option>
</select>
                            </div>
                        </div>    
  

                        <div class="form-group">
                            <label class="col-sm-10 control-label">Nomor Rak</label>
                            <div class="col-sm-15">
                                <input type="text" name="nomorak" class="form-control" >
                            </div>
                        </div>                         
                        <div class="form-group">
                            <label class="col-sm-10 control-label">Lantai</label>
                            <div class="col-sm-15">
                                <input type="text" name="lantai" class="form-control" >
                            </div>
                        </div>    
                      
                
                            <div class="form-group">
                            <label class="col-sm-15 control-label">Deskripsi Buku</label>
          
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                <textarea class="textarea"  name="deskripsi" placeholder="" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </form>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

 

      </div>
      <div class="form-group">
      <label class="col-sm-10 control-label">Tanggal Input</label>
                            <div class="col-sm-15">
                                <input type="date" name="tglinput" class="form-control" >
                            </div>
                        </div>    
                <!-- footer modal -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary btnSimpan" name="simpan" >SIMPAN</button>                              
                    <a href="home.php?p=databarang" class="btn btn-danger btn-close"><span class="glyphicon glyphicon-cancel"></span>
                                    Batal</a>
 </form>
</div>






















