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
                                    <h3 class="box-title">Data Tabel Tampil</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <div class="row">
                                        <div class="col-xs-12" style="padding-bottom: 15px;">
                                            <button type="button" id="simpanheader" data-toggle='modal' data-target='#data-tampil' onclick="tambahdata()" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> &nbsp; Tambah Data</button>                                            
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
                                                <th>Kode Tampil</th>
                                                <th>Judul</th>
                                                <th>Isi</th>
                                                <th>Foto</th>
                                                <th>Status</th>                       
                                            </tr>
                                        </thead>
                                        <tbody id="headerdata">
                                            <!-- akan diisi dari js -->
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Kode Tampil</th>
                                                <th>Judul</th>
                                                <th>Isi</th>
                                                <th>Foto</th>
                                                <th>Status</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
                        </div><!--/.col (left) -->
                        <!-- right column --> 
                        <!-- right column -->                        
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
                <div class="modal fade" id="data-tampil">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Input Data Tampil</h4>
                      </div>
                      <div class="modal-body">
                        <form role="form" class="headerdata">
                            <div class="box-body">
                                <div class="form-group" style="display: none">
                                    <label for="exampleInputkode tampil">Kode Tampil</label>
                                    <input type="text" name="kodetampil" class="form-control" id="exampleInputkode tampil" placeholder="Enter kode Tampil">
                                </div>                                
                                <div class="form-group">
                                    <label for="exampleInputjudul">Judul</label>
                                    <input type="text" name="judul" class="form-control" id="exampleInputjudul" placeholder="Inputkan Judul">
                                </div>                                
                                <div class="form-group">
                                    <label for="exampleInputisi">Isi</label>
                                    <textarea class="form-control" name="isi" id="exampleInputisi" placeholder="Inputkan Isi"></textarea>
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
                        <button type="button" id="simpanheader" onclick="simpantampil()" class="btn btn-success">Simpan</button>
                        <button type="button" id="hapusheader" onclick="hapustampil()" class="btn btn-danger">Hapus</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
            </aside><!-- /.right-side -->
