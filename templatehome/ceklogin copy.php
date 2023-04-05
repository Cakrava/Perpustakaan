<?php session_start(); include"koneksi.php";

$userid = $_POST['username'];
$pass = $_POST['password'];
$op = $_GET['op'];

if($op=="in"){
$cek = mysql_query("SELECT * FROM admin WHERE adminid='$userid' AND adminpass=md5('$pass')");

if(mysql_num_rows($cek)==1){ //jika berhasil akan bernilai 1
$c = mysql_fetch_array($cek);
$_SESSION['adminid'] = $c['adminid'];
$_SESSION['adminlevel'] = $c['adminlevel']; if($c['adminlevel']==1){ header("location:templatehome/home.php");
}
else if($c['adminlevel']==2){ header("location:templatehome/home.php");
}
}
else{
echo "<center>LOGIN GAGAL! <br> Username atau Password Anda tidak benar.<br> Atau account Anda Belum Mendaftar.<br>";
echo "<a href=index.php><b>ULANGI LAGI</b></a><br>";
}

}
else if($op=="out"){
unset($_SESSION['adminid']); unset($_SESSION['adminlevel']); header("location:index.php");
}
?>
