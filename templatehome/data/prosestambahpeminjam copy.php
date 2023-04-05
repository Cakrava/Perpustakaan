<?php
include("koneksi.php");
if (isset($_POST['simpan'])) {
$kdpinjam = $_POST['kdpinjam'];
$nama = $_POST['nama'];
$nomor = $_POST['nomor'];
$alamat = $_POST['alamat'];
$tglpnj = $_POST['tglpnj'];
$tglkmb = $_POST['tglkmb'];
$sql_tambah_pnj = "INSERT INTO pinjam VALUES('$kdpinjam','$nama','$nomor','$alamat','$tglpnj','$tglkmb')";
$tambahpeminjam = mysql_query($sql_tambah_pnj);
if ($tambahpeminjam) {
 echo "<script> document.location='home.php?p=datapeminjam '</script>";
} else {
 echo "Gagal Tambah Peminjam";
}
}



