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
                                            <button type="button" id="simpanheader" data-toggle='modal' data-target='#modal-default' onclick="tambahdata()" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> &nbsp; Tambah Data</button>                                            
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
                                                <th>Kode Footer</th>
                                                <th>Tittle Footer</th>
                                                <th>Isi Footer</th>
                                                <th>Foto</th>
                                                <th>Status</th>                                                
                                                <th>Action</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody id="headerdata">
                                            <!-- akan diisi dari js -->
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Kode Footer</th>
                                                <th>Tittle Footer</th>
                                                <th>Isi Footer</th>
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
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Data Tabel Footer Detail</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <div class="row">
                                        <div class="col-xs-12" style="padding-bottom: 15px;">
                                            <button type="button" id="simpanheader" data-toggle='modal' data-target='#modal-detil' onclick="tambahdetail()" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> &nbsp; Tambah Data</button>                                            
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
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Kode Footer Detail</th>
                                                <th>Kode Footer</th>
                                                <th>Title Button</th>
                                                <th>Link</th>
                                                <th>Status</th>                                                
                                                <th>Action</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody id="detaildata">
                                            <!-- akan diisi dari js -->
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Kode Footer Detail</th>
                                                <th>Kode Footer</th>
                                                <th>Title Button</th>
                                                <th>Link</th>
                                                <th>Status</th>                                                
                                                <th>Action</th>                                                
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
                        </div><!--/.col (left) -->
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
                        <form role="form" class="headerdata">
                            <div class="box-body">
                                <div class="form-group" style="display: none">
                                    <label for="Inputkodefooter">Kode Footer</label>
                                    <input type="text" name="kodefooter" class="form-control" id="Inputkodefooter" placeholder="Enter Kode Footer">
                                </div>
                                <div class="form-group">
                                    <label for="Inputjudul">Judul</label>
                                    <input type="text" name="judul" class="form-control" id="Inputjudul" placeholder="Inputkan Judul">
                                </div>
                                <div class="form-group">
                                    <label for="Inputisi">Isi</label>
                                    <textarea class="form-control" name="isi" id="Inputisi" placeholder="Inputkan Isi"></textarea>
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
                        <button type="button" id="simpanheader" onclick="simpanheader()" class="btn btn-success">Simpan</button>
                        <button type="button" id="hapusheader" onclick="hapusheader()" class="btn btn-danger">Hapus</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <div class="modal fade" id="modal-detil">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Data Footer Detail</h4>
                      </div>
                      <div class="modal-body">
                        <form role="form" class="headerdata">
                            <div class="box-body">
                                <div class="form-group" style="display: none">
                                    <label for="Inputkodefooter">Kode Footer</label>
                                    <input type="text" name="kodefooter" class="form-control" id="Inputkodefooter" placeholder="Input kode Footer">
                                </div>
                                <div class="form-group" style="display: none">
                                    <label for="Inputkodefooterdetail">Kode Footer Detail</label>
                                    <input type="text" name="kodefooterdetail" class="form-control" id="Inputkodefooterdetail" placeholder="Input kode footer">
                                </div>
                                <div class="form-group">
                                    <label for="Inputtombol">Nama Tombol</label>
                                    <input type="text" name="tombol" class="form-control" id="Inputtombol" placeholder="Inputkan tombol">
                                </div>
                                <div class="form-group">
                                    <label for="Inputling">Link</label>
                                    <textarea class="form-control" name="ling" id="Inputling" placeholder="Inputkan link"></textarea>
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
                        <button type="button" id="simpanheader" onclick="simpanheaderdetil()" class="btn btn-success">Simpan</button>
                        <button type="button" id="hapusheader" onclick="hapusheaderdetil()" class="btn btn-danger">Hapus</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
            </aside><!-- /.right-side -->