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

  //Proses merubah Id pelatihan menjadi Nama Pelatihan
  $query=mysqli_query($koneksi,"SELECT * FROM pelatihan WHERE Id_pelatihan='$_POST[idpelatihan]'");
  $convert=mysqli_fetch_array($query);
  $idpel=$convert[Nama];

// Input user
if ($module=='serti' AND $act=='input'){

      //Pengecekan Nama File
  $cek="SELECT * FROM sertifikat where Nip='$_POST[nip]' AND Nama_pelatihan='$idpel' AND 
        Tanggal_mulai='$_POST[tanggal_mulai]' AND Tanggal_selesai='$_POST[tanggal_selesai]'";
  $ada=mysqli_query($koneksi, $cek) or die(mysqli_error());
  if(mysqli_num_rows($ada)>0)
  { 
     echo "<script>alert('Pelatihan sudah ada.');history.go(-1);</script>";
  }
  else
  {

  $maxsize        = 1024 * 500; // maksimal 500 KB (1KB = 1024 Byte)
  $lokasi_file    = $_FILES['file']['tmp_name'];
  $tipe_file      = $_FILES['file']['type'];
  $nama_file      = $_FILES['file']['name'];
  
  
  // Apabila ada foto yang diupload
  if (!empty($lokasi_file)){

  UploadFile($nama_file);
    if($_FILES['file']['size']<=$maxsize)
    {
      mysqli_query($koneksi, "INSERT INTO sertifikat(Id_sertifikat,
                                     Nama_pelatihan,
                                     Nip,
                                     Nama_lengkap,
                                     Unit_kompetensi, 
                                     Penyelenggara,
                                     Tanggal_mulai,
                                     Tanggal_selesai,
                                     File) 
                             VALUES('',
                                    '$idpel',
                                    '$_POST[nip]',
                                    '$_POST[nm_lengkap]',
                                    '$_POST[unit]',
                                    '$_POST[plg]',
                                    '$_POST[tanggal_mulai]',
                                    '$_POST[tanggal_selesai]',
                                    '$nama_file')");

      header('location:../../media.php?module=serti&nip='.$lop);
    }
      else{
        echo "<script>alert('File yang anda pilih terlalu besar, maksimal 500 KB.');history.go(-1);</script>";
      }
  }else{
  mysqli_query($koneksi, "INSERT INTO sertifikat(Id_sertifikat,
                                 Nama_pelatihan,
                                 Nip,
                                 Nama_lengkap,
                                 Unit_kompetensi, 
                                 Penyelenggara,
                                 Tanggal_mulai,
                                 Tanggal_selesai) 
                         VALUES('',
                                '$idpel',
                                '$_POST[nip]',
                                '$_POST[nm_lengkap]',
                                '$_POST[unit]',
                                '$_POST[plg]',
                                '$_POST[tanggal_mulai]',
                                '$_POST[tanggal_selesai]')");

  header('location:../../media.php?module=serti&nip='.$lop);
  }
}
}

// Update user
elseif ($module=='serti' AND $act=='update') {
  $lokasi_file    = $_FILES['file']['tmp_name'];
  $tipe_file      = $_FILES['file']['type'];
  $nama_file      = $_FILES['file']['name'];
  
  // Apabila foto tidak diganti
  if($_POST['password']!=''){
  $data=md5($_POST['password']);
  $pass=hash("sha512",$data);
  if (empty($lokasi_file)){
    mysqli_query($koneksi, "UPDATE sertifikat SET Nama_pelatihan     = '$idpel',
                                  Nip  = '$_POST[nip]',
                                  Nama_lengkap  = '$_POST[nm_lengkap]',
                                  Unit_kompetensi  = '$_POST[unit]',
                                  Penyelenggara  = '$_POST[plg]',
                                  Tanggal_mulai  = '$_POST[tanggal_mulai]',
                                  Tanggal_selesai = '$_POST[tanggal_selesai]' WHERE Id_sertifikat    = '$_POST[id]'");

      header('location:../../media.php?module=serti&nip='.$lop);
  }
  // Apabila password diubah
  else{
  $data_file = mysqli_query($koneksi, "SELECT File FROM sertifikat WHERE Id_sertifikat ='$_POST[id]'");
  $r      = mysqli_fetch_array($data_file);
  @unlink('../../../../file_sertifikat/'.$r['File']);
  @unlink('../../../../file_sertifikat/'.'small_'.$r['File']);
    UploadFile($nama_file ,'../../../../file_sertifikat/');
    mysqli_query($koneksi, "UPDATE sertifikat SET Nama_pelatihan     = '$idpel',
                                  Nip  = '$_POST[nip]',
                                  Nama_lengkap  = '$_POST[nm_lengkap]',
                                  Unit_kompetensi  = '$_POST[unit]',
                                  Penyelenggara  = '$_POST[plg]',
                                  Tanggal_mulai  = '$_POST[tanggal_mulai]',
                                  Tanggal_selesai = '$_POST[tanggal_selesai]',
                                  File = '$nama_file' WHERE Id_sertifikat    = '$_POST[id]'");

    header('location:../../media.php?module=serti&nip='.$lop);

  }
  }else{
  if (empty($lokasi_file)){
    mysqli_query($koneksi, "UPDATE sertifikat SET Nama_pelatihan     = '$idpel',
                                  Nip  = '$_POST[nip]',
                                  Nama_lengkap  = '$_POST[nm_lengkap]',
                                  Unit_kompetensi  = '$_POST[unit]',
                                  Penyelenggara  = '$_POST[plg]',
                                  Tanggal_mulai  = '$_POST[tanggal_mulai]',
                                  Tanggal_selesai = '$_POST[tanggal_selesai]' WHERE Id_sertifikat    = '$_POST[id]'");

      header('location:../../media.php?module=serti&nip='.$lop);

  }else{
  $data_file = mysqli_query($koneksi, "SELECT File FROM sertifikat WHERE Id_sertifikat ='$_POST[id]'");
  $r      = mysqli_fetch_array($data_file);
  @unlink('../../../../file_sertifikat/'.$r['File']);
  @unlink('../../../../file_sertifikat/'.'small_'.$r['File']);
    UploadFile($nama_file ,'../../../../file_sertifikat/');
    mysqli_query($koneksi, "UPDATE sertifikat SET Nama_pelatihan     = '$idpel',
                                  Nip  = '$_POST[nip]',
                                  Nama_lengkap  = '$_POST[nm_lengkap]',
                                  Unit_kompetensi  = '$_POST[unit]',
                                  Penyelenggara  = '$_POST[plg]',
                                  Tanggal_mulai  = '$_POST[tanggal_mulai]',
                                  Tanggal_selesai = '$_POST[tanggal_selesai]',
                                  File = '$nama_file' WHERE Id_sertifikat    = '$_POST[id]'");
    
    header('location:../../media.php?module=serti&nip='.$lop);
    }
  }

      header('location:../../media.php?module=serti&nip='.$lop);
}


 //hapus module
elseif($module=='serti' AND $act=='hapus'){
  $lop2=$_GET['nip'];
  $data=mysqli_fetch_array(mysqli_query($koneksi, "SELECT File FROM sertifikat WHERE Id_sertifikat ='$_GET[id]'"));
  if ($data['File']!=''){
  mysqli_query($koneksi, "DELETE FROM sertifikat WHERE id_sertifikat ='$_GET[id]'");
     unlink("../../../../file_sertifikat/$_GET[files]"); 

  }
  else{
  mysqli_query($koneksi, "DELETE FROM sertifikat WHERE id_sertifikat ='$_GET[id]'");  
  }
  header('location:../../media.php?module=serti&nip='.$lop2);
}

}
?>
