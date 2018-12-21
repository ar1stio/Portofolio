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
                                    <h3 class="box-title">Data Tabel Profil</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <div class="row">
                                        <div class="col-xs-12" style="padding-bottom: 15px;">
                                            <button type="button" id="simpanheader" data-toggle='modal' data-target='#data-profil' onclick="tambahdata()" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> &nbsp; Tambah Data</button>                                            
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
                                                <th>Kode Profil</th>
                                                <th>Judul</th>
                                                <th>Subjudul</th>
                                                <th>Isi</th>
                                                <th>Tombol</th>                        
                                                <th>Tautan Tombol</th>
                                                <th>Status</th>       
                                                <th>Action</th>                         
                                            </tr>
                                        </thead>
                                        <tbody id="headerdata">
                                            <!-- akan diisi dari js -->
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Kode Profil</th>
                                                <th>Judul</th>
                                                <th>Subjudul</th>
                                                <th>Isi</th>
                                                <th>Tombol</th>                        
                                                <th>Tautan Tombol</th>       
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
                                    <h3 class="box-title">Data Tabel Profil Detail</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <div class="row">
                                        <div class="col-xs-12" style="padding-bottom: 15px;">
                                            <button type="button" id="simpanheader" data-toggle='modal' data-target='#data-profildetail' onclick="tambahdetail()" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> &nbsp; Tambah Data</button>                                            
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
                                                <th>Kode Profil Detail</th>
                                                <th>Kode Profil</th>
                                                <th>Isi</th>
                                                <th>Foto</th>
                                                <th>Status</th>                       
                                                <th>Action</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody id="detaildata">
                                            <!-- akan diisi dari js -->
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Kode Profil Detail</th>
                                                <th>Kode Profil</th>
                                                <th>Isi</th>
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
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
                <div class="modal fade" id="data-profil">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Input Data Profil</h4>
                      </div>                      
                      <div class="modal-body">
                        <form role="form" class="headerdata">
                            <div class="box-body">
                                <div class="form-group" style="display: none">
                                    <label for="Inputkodeprofil">Kode Profil</label>
                                    <input type="text" name="kodeprofil" class="form-control" id="Inputkodeprofil" placeholder="Enter kode profil">
                                </div>
                                <div class="form-group">
                                    <label for="Inputjudul">Judul</label>
                                    <input type="text" name="judul" class="form-control" id="Inputjudul" placeholder="Inputkan Judul">
                                </div>
                                <div class="form-group">
                                    <label for="Inputsubjudul">Subjudul</label>
                                    <input type="text" name="subjudul" class="form-control" id="Inputsubjudul" placeholder="Inputkan Subjudul">
                                </div>
                                <div class="form-group">
                                    <label for="Inputisi">Isi</label>
                                    <textarea class="form-control" name="isi" id="Inputisi" placeholder="Inputkan Isi"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="Inputtombol">Tombol</label>
                                    <input type="text" name="tombol" class="form-control" id="Inputtombol" placeholder="Inputkan Tombol">
                                </div>
                                <div class="form-group">
                                    <label for="Inputtautan">Tautan Tombol</label>
                                    <textarea class="form-control" name="tautan" id="Inputtautan" placeholder="Inputkan Tautan"></textarea>
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
                <div class="modal fade" id="data-profildetail">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Input Profil Detail</h4>
                      </div>
                      <div class="modal-body">
                        <form role="form" class="headerdata">
                            <div class="box-body">
                                <div class="form-group" style="display: none">
                                    <label for="Inputkodedetail">Kode Profil  Detail</label>
                                    <input type="text" name="kodedetail" class="form-control" id="Inputkodedetail" placeholder="Enter Kode Profil Detail">
                                </div>
                                <div class="form-group" style="display: none">
                                    <label for="Inputkodeprofil">Kode Profil</label>
                                    <input type="text" name="kodeprofil" class="form-control" id="Inputkodeprofil" placeholder="Enter Kode Profil">
                                </div>
                                <div class="form-group">
                                    <label for="Inputisi">Isi</label>
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
                        <button type="button" id="simpanheader" onclick="simpanheaderdetil()" class="btn btn-success">Simpan</button>
                        <button type="button" id="hapusheader" onclick="hapusheaderdetil()" class="btn btn-danger">Hapus</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
            </aside><!-- /.right-side -->
<script type="text/javascript">
        function terimadata(){  
            $.get("http://localhost/api_casakandara/index.php/header", function(data, status){
                console.log("Data: " + data + "\nStatus: " + status);
                var row = "";
                $('#headerdata').empty(row);
                if (data.length){
                    for (p in data){            
                        row += "<tr><td>" + (data[p].kodeheader?data[p].kodeheader:'') + "</td><td>" + (data[p].titleheader?data[p].titleheader:'') + "</td><td>" + (data[p].isi?data[p].isi:'') + 
                        "</td><td>"+ (data[p].foto? "<a href ='http://localhost/api_casakandara/" + data[p].foto + "' target='_blank'>"+data[p].foto+"</a>" : '')+"</td><td>" + 
                        (data[p].status=='1'?'aktif':'tidak aktif') + "</td><td><button id='lihat' onclick='lihat("+data[p].kodeheader+")' kodelihat='"+(data[p].kodeheader?data[p].kodeheader:'')+"' class='btn btn-info btn-sm lihat'>Lihat Detail</button> | <button class='btn btn-warning btn-sm' data-toggle='modal' data-target='#modal-default' onclick=('editheader("+ data[p].kodeheader +")') kode='"+(data[p].kodeheader?data[p].kodeheader:'')+"'>Edit</button> | <button kode='"+(data[p].kodeheader?data[p].kodeheader:'')+"' onclick=('hapusheader("+ data[p].kodeheader +")') class='btn btn-danger btn-sm'>Hapus</button></td>";          
                    }
                }else{
                    row = '<tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">No data available in table</td></tr>';            
                }
                $('#headerdata').append(row);
            });
        }

        function lihat(kodelihat){
                //console.log(kode);
                console.log('cek');    
                $.get("http://localhost/api_casakandara/index.php/header/detail?kodeheader="+kodelihat, function(data, status){
                    var row = "";
                    $('#detaildata').empty(row);
                    if (data.length){
                        for (p in data){            
                            row += "<tr><td>" + (data[p].kodeheaderdetail?data[p].kodeheaderdetail:'') + "</td><td>" + (data[p].kodeheader?data[p].kodeheader:'') + "</td><td>" + (data[p].titlebutton?data[p].titlebutton:'') + 
                            "</td><td>"+ (data[p].ling?data[p].ling:'') +"</td><td>" + 
                            (data[p].status=='1'?'aktif':'tidak aktif') + "</td><td><button class='btn btn-warning btn-sm' onclick=('editdetail("+ data[p].kodeheaderdetail +")') kode='"+(data[p].kodeheaderdetail?data[p].kodeheaderdetail:'')+"'>Edit</button> | <button kode='"+(data[p].kodeheaderdetail?data[p].kodeheaderdetail:'')+"' class='btn btn-danger btn-sm'>Hapus</button></td>";          
                        }
                    }else{
                        row = '<tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">No data available in table</td></tr>';            
                    }
                    $('#detaildata').append(row);
                });
        }

        function editheader(kodeheader){
             $.get("http://localhost/api_casakandara/index.php/header?id="+kodeheader, function(data, status){
                if (data.length){
                    for (p in data){
                        $('Inputkode').val(data[p].kodeheader);
                        $('Inputjudul').val(data[p].judul);
                    }

                }                
             });
        }

        function tambahdata(){
            $("#Inputkode").val("");
        }

        function simpanheader(){
            var kodeheader = $('#Inputkode').val();
            if (kodeheader){
                var formdata = $(".headerdata").serializeArray();
                    var file_data = $("#file").prop("files")[0]; 
                    var kirim = {}
                    $(formdata).each(function(index, obj){
                        kirim[obj.name] = obj.value;
                    });
                    
                    var form_data = new FormData();
                    form_data.append("file", file_data);
                    form_data.append("isian", JSON.stringify(kirim));
                    $.ajax({
                        type: 'POST',
                        url: "http://localhost/api_casakandara/index.php/header",
                        dataType: 'json',
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,                         
                        success: function(resp){
                            alert(resp.status); 
                        },
                        complete: function() {},
                        error: function(xhr, textStatus, errorThrown) {
                         console.log('ajax loading error...');
                         return false;
                       }
                    });
            }
            function hapusprosesheader() {                                  
                var formdata = $(".header").serializeArray();
                var kirim = {}
                $(formdata).each(function(index, obj){
                    kirim[obj.name] = obj.value;
                });

                console.log(kirim);            
                $.ajax({
                   type: "DELETE",
                   url: "http://localhost/api_casakandara/index.php/header",
                   async: false,
                   data: kirim,
                   dataType : "json",
                   success: function(data){
                      console.log(data);
                      swal(data.status);
                      return true;
                   },
                   complete: function() {},
                   error: function(xhr, textStatus, errorThrown) {
                     console.log('ajax loading error...');
                     return false;
                   }
                });

            }

            function editfotoheader(){   
              var file_data = $("#file").prop("files")[0]; 
              var kodeheader = $('.kodeheader').val();
              console.log(kodeheader);
              var stat;
              var form_data = new FormData();
              form_data.append("file", file_data);
              form_data.append("kodeheader", kodeheader);
              $.ajax({
               type: "POST",
               url: "http://localhost/api_casakandara/index.php/header/editfoto",
               cache: false,
               contentType: false,
               data: form_data,
               dataType : "json",
               processData: false,
               success: function(resp){                
                alert(resp.status);
               },
              });
            }

            function hapusfotoheader(){   
              var file_data = $("#file").prop("files")[0]; 
              var kodeheader = $('.kodeheader').val();
              console.log(kodeheader);
              var stat;
              var form_data = new FormData();
              form_data.append("kodeheader", kodeheader);
              $.ajax({
               type: "POST",
               url: "http://localhost/api_casakandara/index.php/header/hapusfoto",
               cache: false,
               contentType: false,
               data: form_data,
               dataType : "json",
               processData: false,
               success: function(resp){                
                hapusproses();
               },
              });
            }
        }
        </script>