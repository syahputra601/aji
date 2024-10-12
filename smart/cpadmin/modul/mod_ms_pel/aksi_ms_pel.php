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
if ($module=='ms_pel' AND $act=='input'){

  $cek="SELECT nama FROM masterpelatihan where nama ='$_POST[nm_pelatihan]'";
  $ada=mysqli_query($koneksi, $cek) or die(mysqli_error());
  if(mysqli_num_rows($ada)>0)
  { 
     echo "<script>alert('Nama pelatihan sudah ada.');history.go(-1);</script>";
  }
  else
  {
    //SImpan data

  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){
   mysqli_query($koneksi, "INSERT INTO masterpelatihan( no,
                                    nama,
                                    deskripsi) 
                            VALUES('',
                                   '$_POST[nm_pelatihan]',
                                   '$_POST[deskripsi]')");
  header('location:../../media.php?module='.$module);
  }else{
   mysqli_query($koneksi, "INSERT INTO masterpelatihan( no,
                                    nama,
                                    deskripsi) 
                            VALUES('',
                                   '$_POST[nm_pelatihan]',
                                   '$_POST[deskripsi]')");
  header('location:../../media.php?module='.$module);
 }
}  
}

// Update berita
elseif ($module=='ms_pel' AND $act=='update'){

  // Apabila gambar tidak diganti
  if (empty($lokasi_file)){
    mysqli_query($koneksi, "UPDATE masterpelatihan SET nama       = '$_POST[nm_pelatihan]',
                                   deskripsi  = '$_POST[deskripsi]'
           WHERE no   = '$_POST[id]'");
  header('location:../../media.php?module='.$module);
  }else{
    mysqli_query($koneksi, "UPDATE masterpelatihan SET nama       = '$_POST[nm_pelatihan]',
                                   deskripsi       = '$_POST[deskripsi]'   
                                  WHERE no   = '$_POST[id]'");
    header('location:../../media.php?module='.$module);
  }
}

 //hapus module
elseif($module=='ms_pel' AND $act=='hapus'){
  $data=mysqli_fetch_array(mysqli_query($koneksi, "SELECT gambar FROM agenda WHERE id_agenda='$_GET[id]'"));
  if ($data['gambar']!=''){
  mysqli_query($koneksi, "DELETE FROM agenda WHERE id_agenda='$_GET[id]'");
     unlink("../../../foto_agenda/$_GET[namafile]");   
     unlink("../../../foto_agenda/small_$_GET[namafile]");   
  }
  else{
  mysqli_query($koneksi, "DELETE FROM masterpelatihan WHERE no='$_GET[no]'");  
  }
  header('location:../../media.php?module='.$module);
}

}
