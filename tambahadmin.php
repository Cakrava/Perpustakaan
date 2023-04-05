<?php

include 'koneksi.php';

if (isset($_POST['simpan'])){
$adminid = $_POST['adminid'];
$adminnamalengkap = $_POST['adminnamalengkap'];
$adminpass = md5 ( $_POST['adminpass']);
$level = $_POST['adminlevel'];



$sql_tambah_brg = "INSERT INTO aadmin VALUES('$adminid','$adminnamalengkap','$adminpass','$level')";
$tambahbarang = mysql_query($sql_tambah_brg);

if ($tambahbarang) {
    echo "<script>   document.location='index.php'</script>";
} else {
    echo "Gagal Tambah Barang";
}
}
