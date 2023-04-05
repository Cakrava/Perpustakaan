<?php
include("koneksi.php");
if (isset($_POST['simpan'])) {
$kdbuku = $_POST['kdbuku'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$nomorak = $_POST['nomorak'];
$lantai = $_POST['lantai'];
$deskripsi = $_POST['deskripsi'];
$jumlah = $_POST['jumlah'];
$tglinput = $_POST['tglinput'];
$sql_tambah_brg = "INSERT INTO buku VALUES('$kdbuku','$judul','$kategori','$nomorak','$lantai','$deskripsi','$jumlah','$tglinput')";
$tambahbarang = mysql_query($sql_tambah_brg);
if ($tambahbarang) {
 echo "<script> document.location='home.php?p=databuku '</script>";
} else {
 echo "Gagal Tambah Buku";
}
}



