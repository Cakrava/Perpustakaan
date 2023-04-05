<?php include "koneksi.php"; 
$nokeluar = $_GET['nokeluar']; 
$result = mysql_query("DELETE FROM bukukeluar WHERE nokeluar = '$nokeluar'"); 
if ($result){ ?>     
<script language="javascript">                      
document.location.href="peminjam.php?";     
</script> 
<?php 
}else {         
    trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $koneksi->error, E_USER_ERROR); 
    } $nokeluar = $_GET['nokeluar']; 
    $result = mysql_query("DELETE FROM detailkeluar WHERE detailnofak ='$nokeluar'"); 
    if ($result){ ?>     
    <script language="javascript">             
    alert('Berhasil Dihapus');             
    document.location.href="peminjam.php";     
    </script> 
    <?php 
    }else {         
        trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $koneksi->error, E_USER_ERROR); 
    }
    ?> 