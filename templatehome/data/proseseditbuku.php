<?php
include("koneksi.php");
if (isset($_POST['edit'])) {
   $kdbuku = $_POST['kdbuku'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$nomorak = $_POST['nomorak'];
$lantai = $_POST['lantai'];
$deskripsi = $_POST['deskripsi'];

$tglinput = $_POST['tglinput'];
$sql_update_brg = "update buku set 
judul='$judul',kategori='$kategori',nomorak='$nomorak',lantai='$lantai',deskripsi='$deskripsi',tglinput='$tglinput'  where kdbuku='$kdbuku'";
$updatebuku = mysql_query($sql_update_brg);
if ($updatebuku) {
 echo "<script> document.location='home.php?p=databarang'</script>";
} else {
 echo "Gagal Update Data";
}
}
?>


