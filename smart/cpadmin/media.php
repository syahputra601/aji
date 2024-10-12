<?php
session_start();
error_reporting(0);
if (trim($_SESSION['leveluser'])==''){
  echo "<script>document.location='index.php';</script>";
}else{
include "../../config/koneksi.php";
include "../../config/fungsi_indotgl.php";

function user_akses($mod,$id){
  $link = "?module=".$mod;
  global $koneksi;
  $cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM users WHERE users.id_session='$id'"));
  return $cek;
}

function umenu_akses($link,$id){
  global $koneksi;
  $cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM users_ WHERE users.id_session='$id'"));
  return $cek;
}

function akses_salah(){
  $pesan = "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Maaf Anda tidak berhak mengakses halaman ini</center>";
  $pesan.= "<meta http-equiv='refresh' content='2;url=media.php?module=home'>";
  return $pesan;
}


$users= mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM users where username='".$_SESSION['namauser']."'"));
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <script type="text/javascript">
        var txt="Peningkatan Kapasitas Hakim | KYRI - ";
        var speed=250;
        function move() { document.title=txt;
        txt=txt.substring(1,txt.length)+txt.charAt(0);
        fresh=setTimeout("move()",speed);}move();
    </script>
        <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.css">
    <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="assets/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="assets/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


    <style type="text/css"> .files{ position:absolute; z-index:2; top:0; left:0; filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; opacity:0; background-color:transparent; color:transparent; } </style>
    <script type="text/javascript" src="assets/plugins/jQuery/jquery-1.12.3.min.js"></script>
    <script language="javascript" type="text/javascript"> 
      var maxAmount = 160;
      function textCounter(textField, showCountField) {
        if (textField.value.length > maxAmount) {
          textField.value = textField.value.substring(0, maxAmount);
        }else{ 
          showCountField.value = maxAmount - textField.value.length;
        }
      }
      
    </script>
    <script src="../../ckeditor/ckeditor.js"></script>
    <style type="text/css">
      .checkbox-scroll { border:1px solid #ccc; width:100%; height: 114px; padding-left:8px; overflow-y: scroll; }
    </style>
    <style>
        .example-modal .modal {
        position: relative;
        top: auto;
        bottom: auto;
        right: auto;
        left: auto;
        display: block;
        z-index: 1;
        }
        
        .example-modal .modal {
        background: transparent !important;
        }
    </style>

<!-- Script Untuk Tampil User Online -->
    <script>
            //Skirp yang wajib ada jika ingin menggunakan AJAX
            function GetXmlHttpObject()
                {
                var xmlHttp;

                try
                    {
                    // Firefox, Opera 8.0+, Safari
                    xmlHttp = new XMLHttpRequest();
                    }
                catch (e)
                    {
                    //Internet Explorer
                    try
                        {
                        xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
                        }
                    catch (e)
                        {
                        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                    }

                return xmlHttp;
                }
        
      function cekOnline()
      {
        xmlHttp = GetXmlHttpObject();
        
        if (xmlHttp == null)
        {
          alert("Browser Anda Tidak Mendukung HTTP Request");
          return;
        }
        
        var url = "cekOnline.php";
        xmlHttp.open("POST", url, true);
        xmlHttp.onreadystatechange = stateChanged;
        xmlHttp.send(null);
      }
      
            function stateChanged()
                {
                if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0)
                    {
                    var hitung = xmlHttp.responseText;
                    document.getElementById("jumlahOnline").innerHTML = "<font color='red'>" + hitung + "</font> user online";
                    window.setTimeout("cekOnline();", 2000);
                    }
                }
      
      function online()
      {
                online = GetXmlHttpObject();

                if (online == null)
                    {
                    alert("Browser Anda Tidak Mendukung HTTP Request");
                    return;
                    }

                var url = "online.php";
                online.open("POST", url, true);
                online.onreadystatechange = responeOnline;
                online.send(null);
      }
      
      function responeOnline()
      {
                if (online.readyState == 4 || online.readyState == 0)
                    {
                    cekOnline();
                    }
      }
            
      function exit()
      {
        exit = GetXmlHttpObject();
        
        if (exit == null)
        {
          alert("Browser Tidak Support HTTP Request");
          return;
        }
        
        var url = "exit.php";
        exit.open("POST", url, true);
        exit.send(null);
      }
            
    </script> 


<!-- SCRIPT UNTUK DISABLE PAGE SOURCE -->
<script language=JavaScript>
<!--

//Disable right mouse click Script
//By Maximus (maximus@nsimail.com) w/ mods by DynamicDrive
//For full source code, visit http://www.dynamicdrive.com

var message="Eiitss.. gabisa klik kanan sob!";

///////////////////////////////////
function clickIE4(){
if (event.button==2){
alert(message);
return false;
}
}

function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
alert(message);
return false;
}
}
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function("alert(message);return false")

// -->
</script>



<!--Kode untuk mencegah shorcut keyboard, view source dll.-->

<script type="text/javascript">

window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}

</script>

<script type="text/javascript">

document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}

</script>

  </head>

  <body class="hold-transition skin-blue sidebar-mini" onload="online();" onbeforeunload="exit();">
    <div class="wrapper">
      <header class="main-header">
          <?php include "header.php"; ?>
      </header>

      <aside class="main-sidebar">
          <?php include "menu.php"; ?>
      </aside>

      <div class="content-wrapper">
        
        <section class="content-header">
          <h1>PKH <small>Control panel</small></h1>
          <ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
          </ol>
        </section>

        <section class="content">
            <?php include "content.php"; ?>
        </section>
        <div style='clear:both'></div>
      </div><!-- /.content-wrapper -->





      <footer class="main-footer">
          <?php include "footer.php"; ?>
      </footer>
       <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <div class="tab-content">
                    <div class="tab-pane" id="control-sidebar-home-tab"></div>      
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->
    </div><!-- ./wrapper -->
    <!-- jQuery 2.1.4 -->
    <script src="assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Highchart -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="assets/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="assets/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>

    <!-- Bootstrap WYSIHTML5 -->
    <script src="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="assets/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/app.min.js"></script>


    <script>
        $(function () {
                   
    $("#example1").DataTable({
      "scrollX": false
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "scrollX": false
    });
    $("#example3").DataTable({
      
    });

            // $("#example1").DataTable();
            // $('#example2').DataTable({
            //     "paging": true,
            //     "lengthChange": false,
            //     "searching": false,
            //     "ordering": true,
            //     "info": true,
            //     "autoWidth": false
            // });
            // $("#example3").DataTable();
            // $("#example4").DataTable();
            // $("#example5").DataTable();
            // $('#example6').DataTable({
            //     "autoWidth": false
            // });                           
                              
            // //Date picker 1
            // $('#tanggal_pelatihan_awal').datepicker({
            //     startView: 2,
            //     format: "yyyy/mm/dd",
            //     todayHighlight: true, 
            //     clearBtn: true,                               
            //     autoclose: true
            // });
            
            // //Date picker 2
            // $('#tanggal_pelatihan_akhir').datepicker({
            //     startView: 2,
            //     format: "yyyy/mm/dd",
            //     todayHighlight: true, 
            //     clearBtn: true,                               
            //     autoclose: true
            // });
            
            //Date picker 3
            $('#tahun_picker').datepicker({
                startView: 2,
                minViewMode: 2,
                format: "yyyy",
                clearBtn: true,                             
                autoclose: true
            });


    // Menampilkan Provinsi
    $.get("eksekusi.php",{x:1},function(data){
      $("#propinsi").html(data);
    });

    // Menampilkan Kabupaten
    $("#propinsi").change(function(){
      pro = $("#propinsi").val();
      $.get("eksekusi.php",{x:2,id:pro},function(data){
        $("#kota").html(data);
      })
    });

    // Menampilkan Provinsi Pengadilan
    $.get("eksekusi.php",{x:3},function(data){
      $("#propinsi_pengadilan").html(data);
    });

    // Menampilkan Instansi
    $("#propinsi_pengadilan").change(function(){
      prodilan = $("#propinsi_pengadilan").val();
      $.get("eksekusi.php",{x:4,id:prodilan},function(data){
        $("#instansi").html(data);
      })
    });

    // Menampilkan Pelatihan
    $("#thn_anatomi").change(function(){
      anatomi = $("#thn_anatomi").val();
      $.get("eksekusi.php",{x:5,id:anatomi},function(data){
        $("#jns_anatomi").html(data);
      })
    });

    // Menampilkan NIP/NRP SECARA OTOMATIS
    $("#nip").keyup(function(){
      var np = $("#nip").val();
      $.get("eksekusi.php",{x:6,id:np},function(data){
      var cet = data.split(",");
      $("#nm_lengkap").val(cet[0]);
      $("#ktp").val(cet[1]);
      $("#jns").val(cet[2]);
      $("#email").val(cet[3]);
      $("#tempat").val(cet[4]);
      $("#tanggal").val(cet[5]);
      $("#alamat").val(cet[6]);
      })
    })

    // Menampilkan jenis pelatihan
    $.get("eksekusi.php",{x:7},function(data){
      $("#jenis2").html(data);
    });

    // Menampilkan Nama Pelatihan
    $("#jenis2").change(function(){
      prodilan = $("#jenis2").val();
      $.get("eksekusi.php",{x:8,id:prodilan},function(data){
        $("#nmpelatihan").html(data);
      })
    });

    // Menampilkan Id Pelatihan
    $("#nmpelatihan").change(function(){
      id2 = $("#nmpelatihan").val();
      $.get("eksekusi.php",{x:9,id:id2},function(data){
        var cet = data.split(",");
        $("#idpelatihan").val(cet[0]);
        $("#tanggal_mulai").val(cet[1]);
        $("#tanggal_selesai").val(cet[2]);
      })
    });

    //-------- MEMUNCULKAN NAMA secara otomatis MEMALUI NIP------  
    $("#nip").keyup(function(){
        var nilai = $("#nip").val();
          $.get("eksekusi.php",{x:10,id:nilai},function(nilaiku){
          
        var out = nilaiku.split(",");
          $("#nama_lengkap").val(out[0]);
        })
      })


        });
    </script>  
<script>
  $(function () {
    $(".textarea").wysihtml5();
  });

  CKEDITOR.replace('editor1' ,{
      filebrowserImageBrowseUrl : '../kcfinder'
  });
</script>
<script type="text/javascript">
//     $("#tahun").datepicker( {
//     format: " yyyy",
//     viewMode: "years", 
//     minViewMode: "years"
// });
</script>
  </body>
</html>
<?php } ?>