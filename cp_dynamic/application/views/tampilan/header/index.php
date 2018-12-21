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
                            <a class="btn btn-success" href="http://localhost/cassakandara/index.html" role="button">Lihat Perubahan Header</a>
                            <br>
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Data Tabel Header</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <div class="row">
                                        <div class="col-xs-12" style="padding-bottom: 15px;">
                                            <button type="button" id="simpanheader" data-toggle='modal' data-target='#modal-header' onclick="tambahdata()" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> &nbsp; Tambah Data</button>                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div id="batasheader" class="dataTables_length">
                                                <label>
                                                    <select size="1" name="batasheader" aria-controls="example1" onchange="ambillimitheader();"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page
                                                </label>
                                                </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="dataTables_filter" id="example1_filter">
                                                <label>Pencarian: <input type="text" name="cariheader" aria-controls="example1" onchange="cariheader()">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <table id="example1" class="table table-bordered table-striped display">
                                        <thead>
                                            <tr>
                                                <th>Kode Header</th>
                                                <th>Judul Header</th>
                                                <th>Isi Header</th>
                                                <th>Foto</th>
                                                <th>Status</th>                                                
                                                <th>Action</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody id="headerdata" onload="terimadata();">
                                            <!-- akan diisi dari js -->
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Kode Header</th>
                                                <th>Judul Header</th>
                                                <th>Isi Header</th>
                                                <th>Foto</th>
                                                <th>Status</th>                                                
                                                <th>Action</th>                                                
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <nav aria-label="Page navigation example">
                                      <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                          <a class="page-link" href="#">Next</a>
                                        </li>
                                      </ul>
                                    </nav>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
                        </div><!--/.col (left) -->
                        <!-- right column --> 
                        <!-- left column -->                       
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Data Tabel Header Detail</h3>   
                                    <input type="hidden" name="kodesementaradetail" id="kodesementaradetail">
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <div class="row">
                                        <div class="col-xs-12" style="padding-bottom: 15px;">
                                            <button type="button" id="simpanheader" data-toggle='modal' data-target='#modal-detil' onclick="tambahdetail()" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> &nbsp; Tambah Data</button>                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div id="batasdetail" class="dataTables_length">
                                                <label>
                                                    <select size="1" name="batasdetail" aria-controls="example1" onchange="ambillimitdetail();"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="dataTables_filter" id="example1_filter">
                                                <label>Pencarian: <input type="text" name="caridetail" onchange="caridetail();" aria-controls="example1">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Kode Header Detail</th>
                                                <th>Kode Header</th>
                                                <th>Nama Tombol</th>
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
                                                <th>Kode Header Detail</th>
                                                <th>Kode Header</th>
                                                <th>Nama Tombol</th>
                                                <th>Link</th>
                                                <th>Status</th>                                                
                                                <th>Action</th>                                              
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div style="padding-top:20px;" class="btn-group" role="group" aria-label="...">
                                      <button type="button" class="btn btn-default">Sebelum</button>
                                      <button type="button" class="btn btn-default">1</button>
                                      <button type="button" class="btn btn-default">2</button>                                      
                                      <button type="button" class="btn btn-default">3</button>
                                      <button type="button" class="btn btn-default">Sesudah</button>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
                        </div><!--/.col (left) -->
                        <!-- right column -->                        
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
                <div class="modal fade" id="modal-header">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Data Header</h4>
                      </div>
                      <div class="modal-body">
                        <form role="form" class="headerdata">
                            <div class="box-body">
                                <div class="form-group" style="display: none">
                                    <label for="Inputkodeheader">Kode Header</label>
                                    <input type="text" name="kodeheader" class="form-control" id="Inputkodeheader" placeholder="Enter Kode Header">
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
                                        <span class="input-file__info" id="labelfoto">No file chosen</span>                                  
                                        <input type="hidden" name="ubahfoto" class="form-control" id="ubahfoto">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="statusheader">
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
                        <h4 class="modal-title">Data Header Detail</h4>
                      </div>
                      <div class="modal-body">
                        <form role="form" class="headerdetaildata">
                            <div class="box-body">
                                <div class="form-group" style="display: none">
                                    <label for="Inputkodeheaderdetail">Kode Detail Header</label>
                                    <input type="text" name="kodeheaderdetail" class="form-control" id="Inputkodeheaderdetail" placeholder="Input kode header">
                                </div>
                                <div class="form-group" style="display: none">
                                    <label for="Inputkodeheaderb">Kode Header</label>
                                    <input type="text" name="kodeheader" class="form-control" id="Inputkodeheaderb" placeholder="Input kode header">
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
                        <button type="button" id="hapusheaderdetil" onclick="hapusheaderdetil()" class="btn btn-danger">Hapus</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
            </aside><!-- /.right-side -->
