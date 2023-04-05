<?php
include("koneksi.php");
if (isset($_POST['edit'])) {
$kdbuku = $_POST['kdbuku'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$nomorak = $_POST['nomorak'];
$lantai = $_POST['lantai'];
$deskripsi = $_POST['deskripsi'];

$sql_update_brg = "update buku set 
judul='$judul',kategori='$kategori',nomorak='$nomorak',lantai='$lantai',deskripsi='$deskripsi'  where kdbuku='$kdbuku'";
$updatebarang = mysql_query($sql_update_brg);
if ($updatebarang) {
 echo "<script> document.location='home.php?p=databarang'</script>";
} else {
 echo "Gagal Update Data";
}
}
?>

<?php
include("koneksi.php");
if (isset($_POST['edit'])) {
$kdbuku = $_POST['kdbuku'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$nomorak = $_POST['nomorak'];
$lantai = $_POST['lantai'];
$deskripsi = $_POST['deskripsi'];
$sql_update_brg = "update buku set 
judul='$judul',kategori='$kategori',nomorak='$nomorak',lantai='$lantai',deskripsi='$deskripsi'   where kdbuku='$kdbuku'";
$updatepeminjam = mysql_query($sql_update_brg);
if ($updatepeminjam) {
 echo "<script> document.location='home.php?p=databarang'</script>";
} else {
 echo "Gagal Update Data";
}
}
?>

