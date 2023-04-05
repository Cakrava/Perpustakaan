<?php
include "koneksi.php";
$adminid = $_GET['adminid'];
$result = mysql_query("DELETE FROM aadmin WHERE adminid = '$adminid'");
if ($result){ ?>
 <script language="javascript">
 document.location.href="home.php?p=dataadmin";
 </script>
<?php
}else {
 trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $koneksi->error, E_USER_ERROR);
}
?>