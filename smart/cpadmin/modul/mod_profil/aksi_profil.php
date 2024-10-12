<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<script>document.location='index.php';</script>";
}else{
  
include "../../../../config/koneksi.php";
include "../../../../config/fungsi_thumb.php";

$module=$_GET['module'];
$act=$_GET['act'];

// Input user
if ($module=='user' AND $act=='input'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 
  
  $data=md5($_POST['password']);
  $pass=hash("sha512",$data);
  
  // Apabila ada foto yang diupload
  if (!empty($lokasi_file)){
  UploadUser($nama_file_unik);
  mysqli_query($koneksi, "INSERT INTO users(username,
                                 password,
                                 nip,
                                 nama_lengkap,
                                 email, 
                                 no_telp,
                                 foto,
                                 id_session) 
                         VALUES('$_POST[username]',
                                '$pass',
                                '$_POST[nip]',
                                '$_POST[nama_lengkap]',
                                '$_POST[email]',
                                '$_POST[no_telp]',
                                '$nama_file_unik',
                                '$pass')");

  header('location:../../media.php?module='.$module);
  }else{
  mysqli_query($koneksi, "INSERT INTO users(username,
                                 password,
                                 nip,
                                 nama_lengkap,
                                 email, 
                                 no_telp,
                                 id_session) 
                         VALUES('$_POST[username]',
                                '$pass',
                                '$_POST[nip]',
                                '$_POST[nama_lengkap]',
                                '$_POST[email]',
                                '$_POST[no_telp]',
                                '$pass')");

  header('location:../../media.php?module='.$module);
}
}

// Update user
elseif ($module=='profil' AND $act=='update') {
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 
  
  // Apabila foto tidak diganti
  if($_POST['password']!=''){
  $data=md5($_POST['password']);
  $pass=hash("sha512",$data);
  if (empty($lokasi_file)){
    mysqli_query($koneksi, "UPDATE users SET password  = '$pass',
                                  nip = '$_POST[nip]',
                                  nama_lengkap   = '$_POST[nama_lengkap]',
                                  email          = '$_POST[email]',  
                                  no_telp        = '$_POST[no_telp]' WHERE  id_session     = '$_POST[id]'");

    if ($_SESSION['leveluser']=='admin'){
      header('location:../../media.php?module=home');
    }else{
      header('location:../../media.php?module=profil&act=edit&id='.$_POST[id]);
    }
  }
  // Apabila password diubah
  else{
  $data_foto = mysqli_query($koneksi, "SELECT foto FROM users WHERE id_session='$_POST[id]'");
  $r      = mysqli_fetch_array($data_foto);
  @unlink('../../../../foto_user/'.$r['foto']);
  @unlink('../../../../foto_user/'.'small_'.$r['foto']);
    UploadUser($nama_file_unik ,'../../../../foto_user/');
    mysqli_query($koneksi, "UPDATE users SET password        = '$pass',
                                  nip = '$_POST[nip]',
                                  nama_lengkap    = '$_POST[nama_lengkap]',
                                  email           = '$_POST[email]',
                                  foto          = '$nama_file_unik', 
                                  no_telp         = '$_POST[no_telp]' WHERE id_session      = '$_POST[id]'");

  }
  }else{
  if (empty($lokasi_file)){
  mysqli_query($koneksi, "UPDATE users SET   nip = '$_POST[nip]',
                                  nama_lengkap   = '$_POST[nama_lengkap]',
                                  email          = '$_POST[email]',  
                                  no_telp        = '$_POST[no_telp]' WHERE  id_session     = '$_POST[id]'");

    if ($_SESSION['leveluser']=='admin'){
      header('location:../../media.php?module=home');
    }else{
      header('location:../../media.php?module=profil&act=edit&id='.$_POST[id]);
    }
  }else{
  $data_foto = mysqli_query($koneksi, "SELECT foto FROM users WHERE id_session='$_POST[id]'");
  $r = mysqli_fetch_array($data_foto);
  @unlink('../../../../foto_user/'.$r['foto']);
  @unlink('../../../../foto_user/'.'small_'.$r['foto']);
    UploadUser($nama_file_unik ,'../../../../foto_user/');

    mysqli_query($koneksi, "UPDATE users SET nip = '$_POST[nip]',
                                  nama_lengkap    = '$_POST[nama_lengkap]',
                                  email           = '$_POST[email]',  
                                  foto          = '$nama_file_unik', 
                                  no_telp         = '$_POST[no_telp]' WHERE id_session      = '$_POST[id]'");

  }
  }
    if ($_SESSION['leveluser']=='admin'){
      header('location:../../media.php?module=home');
    }else{
      header('location:../../media.php?module=profil&act=edit&id='.$_POST[id]);
    }
}


 //hapus module
elseif($module=='profil' AND $act=='hapus'){
  $id=abs((int)$_GET['id']);
  mysqli_query($koneksi, "DELETE FROM users WHERE id_session = $id");
  header('location:../../media.php?module='.$module);
}

}
?>
