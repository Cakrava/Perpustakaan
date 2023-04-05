<?php
include("koneksi.php");
if (isset($_POST['edit'])) {
$adminid = $_POST['adminid'];
$adminnamalengkap = $_POST['adminnamalengkap'];
$adminpass = md5 ( $_POST['adminpass']);
$adminlevel = $_POST['adminlevel'];
$sql_update_brg = "update aadmin set 
adminnamalengkap='$adminnamalengkap',adminpass='$adminpass',adminlevel='$adminlevel' where adminid='$adminid'";
$updatepemasok = mysql_query($sql_update_brg);
if ($updatepemasok) {
 echo "<script> document.location='home.php?p=dataadmin'</script>";
} else {
 echo "Gagal Update Data";
}
}
?>