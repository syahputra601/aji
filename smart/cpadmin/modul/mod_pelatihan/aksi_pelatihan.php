<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<script>document.location='index.php';</script>";
}else{
  
include "../../../../config/koneksi.php";
include "../../../../config/fungsi_thumb.php";

$module=$_GET['module'];
$act=$_GET['act'];

// Input berita
if ($module=='pelatihan' AND $act=='input'){


   mysqli_query($koneksi, "INSERT INTO pelatihan( Id_pelatihan,
                                    Jenis,
                                    Nama,
                                    Lokasi,
                                    propinsi,
                                    kabupaten,
                                    tahun,
                                    Tanggal_mulai,
                                    Tanggal_selesai) 
                            VALUES('',
                                   '$_POST[jenis]',
                                   '$_POST[nm_pelatihan]',
                                   '$_POST[tempat]',
                                   '$_POST[propinsi]',
                                   '$_POST[kota]',
                                   '$_POST[tahun]',
                                   '$_POST[tgl_awal]',
                                   '$_POST[tgl_akhir]')");
  header('location:../../media.php?module='.$module);
  
}

// Update berita
elseif ($module=='pelatihan' AND $act=='update'){

    mysqli_query($koneksi, "UPDATE pelatihan SET Jenis       = '$_POST[jenis]',
                                   Nama  = '$_POST[nm_pelatihan]',
                                   Lokasi  = '$_POST[tempat]',
                                   propinsi  = '$_POST[propinsi]',
                                   kabupaten  = '$_POST[kota]',
                                   tahun  = '$_POST[tahun]',
                                   Tanggal_mulai  = '$_POST[tgl_awal]',
                                   Tanggal_selesai  = '$_POST[tgl_akhir]'
           WHERE Id_pelatihan   = '$_POST[id]'");
  header('location:../../media.php?module='.$module);

}

 //hapus module
elseif($module=='pelatihan' AND $act=='hapus'){
  $id=$_GET['no'];
  mysqli_query($koneksi, "DELETE FROM pelatihan WHERE Id_pelatihan ='$id'");
  header('location:../../media.php?module='.$module);
}

}
