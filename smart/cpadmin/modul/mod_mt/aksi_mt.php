<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<script>document.location='index.php';</script>";
}else{
  
include "../../../../config/koneksi.php";
include "../../../../config/fungsi_thumb.php";

$module=$_GET['module'];
$act=$_GET['act'];
$lop=$_POST['nip'];

// Input berita
if ($module=='mt' AND $act=='input'){

   mysqli_query($koneksi, "INSERT INTO riwayat_pekerjaan( Id_riwayat,
                                    Nip,
                                    Instansi,
                                    Jabatan,
                                    Tahun_mulai) 
                            VALUES('',
                                   '$_POST[nip]',
                                   '$_POST[instansi]',
                                   '$_POST[jabatan]',
                                   '$_POST[tgl_mulai]')");
  header('location:../../media.php?module=mt&nip='.$lop);

}

// Update berita
elseif ($module=='mt' AND $act=='update'){
    $lop3=$_GET['nip'];
    mysqli_query($koneksi, "UPDATE riwayat_pekerjaan SET Nip       = '$_POST[nip]',
                                   Instansi      = '$_POST[instansi]',
                                   Jabatan       = '$_POST[jabatan]',   
                                   Tahun_mulai       = '$_POST[tgl_mulai]'
                                  WHERE Id_riwayat   = '$_POST[id]'");
    header('location:../../media.php?module=mt&nip='.$lop3);

}

 //hapus module
elseif($module=='mt' AND $act=='hapus'){
  $lop2=$_GET['nip'];
  mysqli_query($koneksi, "DELETE FROM riwayat_pekerjaan WHERE Id_riwayat='$_GET[id]'");  

  header('location:../../media.php?module=mt&nip='.$lop2);
}

}
