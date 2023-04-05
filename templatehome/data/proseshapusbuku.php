<?php
include "koneksi.php";
$kdbrg = $_GET['kdbuku'];
$result = mysql_query("DELETE FROM buku WHERE kdbuku = '$kdbrg'");
if ($result){ ?>
 <script language="javascript">
 
 document.location.href="semuabuku.php?p=databarang";
 </script>
<?php
}else {
 trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $koneksi->error, E_USER_ERROR);
}
?>