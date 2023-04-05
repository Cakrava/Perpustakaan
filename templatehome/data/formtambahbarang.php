<?php
include '../koneksi.php';
?>
<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">TAMBAH DATA BUKU</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal form-label-left input_mask" method="POST" role="form" action="home.php?p=prosestambahbarang">
                <div class="box-body">
                    <table id="datamodaljenis" class="table table-striped responsive-utilities jambo_table" >
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kode Buku</label>
                            <div class="col-sm-6">
                                <input type="text" name="kdbuku" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" align="left">Judul</label>
                            <div class="col-sm-6">
                                <input type="text" name="judul" class="form-control" >
                            A</div>
                        </div> 

                        <div class="form-group">
                            <label class="col-sm-3 control-label" align="left">Kategori</label>
                            <div class="col-sm-6">
                                <input type="text" name="kategori" class="form-control" >
                            </div>
                        </div>     

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nomor Rak</label>
                            <div class="col-sm-6">
                                <input type="text" name="nomorak" class="form-control" >
                            </div>
                        </div>                         
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Lantai</label>
                            <div class="col-sm-6">
                                <input type="text" name="lantai" class="form-control" >
                            </div>
                        </div>                          
                    </table>
                </div>
                <!-- footer modal -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary btnSimpan" name="simpan" >SIMPAN</button>                              
                    <a href="home.php?p=databarang" class="btn btn-danger btn-close"><span class="glyphicon glyphicon-cancel"></span>
                                    Batal</a>
                
                </div>
            </form>
          </div>









          
