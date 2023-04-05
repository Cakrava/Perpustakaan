<?php
include("koneksi.php");
if (isset($_POST['ok'])) {
 $kdbuku = $_POST['kdbuku'];
 $judul = $_POST['judul'];
 $kategori = $_POST['kategori'];
 $sql_tambah_brg = "INSERT INTO bantu(idbuku,idjudul,idkategori) VALUES('$kdbuku','$judul','$kategori')";
$tambahbarang = mysql_query($sql_tambah_brg);
if ($tambahbarang) {
 echo "<script> document.location='home.php?p=formtambahbrgmasuk'</script>";
} else {
 echo "Gagal Tambah Barang"; }



 
} elseif (isset($_POST['simpan'])) {
 $nofak = $_POST['nokeluar'];
 $tglkeluar = $_POST['tglkeluar'];
$peminjam = $_POST['nama'];
$alamat = $_POST['alamat'];
$nomor = $_POST['nomor'];


 $sql_tambah_brgmasuk = "INSERT INTO bukukeluar VALUES('$nofak','$tglkeluar','$peminjam','$alamat','$nomor')";
 $tambahbrgmasuk = mysql_query($sql_tambah_brgmasuk);

 $sql_tambah_detail_brg = "INSERT INTO detailkeluar(detailnokeluar,detailkdbuku,detailjudul,detailkategori)  select '$nofak',idbuku,idjudul,idkategori from bantu";
 
 $tambahdetail_brg = mysql_query($sql_tambah_detail_brg);
 $hapus_bantu = "delete from bantu";
 $hapus = mysql_query($hapus_bantu);
 if ($tambahbrgmasuk) {
 echo "<script> document.location='peminjam.php'</script>";
 } else {
 echo "Gagal Tambah Peminjam"; }
}
?>