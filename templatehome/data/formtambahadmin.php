<?php
include '../koneksi.php';
?>
<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">TAMBAH ADMIN</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal form-label-left input_mask" method="POST" role="form" action="home.php?p=prosestambahadmin">
                <div class="box-body">
                    <table id="datamodaljenis" class="table table-striped responsive-utilities jambo_table" >
                        <div class="form-group">
                            <label class="col-sm-3 control-label">ID</label>
                            <div class="col-sm-6">
                                <input type="text" name="adminid" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" align="left">Nama Lengkap</label>
                            <div class="col-sm-6">
                                <input type="text" name="adminnamalengkap" class="form-control" >
                            A</div>
                        </div> 

                        <div class="form-group">
                            <label class="col-sm-3 control-label" align="left">Password</label>
                            <div class="col-sm-6">
                                <input type="password" name="adminpass" class="form-control" >
                            </div>
                        </div>     

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Level</label>
                            <div class="col-sm-6">
                                <input type="text" name="adminlevel" class="form-control" >
                            </div>
                                            
                    </table>
                </div>
                <!-- footer modal -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary btnSimpan" name="simpan" >SIMPAN</button>                              
                    <a href="home.php?p=dataadmin" class="btn btn-danger btn-close"><span class="glyphicon glyphicon-cancel"></span>
                                    Batal</a>
                
                </div>
            </form>
          </div>
