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

// Input Pendidikan Informal
if ($module=='lat' AND $act=='input'){

   mysqli_query($koneksi, "INSERT INTO pendidikan_informal( Id_peninformal,
                                    Nip,
                                    Nama_pendidikan,
                                    Tempat,
                                    Tahun,
                                    Penyelenggara) 
                            VALUES('',
                                   '$_POST[nip]',
                                   '$_POST[nm_pendidikan]',
                                   '$_POST[tempat]',
                                   '$_POST[tahun]',
                                   '$_POST[plg]')");
  header('location:../../media.php?module=lat&nip='.$lop);

}

// Update Pendidikan Informal
elseif ($module=='lat' AND $act=='update'){

    $lop3=$_GET['nip'];
    mysqli_query($koneksi, "UPDATE pendidikan_informal SET Nip       = '$_POST[nip]',
                                   Nama_pendidikan      = '$_POST[nm_pendidikan]',
                                   Tempat       = '$_POST[tempat]',   
                                   Tahun       = '$_POST[tahun]',
                                   Penyelenggara      = '$_POST[plg]'
                                  WHERE Id_peninformal   = '$_POST[id]'");
    header('location:../../media.php?module=lat&nip='.$lop3);

}

 //Hapus Pendidikan Informal
elseif($module=='lat' AND $act=='hapus'){
  $lop2=$_GET['nip'];
  mysqli_query($koneksi, "DELETE FROM pendidikan_informal WHERE Id_peninformal='$_GET[id]'");  

  header('location:../../media.php?module=lat&nip='.$lop2);
}

}
