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
if ($module=='loop' AND $act=='input'){

  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){
   mysqli_query($koneksi, "INSERT INTO pendidikan_formal( Nip,
                                    Jenjang,
                                    Jurusan,
                                    Nama_sekolah,
                                    Lokasi,
                                    Tahun_lulus) 
                            VALUES('$_POST[nip]',
                                   '$_POST[jenjang]',
                                   '$_POST[jurusan]',
                                   '$_POST[nama_sekolah]',
                                   '$_POST[lokasi]',
                                   '$_POST[tgl_lulus]')");
  header('location:../../media.php?module=loop&nip='.$lop);
  }else{
   mysqli_query($koneksi, "INSERT INTO pendidikan_formal( Nip,
                                    Jenjang,
                                    Jurusan,
                                    Nama_sekolah,
                                    Lokasi,
                                    Tahun_lulus) 
                            VALUES('$_POST[nip]',
                                   '$_POST[jenjang]',
                                   '$_POST[jurusan]',
                                   '$_POST[nama_sekolah]',
                                   '$_POST[lokasi]',
                                   '$_POST[tgl_lulus]')");
  header('location:../../media.php?module=loop&nip='.$lop);
 }
}

// Update berita
elseif ($module=='loop' AND $act=='update'){
    $lop3=$_GET['nip'];
    mysqli_query($koneksi, "UPDATE pendidikan_formal SET Nip       = '$_POST[nip]',
                                   Jenjang      = '$_POST[jenjang]',
                                   Jurusan       = '$_POST[jurusan]',   
                                   Nama_sekolah       = '$_POST[nama_sekolah]',
                                   Lokasi       = '$_POST[lokasi]',
                                   Tahun_lulus       = '$_POST[tgl_lulus]'
                                  WHERE Id_penformal   = '$_POST[id]'");
    header('location:../../media.php?module=loop&nip='.$lop3);

}

 //hapus module
elseif($module=='loop' AND $act=='hapus'){
  $lop2=$_GET['nip'];
  mysqli_query($koneksi, "DELETE FROM pendidikan_formal WHERE Id_penformal='$_GET[id]'");  

  header('location:../../media.php?module=loop&nip='.$lop2);
}

}
