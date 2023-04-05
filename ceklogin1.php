
<!DOCTYPE html>
<?php
session_start();
include "koneksi.php"
?>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login-Meh Library</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="css/style.css" rel="stylesheet">
    
</head>




<style>
    h6 {
	color: red;
}
    </style>








<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    


  
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">

                            <form method="post" action="ceklogin1.php?op=in" name="login" id="login">

                            <a class="text-center" href="index.html"> <h4><p>Login</h4></a>

<?php

$userid = $_POST['username'];
$pass = $_POST['password'];
$op = $_GET['op'];

if($op=="in"){
$cek = mysql_query("SELECT * FROM aadmin WHERE adminid='$userid' AND adminpass=md5('$pass')");

if(mysql_num_rows($cek)==1){ //jika berhasil akan bernilai 1
$c = mysql_fetch_array($cek);
$_SESSION['adminid'] = $c['adminid'];
$_SESSION['adminlevel'] = $c['adminlevel']; if($c['adminlevel']==1){ header("location:templatehome/home2.php");
}
else if($c['adminlevel']==2){ header("location:templatehome/home2.php");
}
}
else{
echo "<center ><h6>email atau password salah</h6>";

}

}
else if($op=="out"){
unset($_SESSION['adminid']); unset($_SESSION['adminlevel']); header("location:index.php");
}
?>



                                
                                <form class="mt-5 mb-5 login-input">
                                    <div class="form-group"><h6>
                                        <input type="username" class="form-control" placeholder="Username" name="username" >
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password">
</h6>
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Sign in</button>
                                </form>
                                <p class="mt-5 login-form__footer">Dont have account? <a href="register.php" class="text-primary">Sign Up</a> now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>
</html>




