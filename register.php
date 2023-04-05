<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Create Account</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    
</head>

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
                                
                            <?php
include 'koneksi.php';
?>
<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Register</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal form-label-left input_mask" method="POST" role="form" action="tambahadmin.php">
                <div class="box-body">
                    <table id="datamodaljenis" class="table table-striped responsive-utilities jambo_table" >
                        <div class="form-group">
                            <label class="col-sm-10 control-label">ID</label>
                            <div class="col-sm-16">
                                <input type="text" name="adminid" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-10 control-label" align="left">Nama Lengkap</label>
                            <div class="col-sm-16">
                                <input type="text" name="adminnamalengkap" class="form-control" >
                            </div>
                        </div> 

                        <div class="form-group">
                            <label class="col-sm-10 control-label" align="left">Password</label>
                            <div class="col-sm-16">
                                <input type="password" name="adminpass" class="form-control" >
                            </div>
                        </div>     

                       
                            <div class="form-group">
        
                            <select name="adminlevel" class="btn btn-success btnSimpan w-100">
                                <option name="1">1</option>
                                <option name="2"> 2</option>
</select>
                               
                            </div>        
                            
                    </table>
                </div>
                <!-- footer modal -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary btnSimpan w-100" name="simpan" >Create</button>                              
                   </a>
                
                </div>
            </form>
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





