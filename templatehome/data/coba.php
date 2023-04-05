<?php  
//index.php
$connect = mysqli_connect("localhost", "root", "", "prj2020022tugasakhir");
$query = "SELECT * FROM karyawan ORDER BY id DESC";
$result = mysqli_query($connect, $query);
 ?>  
<!DOCTYPE html>  
<html>  
 <head>  

  <script src="jquery.min.js"></script>  
  <link rel="stylesheet" href="bootstrap.min.css" />  
  <script src="bootstrap.min.js"></script>  
 </head>  
 <body>  
 
   <div class="table-responsive">
    <div align="left">
     <button type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-success">+Tambah</button>
    </div>
    <br />
    <div id="employee_table">
     <table class="table table-bordered">
      <tr>
      <th>No</th>
 <th>Kode Buku</th>
 <th>Judul Buku</th>
 <th>Kategori</th>
 <th>Nomor Rak </th>
 <th>Lantai</th>
 <th>Aksi</th>
      </tr>
      <?php
      while($row = mysqli_fetch_array($result))
      {
      ?>
      <tr>
      <tr>
 <td><?php echo $nomor ?></td>
 <td><?php echo $data['kdbuku'] ?></td>
 <td><?php echo $data['judul'] ?></td>
 <td><?php echo $data['kategori'] ?></td>
 <td><?php echo $data['nomorak'] ?></td>
 <td><?php echo $data['lantai'] ?></td>

      </tr>
      <?php
      }
      ?>
     </table>
    </div>
   </div>
 
  </div>
 </body>  
</html>  

<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
   
   </div>
   <div class="modal-body">
    <form method="post" id="insert_form">
     <label>Nama Karyawan</label>
     <input type="text" name="nama" id="nama" class="form-control" />
     <br />
     <label>Alamat Karyawan</label>
     <textarea name="alamat" id="alamat" class="form-control"></textarea>
     <br />
     <label>Jenis Kelamin</label>
     <select name="gender" id="gender" class="form-control">
      <option value="Laki-laki">Laki-laki</option>  
      <option value="Perempuan">Perempuan</option>
     </select>
     <br />  
     <label>Umur</label>
     <input type="text" name="umur" id="umur" class="form-control" />
     <br />
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />

    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<div id="dataModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Detail Data Karyawan</h4>
   </div>
   <div class="modal-body" id="detail_karyawan">
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>


<div id="editModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Edit Data Karyawan</h4>
   </div>
   <div class="modal-body" id="form_edit">
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<script>  
$(document).ready(function(){
// Begin Aksi Insert
 $('#insert_form').on("submit", function(event){  
  event.preventDefault();  
  if($('#nama').val() == "")  
  {  
   alert("Mohon Isi Nama ");  
  }  
  else if($('#alamat').val() == '')  
  {  
   alert("Mohon Isi Alamat");  
  }  
 
  else  
  {  
   $.ajax({  
    url:"insert.php",  
    method:"POST",  
    data:$('#insert_form').serialize(),  
    beforeSend:function(){  
     $('#insert').val("Inserting");  
    },  
    success:function(data){  
     $('#insert_form')[0].reset();  
     $('#add_data_Modal').modal('hide');  
     $('#employee_table').html(data);  
    }  
   });  
  }  
 });
//END Aksi Insert

//Begin Tampil Detail Karyawan
 $(document).on('click', '.view_data', function(){
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"select.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    $('#detail_karyawan').html(data);
    $('#dataModal').modal('show');
   }
  });
 });
//End Tampil Detail Karyawan
 
//Begin Tampil Form Edit
  $(document).on('click', '.edit_data', function(){
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"edit.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    $('#form_edit').html(data);
    $('#editModal').modal('show');
   }
  });
 });
//End Tampil Form Edit

//Begin Aksi Delete Data
 $(document).on('click', '.hapus_data', function(){
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"delete.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
   $('#employee_table').html(data);  
   }
  });
 });
}); 
//End Aksi Delete Data
 </script>