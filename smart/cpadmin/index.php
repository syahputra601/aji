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
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon/favicon.ico" type="img/x-icon" />
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
        Login
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Silahkan masukan akun anda.</p>

        <?php
          if (!empty($_SESSION['leveluser'])){
              echo "<script>document.location='media.php?module=home';</script>";
          }

            if (isset($_POST['submit'])){
              $username = anti_injection($_POST['username']);
              $data     = anti_injection(md5($_POST['password']));
              $pass=hash("sha512",$data);
                
                if (!ctype_alnum($username) OR !ctype_alnum($pass)){
                  echo "<div class='alert alert-danger'><center>Sekarang loginnya tidak bisa di injeksi lho</center></div>";
                }else{
                  $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$pass' AND aktif='Y'");
                    if(mysqli_num_rows($result) > 0) {

                    //Input Untuk User Login Online
                      $jam = date("H:i:s");
                      $tgl = date("Y-m-d");

                        mysqli_query($koneksi,"INSERT INTO users_log(Username,
                                  Tanggal,
                                  Jamin,
                                  Jamout,
                                  Status)
                           VALUES('$_POST[username]',
                                '$tgl',
                                '$jam',
                                'logged',
                                'online')");

                      $r= mysqli_fetch_array($result);
                      session_start();
                      $_SESSION['namauser']     = $r['username'];
                      $_SESSION['namalengkap']  = $r['nama_lengkap'];
                      $_SESSION['email']        = $r['email'];
                      $_SESSION['passuser']     = $r['password'];
                      $_SESSION['sessid']       = $r['id_session'];
                      $_SESSION['leveluser']    = $r['level'];
                      $_SESSION['upload_image_file_manager'] = true;
                      echo "<script>document.location='media.php?module=home';</script>";
                   }else{
                      echo "<div class='alert alert-danger'><center>Username atau Password anda tidak sesuai.<br>
                                                Atau akun anda belum aktif.</center></div>";
                   }
                  
                }
              }
          ?>

        <form action="" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name='username' placeholder="Username" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name='password' placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Ingatkan Saya
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button name="submit" type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

        <hr>
        <a class='pull-right' href='daftar.php'>Daftar</a><br>

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
