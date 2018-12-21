<script type="text/javascript">
//ambil data 
function terimadata(){	
    $.get("http://localhost/api_dip/index.php/admin?batas=10", function(data, status){
        console.log("Data: " + data + "\nStatus: " + status);
        var row = "";
        $('#admindata').empty(row);
        if (data.length){
            for (p in data){        	
            	row += "<tr><td class='kodeadmin"+(data[p].kodeadmin?data[p].kodeadmin:'')+"'>" + (data[p].kodeadmin?data[p].kodeadmin:'') + "</td><td class='nama"+(data[p].kodeadmin?data[p].kodeadmin:'')+"'>" + (data[p].nama?data[p].nama:'') + "</td><td class='email"+(data[p].kodeadmin?data[p].kodeadmin:'')+"'>" + (data[p].email?data[p].email:'') + 
            	"</td><td class='foto"+(data[p].kodeadmin?data[p].kodeadmin:'')+"'>"+ (data[p].foto? "<a href ='http://localhost/api_dip/" + data[p].foto + "' target='_blank'>"+data[p].foto+"</a>" : '')+"</td><td class='status"+(data[p].kodeadmin?data[p].kodeadmin:'')+"'>" + 
            	(data[p].status=='1'?'aktif':'tidak aktif') + "</td><td><button class='btn btn-warning btn-sm' data-toggle='modal' data-target='#modal-default' onclick='editadmin("+ data[p].kodeadmin +")' kode='"+(data[p].kodeadmin?data[p].kodeadmin:'')+"'>Edit</button> | <button kode='"+(data[p].kodeadmin?data[p].kodeadmin:'')+"' onclick='hapusfotoadmin("+ data[p].kodeadmin +")' class='btn btn-danger btn-sm'>Hapus</button></td>";        	
            }
        }else{
            row = '<tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">No data available in table</td></tr>';            
        }
        $('#admindata').append(row);
    });
}

window.onload = function() {
    this.terimadata();
}

function tambahdata(){
  $("#Inputkodeadmin").val("");
  $("#Inputjudul").val("");
  $("#Inputisi").val("");
  $("#labelfoto").html("");
  $("[name=statusadmin]").val("");
  $("#hapusadmin").hide();
}

function ambillimitadmin(){
  var batasadmin = $('[name=batasadmin]').val();
  $.get("http://localhost/api_dip/index.php/admin?batas="+batasadmin, function(data, status){
        console.log("Data: " + data + "\nStatus: " + status);
        var row = "";
        $('#admindata').empty(row);
        if (data.length){
            for (p in data){          
              row += "<tr><td class='kodeadmin"+(data[p].kodeadmin?data[p].kodeadmin:'')+"'>" + (data[p].kodeadmin?data[p].kodeadmin:'') + "</td><td class='nama"+(data[p].kodeadmin?data[p].kodeadmin:'')+"'>" + (data[p].nama?data[p].nama:'') + "</td><td class='email"+(data[p].kodeadmin?data[p].kodeadmin:'')+"'>" + (data[p].email?data[p].email:'') + 
              "</td><td class='foto"+(data[p].kodeadmin?data[p].kodeadmin:'')+"'>"+ (data[p].foto? "<a href ='http://localhost/api_dip/" + data[p].foto + "' target='_blank'>"+data[p].foto+"</a>" : '')+"</td><td class='status"+(data[p].kodeadmin?data[p].kodeadmin:'')+"'>" + 
              (data[p].status=='1'?'aktif':'tidak aktif') + "</td><td><button class='btn btn-warning btn-sm' data-toggle='modal' data-target='#modal-admin' onclick='editadmin("+ data[p].kodeadmin +")' kode='"+(data[p].kodeadmin?data[p].kodeadmin:'')+"'>Edit</button> | <button kode='"+(data[p].kodeadmin?data[p].kodeadmin:'')+"' onclick='hapusfotoadmin("+ data[p].kodeadmin +")' class='btn btn-danger btn-sm'>Hapus</button></td>";          
            }
        }else{
            row = '<tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">No data available in table</td></tr>';            
        }
        $('#admindata').append(row);
    });
}

function cariadmin(){
  var batasadmin = $('[name=batasadmin]').val();
  var cariadmin = $('[name=cariadmin]').val();
  $.get("http://localhost/api_dip/index.php/admin?batas="+batasadmin+"&cari="+cariadmin, function(data, status){
        var row = "";
        $('#admindata').empty(row);
        if (data.length){
            for (p in data){          
              row += "<tr><td class='kodeadmin"+(data[p].kodeadmin?data[p].kodeadmin:'')+"'>" + (data[p].kodeadmin?data[p].kodeadmin:'') + "</td><td class='nama"+(data[p].kodeadmin?data[p].kodeadmin:'')+"'>" + (data[p].nama?data[p].nama:'') + "</td><td class='email"+(data[p].kodeadmin?data[p].kodeadmin:'')+"'>" + (data[p].email?data[p].email:'') + 
              "</td><td class='foto"+(data[p].kodeadmin?data[p].kodeadmin:'')+"'>"+ (data[p].foto? "<a href ='http://localhost/api_dip/" + data[p].foto + "' target='_blank'>"+data[p].foto+"</a>" : '')+"</td><td class='status"+(data[p].kodeadmin?data[p].kodeadmin:'')+"'>" + 
              (data[p].status=='1'?'aktif':'tidak aktif') + "</td><td><button class='btn btn-warning btn-sm' data-toggle='modal' data-target='#modal-admin' onclick='editadmin("+ data[p].kodeadmin +")' kode='"+(data[p].kodeadmin?data[p].kodeadmin:'')+"'>Edit</button> | <button kode='"+(data[p].kodeadmin?data[p].kodeadmin:'')+"' onclick='hapusfotoadmin("+ data[p].kodeadmin +")' class='btn btn-danger btn-sm'>Hapus</button></td>";          
            }
        }else{
            row = '<tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">No data available in table</td></tr>';            
        }
        $('#admindata').append(row);
    });
}

//simpan data

function editadmin(kodeadmin){
     $.get("http://localhost/api_dip/index.php/admin?id="+kodeadmin, function(data, status){
        if (data.length){
            $("#hapusadmin").show();            
            $(".katasandi").hide();            
            for (p in data){
                $('#Inputkodeadmin').val(data[p].kodeadmin);
                $('#Inputnama').val(data[p].nama);
                $('#Inputemail').val(data[p].email);
                $('.input-file__info').html(data[p].foto)
                $('#Inputstatus').val(data[p].status);
                $('#ubahfoto').val(data[p].foto);
            }            
        }                
     });
}

function simpanadmin(){
  var kodeadmin = $('#Inputkodeadmin').val();
  if (kodeadmin){
    var formdata = $(".admindata").serializeArray();
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
        url: "http://localhost/api_dip/index.php/admin/editfotoadmin",
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        success: function(resp){
            alert(resp.status); 
            if (resp.kode=='1'){
              var status = resp.data.status==1?'aktif':'tidak aktif';
              var tautanfoto = resp.data.foto? "<a href ='http://localhost/api_dip/" + resp.data.foto + "' target='_blank'>"+resp.data.foto+"</a>" : '';
              $('.admin'+kodeadmin).html(resp.data.kodeadmin);
              $('.judul'+kodeadmin).html(resp.data.judul);
              $('.isi'+kodeadmin).html(resp.data.isi);
              $('.foto'+kodeadmin).html(tautanfoto);
              $('.status'+kodeadmin).html(status);
              $('#modal-admin').modal('hide');
            }
        },
        complete: function() {},
        error: function(xhr, textStatus, errorThrown) {
         console.log('ajax loading error...');
         return false;
       }
    });
  }else{
    var formdata = $(".admindata").serializeArray();
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
        url: "http://localhost/api_dip/index.php/admin",
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

function hapusprosesadmin() {                                  
    var formdata = $(".admin").serializeArray();
    var kirim = {}
    $(formdata).each(function(index, obj){
        kirim[obj.name] = obj.value;
    });

    console.log(kirim);            
    $.ajax({
       type: "DELETE",
       url: "http://localhost/api_dip/index.php/admin",
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

function editfotoadmin(){   
  var file_data = $("#file").prop("files")[0]; 
  var kodeadmin = $('.kodeadmin').val();
  console.log(kodeadmin);
  var stat;
  var form_data = new FormData();
  form_data.append("file", file_data);
  form_data.append("kodeadmin", kodeadmin);
  $.ajax({
   type: "POST",
   url: "http://localhost/api_dip/index.php/admin/editfotoadmin",
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

function hapusfotoadmin(kodeadmin){   
  var file_data = $("#file").prop("files")[0]; 
  console.log(kodeadmin);
  var stat;
  var form_data = new FormData();
  form_data.append("kodeadmin", kodeadmin);
  swal({
    title: "Are you sure?",
    text: "Once deleted, you will not be able to recover this imaginary file!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
        $.ajax({
         type: "POST",
         url: "http://localhost/api_dip/index.php/admin/hapusfotoadmin",
         cache: false,
         contentType: false,
         data: form_data,
         dataType : "json",
         processData: false,
         success: function(resp){                
          hapusprosesadmin();        
         },
        });
    } else {
      swal("Foto masih tersimpan dengan baik");
    }
  });
}

function simpanadmindetil(){
  var kodeadmin = $('#Inputkodeadmindetail').val();
  if (kodeadmin){
    var formdata = $(".admindetaildata").serializeArray();    
    var kirim = {}
    $(formdata).each(function(index, obj){
        kirim[obj.name] = obj.value;
    });
    
    var form_data = new FormData();    
    form_data.append("isian", JSON.stringify(kirim));
    $.ajax({
        type: 'POST',
        url: "http://localhost/api_dip/index.php/admin/admindetail",
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        success: function(resp){
            alert(resp.pesan); 
            if (resp.kode=='1'){
              $('#modal-admin').modal('hide');
            }
        },
        complete: function() {},
        error: function(xhr, textStatus, errorThrown) {
         console.log('ajax loading error...');
         return false;
       }
    });
  }else{
    var formdata = $(".admindetaildata").serializeArray();    
    var kirim = {}
    $(formdata).each(function(index, obj){
        kirim[obj.name] = obj.value;
    });
    
    var form_data = new FormData();    
    form_data.append("isian", JSON.stringify(kirim));
    $.ajax({
        type: 'POST',
        url: "http://localhost/api_dip/index.php/admin/admindetail",
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        success: function(resp){
            alert(resp.pesan); 
            if (resp.kode=='1'){
              $('#modal-admin').modal('hide');
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
  $('#Inputkodeadmindetail').val('');
  var kodeadmin = $('#kodesementaradetail').val();
  $('#Inputkodeadminb').val(kodeadmin);
}

</script>



