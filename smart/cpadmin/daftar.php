<?php 
  error_reporting(0);
  session_start();
  include "../../config/koneksi.php";
  include "../../config/library.php";
  include "../../config/fungsi_indotgl.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrator &rsaquo; Log In</title>
    <meta name="author" content="phpmu.com">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">
    <script language="javascript">
    function validasi(form){
      if (form.username.value == ""){
        alert("Anda belum mengisikan Username.");
        form.username.focus();
        return (false);
      }
         
      if (form.password.value == ""){
        alert("Anda belum mengisikan Password.");
        form.password.focus();
        return (false);
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
  <body OnLoad="document.login.username.focus();" class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <h2>Perancangan Sistem Informasi Administrasi Peningkatan Kapasitas Hakim Pada Komisi Yudisial Republik Indonesia 
        Di Jakarta</h2>
        <h2><b>DAFTAR</b> Pengguna Baru</h2>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Silahkan masukan akun baru anda.</p>

        <?php

          if (!empty($_SESSION['leveluser'])){
              echo "<script>document.location='media.php?module=home';</script>";
          }

            if (isset($_POST['submit'])){

$result = mysqli_query($koneksi, "SELECT * FROM users WHERE Nip ='$_POST[nip]'");
                    if(mysqli_num_rows($result) > 0) {
                      echo  "<div class='alert alert-danger'>
                                <center>
                                  Nip Sudah Terdaftar.<br>
                                </center>
                              </div>";
                    }
                    else{
$result2 = mysqli_query($koneksi, "SELECT * FROM peserta WHERE Nip='$_POST[nip]'");
                    if(mysqli_num_rows($result2) > 0) {

define('ROOT', 'http://aji.informatikakomputer352.com/smart/cpadmin/');

    $kode     = md5(uniqid(rand()));
    $data     = md5($_POST['password']);
    $pass     = hash("sha512",$data);
    $join     = date('Y-m-d H:i:s');

    $query = mysqli_query($koneksi, "INSERT INTO users(username,
                                 password,
                                 nip,
                                 nama_lengkap,
                                 email,
                                 kode,
                                 bergabung,
                                 Id_session) 
                         VALUES('$_POST[username]',
                                '$pass',
                                '$_POST[nip]',
                                '$_POST[nama_lengkap]',
                                '$_POST[email]',
                                '$kode',
                                '$join',
                                '$pass')") or die (mysqli_error());

    $to   = $_POST['email'];
    $judul  = "Aktivasi Akun Anda";
    $dari = "From: ajifirmansyahputra@pkh.com \n";
    $dari .= "Content-type: text/html \r\n";


    $pesan  = "Klik link berikut untuk mengaktifkan akun : <br />";
    $pesan  .= "<a href='".ROOT."konfirm.php?email=".$_POST['email']."&kode=$kode&username=".$_POST['username']."'>".ROOT."konfirm.php?email=".$_POST['email']."&kode=$kode</a>";

    $kirim  = mail($to, $judul, $pesan, $dari);

    if($kirim AND $query)
    {
      echo  "<div class='alert alert-success'>
                <center>
                  Akun Anda Telah terdaftar,<br>
                  Silahkan Aktivasi Akun Anda Melalui Konfirmasi Email.
                </center>
              </div>";
    }
    else
    {
      echo  "<div class='alert alert-danger'>
                <center>
                  Akun Gagal Terdaftar.<br>
                </center>
              </div>";
    }

  }else{
      echo  "<div class='alert alert-danger'>
                <center>
                  Nip Belum Terdata.<br>
                  Silahkan hubungi bagian admin.
                </center>
              </div>";
  }
                }
          
              }
          ?>

        <form action="" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name='nip' placeholder="NIP" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name='nama_lengkap' placeholder="Nama Lengkap" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name='username' placeholder="Username" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name='password' placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name='email' placeholder="Email" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-4">
                <button type="reset" class="btn btn-sm btn-block btn-flat">
                    <i class="ace-icon fa fa-refresh"></i>
                        <span>Reset</span>
                </button>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button name="submit" type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
            </div><!-- /.col -->
          </div>
        </form>

        <hr>
        <a class='pull-left' href='index.php'>Kembali</a><br>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="assets/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>


  </body>
</html>
