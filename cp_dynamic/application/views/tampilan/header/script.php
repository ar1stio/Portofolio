<script type="text/javascript">
//ambil data 
function terimadata(){	
    $.get("http://localhost/api_casakandara/index.php/header?batas=10", function(data, status){
        console.log("Data: " + data + "\nStatus: " + status);
        var row = "";
        $('#headerdata').empty(row);
        if (data.length){
            for (p in data){        	
            	row += "<tr><td class='header"+(data[p].kodeheader?data[p].kodeheader:'')+"'>" + (data[p].kodeheader?data[p].kodeheader:'') + "</td><td class='judul"+(data[p].kodeheader?data[p].kodeheader:'')+"'>" + (data[p].judul?data[p].judul:'') + "</td><td class='isi"+(data[p].kodeheader?data[p].kodeheader:'')+"'>" + (data[p].isi?data[p].isi:'') + 
            	"</td><td class='foto"+(data[p].kodeheader?data[p].kodeheader:'')+"'>"+ (data[p].foto? "<a href ='http://localhost/api_casakandara/" + data[p].foto + "' target='_blank'>"+data[p].foto+"</a>" : '')+"</td><td class='status"+(data[p].kodeheader?data[p].kodeheader:'')+"'>" + 
            	(data[p].status=='1'?'aktif':'tidak aktif') + "</td><td><button id='lihat' onclick='lihat("+data[p].kodeheader+")' kodelihat='"+(data[p].kodeheader?data[p].kodeheader:'')+"' class='btn btn-info btn-sm lihat'>Lihat Detail</button> | <button class='btn btn-warning btn-sm' data-toggle='modal' data-target='#modal-header' onclick='editheader("+ data[p].kodeheader +")' kode='"+(data[p].kodeheader?data[p].kodeheader:'')+"'>Edit</button> | <button kode='"+(data[p].kodeheader?data[p].kodeheader:'')+"' onclick='(hapusheader("+ data[p].kodeheader +"))' class='btn btn-danger btn-sm'>Hapus</button></td>";        	
            }
        }else{
            row = '<tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">No data available in table</td></tr>';            
        }
        $('#headerdata').append(row);
    });
}

window.onload = function() {
    this.terimadata();
}

function tambahdata(){
  $("#Inputkodeheader").val("");
  $("#Inputjudul").val("");
  $("#Inputisi").val("");
  $("#labelfoto").html("");
  $("[name=statusheader]").val("");
  $("#hapusheader").hide();
}

function lihat(kodelihat){
        //console.log(kode);
  $.get("http://localhost/api_casakandara/index.php/header/detail?kodeheader="+kodelihat+"&batas=10", function(data, status){
      var row = "";
      $('#kodesementaradetail').val(kodelihat);
      $('#detaildata').empty(row);
      if (data.length){
          for (p in data){            
              row += "<tr><td>" + (data[p].kodeheaderdetail?data[p].kodeheaderdetail:'') + "</td><td>" + (data[p].kodeheader?data[p].kodeheader:'') + "</td><td>" + (data[p].tombol?data[p].tombol:'') + 
              "</td><td>"+ (data[p].tautantombol? "<a href ='" + data[p].tautantombol + "' target='_blank'>"+data[p].tautantombol+"</a>":'') +"</td><td>" + 
              (data[p].status=='1'?'aktif':'tidak aktif') + "</td><td><button class='btn btn-warning btn-sm' onclick=('editdetail("+ data[p].kodeheaderdetail +")') kode='"+(data[p].kodeheaderdetail?data[p].kodeheaderdetail:'')+"'>Edit</button> | <button kode='"+(data[p].kodeheaderdetail?data[p].kodeheaderdetail:'')+"' class='btn btn-danger btn-sm'>Hapus</button></td>";          
          }
      }else{
          row = '<tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">Tidak ada data detail silahkan klik tambahkan data</td></tr>';            
      }
      $('#detaildata').append(row);
  });
}

function ambillimitdetail(){
        //console.log(kode);
  var kodeheader = $('#kodesementaradetail').val();
  var batasdetail = $('[name=batasdetail]').val();
  $.get("http://localhost/api_casakandara/index.php/header/detail?kodeheader="+kodeheader+"&batas="+batasdetail, function(data, status){
      var row = "";
      $('#detaildata').empty(row);
      if (data.length){
          for (p in data){            
              row += "<tr><td>" + (data[p].kodeheaderdetail?data[p].kodeheaderdetail:'') + "</td><td>" + (data[p].kodeheader?data[p].kodeheader:'') + "</td><td>" + (data[p].tombol?data[p].tombol:'') + 
              "</td><td>"+ (data[p].tautantombol? "<a href ='" + data[p].tautantombol + "' target='_blank'>"+data[p].tautantombol+"</a>":'') +"</td><td>" + 
              (data[p].status=='1'?'aktif':'tidak aktif') + "</td><td><button class='btn btn-warning btn-sm' onclick=('editdetail("+ data[p].kodeheaderdetail +")') kode='"+(data[p].kodeheaderdetail?data[p].kodeheaderdetail:'')+"'>Edit</button> | <button kode='"+(data[p].kodeheaderdetail?data[p].kodeheaderdetail:'')+"' class='btn btn-danger btn-sm'>Hapus</button></td>";          
          }
      }else{
          row = '<tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">Tidak ada data detail silahkan klik tambahkan data</td></tr>';            
      }
      $('#detaildata').append(row);
  });
}

function ambillimitheader(){
  var batasheader = $('[name=batasheader]').val();
  $.get("http://localhost/api_casakandara/index.php/header?batas="+batasheader, function(data, status){
        console.log("Data: " + data + "\nStatus: " + status);
        var row = "";
        $('#headerdata').empty(row);
        if (data.length){
            for (p in data){          
              row += "<tr><td class='header"+(data[p].kodeheader?data[p].kodeheader:'')+"'>" + (data[p].kodeheader?data[p].kodeheader:'') + "</td><td class='judul"+(data[p].kodeheader?data[p].kodeheader:'')+"'>" + (data[p].judul?data[p].judul:'') + "</td><td class='isi"+(data[p].kodeheader?data[p].kodeheader:'')+"'>" + (data[p].isi?data[p].isi:'') + 
              "</td><td class='foto"+(data[p].kodeheader?data[p].kodeheader:'')+"'>"+ (data[p].foto? "<a href ='http://localhost/api_casakandara/" + data[p].foto + "' target='_blank'>"+data[p].foto+"</a>" : '')+"</td><td class='status"+(data[p].kodeheader?data[p].kodeheader:'')+"'>" + 
              (data[p].status=='1'?'aktif':'tidak aktif') + "</td><td><button id='lihat' onclick='lihat("+data[p].kodeheader+")' kodelihat='"+(data[p].kodeheader?data[p].kodeheader:'')+"' class='btn btn-info btn-sm lihat'>Lihat Detail</button> | <button class='btn btn-warning btn-sm' data-toggle='modal' data-target='#modal-header' onclick='editheader("+ data[p].kodeheader +")' kode='"+(data[p].kodeheader?data[p].kodeheader:'')+"'>Edit</button> | <button kode='"+(data[p].kodeheader?data[p].kodeheader:'')+"' onclick=('hapusheader("+ data[p].kodeheader +")') class='btn btn-danger btn-sm'>Hapus</button></td>";         
            }
        }else{
            row = '<tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">No data available in table</td></tr>';            
        }
        $('#headerdata').append(row);
    });
}

function cariheader(){
  var batasheader = $('[name=batasheader]').val();
  var cariheader = $('[name=cariheader]').val();
  $.get("http://localhost/api_casakandara/index.php/header?batas="+batasheader+"&cari="+cariheader, function(data, status){
        var row = "";
        $('#headerdata').empty(row);
        if (data.length){
            for (p in data){          
              row += "<tr><td class='header"+(data[p].kodeheader?data[p].kodeheader:'')+"'>" + (data[p].kodeheader?data[p].kodeheader:'') + "</td><td class='judul"+(data[p].kodeheader?data[p].kodeheader:'')+"'>" + (data[p].judul?data[p].judul:'') + "</td><td class='isi"+(data[p].kodeheader?data[p].kodeheader:'')+"'>" + (data[p].isi?data[p].isi:'') + 
              "</td><td class='foto"+(data[p].kodeheader?data[p].kodeheader:'')+"'>"+ (data[p].foto? "<a href ='http://localhost/api_casakandara/" + data[p].foto + "' target='_blank'>"+data[p].foto+"</a>" : '')+"</td><td class='status"+(data[p].kodeheader?data[p].kodeheader:'')+"'>" + 
              (data[p].status=='1'?'aktif':'tidak aktif') + "</td><td><button id='lihat' onclick='lihat("+data[p].kodeheader+")' kodelihat='"+(data[p].kodeheader?data[p].kodeheader:'')+"' class='btn btn-info btn-sm lihat'>Lihat Detail</button> | <button class='btn btn-warning btn-sm' data-toggle='modal' data-target='#modal-header' onclick='editheader("+ data[p].kodeheader +")' kode='"+(data[p].kodeheader?data[p].kodeheader:'')+"'>Edit</button> | <button kode='"+(data[p].kodeheader?data[p].kodeheader:'')+"' onclick=('hapusheader("+ data[p].kodeheader +")') class='btn btn-danger btn-sm'>Hapus</button></td>";         
            }
        }else{
            row = '<tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">No data available in table</td></tr>';            
        }
        $('#headerdata').append(row);
    });
}

//simpan data

function editheader(kodeheader){
     $.get("http://localhost/api_casakandara/index.php/header?id="+kodeheader, function(data, status){
        if (data.length){
            $("#hapusheader").show();            
            for (p in data){
                $('#Inputkodeheader').val(data[p].kodeheader);
                $('#Inputjudul').val(data[p].judul);
                $('#Inputisi').val(data[p].isi);
                $('#labelfoto').html(data[p].foto)
                $('#Inputstatus').val(data[p].status);
                $('#ubahfoto').val(data[p].foto);
            }            
        }                
     });
}

function simpanheader(){
  var kodeheader = $('#Inputkodeheader').val();
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
        url: "http://localhost/api_casakandara/index.php/header/editfotoheader",
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        success: function(resp){
            alert(resp.status); 
            if (resp.kode=='1'){
              var status = resp.data.status==1?'aktif':'tidak aktif';
              var tautanfoto = resp.data.foto? "<a href ='http://localhost/api_casakandara/" + resp.data.foto + "' target='_blank'>"+resp.data.foto+"</a>" : '';
              $('.header'+kodeheader).html(resp.data.kodeheader);
              $('.judul'+kodeheader).html(resp.data.judul);
              $('.isi'+kodeheader).html(resp.data.isi);
              $('.foto'+kodeheader).html(tautanfoto);
              $('.status'+kodeheader).html(status);
              $('#modal-header').modal('hide');
            }
        },
        complete: function() {},
        error: function(xhr, textStatus, errorThrown) {
         console.log('ajax loading error...');
         return false;
       }
    });
  }else{
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
            alert(resp.pesan); 
        },
        complete: function() {},
        error: function(xhr, textStatus, errorThrown) {
         console.log('ajax loading error...');
         return false;
       }
    });
  }
}

function hapusheader(kodeheader) {   
    console.log(kodeheader);            
    var formdata = $(".headerdata").serializeArray();
    var kirim = {}
    $(formdata).each(function(index, obj){
        kirim[obj.name] = obj.value;
    });
    swal({
      title: "Yakin akan menghapus data?",
      text: "Data header detail "+ kodeheader +" akan ikut terhapus!",
      icon: "warning",
      buttons: [
        'Batalkan',
        'Konfimasi!'
      ],
      dangerMode: true,
    }).then(function(isConfirm) {
      if (isConfirm) {
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
      } else {
        swal("Membatalkan", "Data Anda masih tersimpan", "error");
      }
    })



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
   url: "http://localhost/api_casakandara/index.php/header/editfotoheader",
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

function simpanheaderdetil(){
  var kodeheader = $('#Inputkodeheaderdetail').val();
  if (kodeheader){
    var formdata = $(".headerdetaildata").serializeArray();    
    var kirim = {}
    $(formdata).each(function(index, obj){
        kirim[obj.name] = obj.value;
    });
    
    var form_data = new FormData();    
    form_data.append("isian", JSON.stringify(kirim));
    $.ajax({
        type: 'POST',
        url: "http://localhost/api_casakandara/index.php/header/headerdetail",
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        success: function(resp){
            alert(resp.pesan); 
            if (resp.kode=='1'){
              $('#modal-header').modal('hide');
            }
        },
        complete: function() {},
        error: function(xhr, textStatus, errorThrown) {
         console.log('ajax loading error...');
         return false;
       }
    });
  }else{
    var formdata = $(".headerdetaildata").serializeArray();    
    var kirim = {}
    $(formdata).each(function(index, obj){
        kirim[obj.name] = obj.value;
    });
    
    var form_data = new FormData();    
    form_data.append("isian", JSON.stringify(kirim));
    $.ajax({
        type: 'POST',
        url: "http://localhost/api_casakandara/index.php/header/headerdetail",
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        success: function(resp){
            alert(resp.pesan); 
            if (resp.kode=='1'){
              $('#modal-header').modal('hide');
            } 
        },
        complete: function() {},
        error: function(xhr, textStatus, errorThrown) {
         console.log('ajax loading error...');
         return false;
       }
    });
  }
}

function tambahdetail(){
  $('#Inputkodeheaderdetail').val('');
  var kodeheader = $('#kodesementaradetail').val();
  $('#Inputkodeheaderb').val(kodeheader);
}

</script>



