            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <?php echo $halaman ?>
                        <small>Preview</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#"><?php echo $submenu; ?></a></li>
                        <li class="active"><?php echo $halaman; ?></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Data Tabel Footer</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <div class="row">
                                        <div class="col-xs-12" style="padding-bottom: 15px;">
                                            <button type="button" id="simpanadmin" data-toggle='modal' data-target='#modal-default' onclick="tambahdata()" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> &nbsp; Tambah Data</button>                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div id="example1_length" class="dataTables_length">
                                                <label>
                                                    <select size="1" name="example1_length" aria-controls="example1"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page
                                                </label>
                                                </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="dataTables_filter" id="example1_filter">
                                                <label>Search: <input type="text" aria-controls="example1">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <table id="example1" class="table table-bordered table-striped display">
                                        <thead>
                                            <tr>
                                                <th>Kode Admin</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Foto</th>
                                                <th>Status</th>                                                
                                                <th>Action</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody id="admindata">
                                            <!-- akan diisi dari js -->
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Kode Admin</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Foto</th>
                                                <th>Status</th>                                                 
                                                <th>Action</th>                                                
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
                        </div><!--/.col (left) -->
                        <!-- right column --> 
                        <!-- left column -->                                               
                        <!-- right column -->                        
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
                <div class="modal fade" id="modal-default">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Data Footer</h4>
                      </div>
                      <div class="modal-body">
                        <form role="form" class="admindata">
                            <div class="box-body">
                                <div class="form-group" style="display: none">
                                    <label for="Inputkodeadmin">Kode Admin</label>
                                    <input type="text" name="kodeadmin" class="form-control" id="Inputkodeadmin" placeholder="Enter Kode admin">
                                </div>                              
                                <div class="form-group">
                                    <label for="Inputnama">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="Inputnama" placeholder="Inputkan Nama">
                                </div>
                                <div class="form-group">
                                    <label for="Inputemail">Email</label>
                                    <textarea class="form-control" name="email" id="Inputemail" placeholder="Inputkan email"></textarea>
                                </div>
                                <div class="form-group katasandi">
                                    <label for="Inputpassword">Kata Sandi</label>
                                    <textarea class="form-control" name="password" id="Inputpassword" placeholder="Inputkan kata sandi"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="file">Foto</label>
                                    <div class="input-group js-input-file">  
                                        <input class="input-file" type="file" name="file_cv" id="file" style="display: none !important">
                                        <label class="label--file" for="file">Choose file</label>
                                        <span class="input-file__info">No file chosen</span>                                  
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option value="1">Aktif</option>
                                        <option value="0">Tidak Aktif</option>                                        
                                    </select>
                                </div>                                
                            </div><!-- /.box-body -->                            
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="button" id="simpanadmin" onclick="simpanadmin()" class="btn btn-success">Simpan</button>
                        <button type="button" id="hapusadmin" onclick="hapusadmin()" class="btn btn-danger">Hapus</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>            
            </aside><!-- /.right-side -->