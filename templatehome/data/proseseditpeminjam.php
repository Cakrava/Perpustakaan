<?php
include("koneksi.php");
if (isset($_POST['edit'])) {
   $kdpinjam = $_POST['kdpinjam'];
$nama = $_POST['nama'];
$nomor = $_POST['nomor'];
$alamat = $_POST['alamat'];
$tglpnj = $_POST['tglpnj'];
$tglkmb = $_POST['tglkmb'];
$sql_update_brg = "update pinjam set 
nama='$nama',nomor='$nomor',alamat='$alamat',tglpnj='$tglpnj',tglkmb='$tglkmb'  where kdpinjam='$kdpinjam'";
$updatepeminjam = mysql_query($sql_update_brg);
if ($updatepeminjam) {
 echo "<script> document.location='home.php?p=datapeminjam'</script>";
} else {
 echo "Gagal Update Data";
}
}
?>


