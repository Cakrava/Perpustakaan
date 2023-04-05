<?php
include "koneksi.php";
$kdpinjam = $_GET['kdpinjam'];
$result = mysql_query("DELETE FROM pinjam WHERE kdpinjam = '$kdpinjam'");
if ($result){ ?>
 <script language="javascript">
 
 document.location.href="home.php?p=datapeminjam";
 </script>
<?php
}else {
 trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $koneksi->error, E_USER_ERROR);
}
?>