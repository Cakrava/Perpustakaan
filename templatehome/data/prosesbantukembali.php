<?php
include("koneksi.php");
if (isset($_POST['ok'])) {
 $detailkdbuku = $_POST['detailkdbuku'];
 $detailjudul = $_POST['detailjudul'];
 $detailkategori = $_POST['detailkategori'];
 $sql_tambah_brg = "INSERT INTO bantubalik(idbuku,iddetailjudul,iddetailkategori) VALUES('$detailkdbuku','$detailjudul','$detailkategori')";
$tambahbarang = mysql_query($sql_tambah_brg);
if ($tambahbarang) {
 echo "<script> document.location='home.php?p=formtambahbrgkembali'</script>";
} else {
 echo "Gagal Tambah Barang"; }



 
} elseif (isset($_POST['simpan'])) {
 $nofak = $_POST['nokeluar'];
 $tglkeluar = $_POST['tglkeluar'];
$peminjam = $_POST['peminjam'];
$alamat = $_POST['alamat'];
$nomor = $_POST['nomor'];


 $sql_tambah_brgmasuk = "INSERT INTO bukukembali VALUES('$nofak','$tglkeluar','$peminjam','$alamat','$nomor')";
 $tambahbrgmasuk = mysql_query($sql_tambah_brgmasuk);

 $sql_tambah_detail_brg = "INSERT INTO detailkembali(detailnokeluar,detailkdbuku,detailjudul,detailkategori)  select '$nofak',idbuku,iddetailjudul,iddetailkategori from bantubalik";
 
 $tambahdetail_brg = mysql_query($sql_tambah_detail_brg);
 $hapusbukudipinjam = "delete from bukukeluar where nokeluar='$nofak'";
 $hapus = mysql_query($hapusbukudipinjam);
 $hapuspinjaman = "delete from detailkeluar where detailnokeluar='$nofak'";
 $hapus = mysql_query($hapuspinjaman);
 $hapus_bantu_balik = "delete from bantubalik";
 $hapus = mysql_query($hapus_bantu_balik);
 if ($tambahbrgmasuk) {
 echo "<script> document.location='kembali.php?'</script>";
 } else {
 echo "Gagal Tambah Peminjam"; }
}
?>