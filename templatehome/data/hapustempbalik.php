<?php include "koneksi.php"; 
$kdbuku = $_GET['kdbuku']; 
$result = mysql_query("DELETE FROM bantubalik WHERE idbuku = '$kdbuku'"); 
if ($result){ ?>     
<script language="javascript">                
document.location.href="home.php?p=formtambahbrgkembali";     
</script> 
<?php 
}else {         
    trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $koneksi->error, E_USER_ERROR); 
    } 
    ?> 