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

// Input user
if ($module=='peserta' AND $act=='input'){

  $cek="SELECT Nip FROM peserta where Nip='$_POST[nip]'";
  $ada=mysqli_query($koneksi, $cek) or die(mysqli_error());
  if(mysqli_num_rows($ada)>0)
  { 
     echo "<script>alert('Nip sudah terdaftar.');history.go(-1);</script>";
  }
  else
  {
     //Simpan data

  $lokasi_file    = $_FILES['foto']['tmp_name'];
  $tipe_file      = $_FILES['foto']['type'];
  $nama_file      = $_FILES['foto']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 
  
  $data=md5($_POST['password']);
  $pass=hash("sha512",$data);
  
  // Apabila ada foto yang diupload
  if (!empty($lokasi_file)){
  UploadPeserta($nama_file_unik);
  mysqli_query($koneksi, "INSERT INTO peserta(Id_peserta,
                                  Nip,
                                 Gelar_depan,
                                 Nama_lengkap,
                                 Gelar_belakang, 
                                 No_ktp, 
                                 Tempat_lahir,
                                 Tanggal_lahir,
                                 Jenis_kelamin,
                                 Golongan,
                                 Jabatan,
                                 Instansi,
                                 Alamat,
                                 Propinsi,
                                 Kota,
                                 Kode_pos,
                                 Telepon,
                                 Email,
                                 Foto) 
                         VALUES('',
                                '$_POST[nip]',
                                '$_POST[glr_depan]',
                                '$_POST[nama]',
                                '$_POST[glr_blkng]',
                                '$_POST[ktp]',
                                '$_POST[tempat_lahir]',
                                '$_POST[tgl_lahir]',
                                '$_POST[jns_kelamin]',
                                '$_POST[pangkat]',
                                '$_POST[jabatan]',
                                '$_POST[instansi]',
                                '$_POST[alamat]',
                                '$_POST[propinsi]',
                                '$_POST[kota]',
                                '$_POST[kodepos]',
                                '$_POST[telp]',
                                '$_POST[email]',
                                '$nama_file_unik')");

  header('location:../../media.php?module=loop&nip='.$lop);
  }else{
  mysqli_query($koneksi, "INSERT INTO peserta(Id_peserta,
                                  Nip,
                                 Gelar_depan,
                                 Nama_lengkap,
                                 Gelar_belakang, 
                                 No_ktp, 
                                 Tempat_lahir,
                                 Tanggal_lahir,
                                 Jenis_kelamin,
                                 Golongan,
                                 Jabatan,
                                 Instansi,
                                 Alamat,
                                 Propinsi,
                                 Kota,
                                 Kode_pos,
                                 Telepon,
                                 Email,
                                 Foto) 
                         VALUES('',
                                '$_POST[nip]',
                                '$_POST[glr_depan]',
                                '$_POST[nama]',
                                '$_POST[glr_blkng]',
                                '$_POST[ktp]',
                                '$_POST[tempat_lahir]',
                                '$_POST[tgl_lahir]',
                                '$_POST[jns_kelamin]',
                                '$_POST[pangkat]',
                                '$_POST[jabatan]',
                                '$_POST[instansi]',
                                '$_POST[alamat]',
                                '$_POST[propinsi]',
                                '$_POST[kota]',
                                '$_POST[kodepos]',
                                '$_POST[telp]',
                                '$_POST[email]',
                                '$nama_file_unik')");

  header('location:../../media.php?module=loop&nip='.$lop);
    }
  }
}


// Update user
elseif ($module=='peserta' AND $act=='update') {
  $lokasi_file    = $_FILES['foto']['tmp_name'];
  $tipe_file      = $_FILES['foto']['type'];
  $nama_file      = $_FILES['foto']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 
  
  // Apabila foto tidak diganti
  if($_POST['password']!=''){
  $data=md5($_POST['password']);
  $pass=hash("sha512",$data);
  if (empty($lokasi_file)){
    mysqli_query($koneksi, "UPDATE peserta SET Nip     = '$_POST[nip]',
                                  Gelar_depan  = '$_POST[glr_depan]',
                                  Nama_lengkap  = '$_POST[nama]',
                                  Gelar_belakang  = '$_POST[glr_blkng]',
                                  No_ktp  = '$_POST[ktp]',
                                  Tempat_lahir  = '$_POST[tempat_lahir]',
                                  Tanggal_lahir  = '$_POST[tgl_lahir]',
                                  Jenis_kelamin  = '$_POST[jns_kelamin]',
                                  Golongan  = '$_POST[pangkat]',
                                  Jabatan  = '$_POST[jabatan]',
                                  Instansi   = '$_POST[instansi]',
                                  Alamat          = '$_POST[alamat]',
                                  Propinsi          = '$_POST[propinsi]',
                                  Kota          = '$_POST[kota]', 
                                  Kode_pos          = '$_POST[kodepos]', 
                                  Telepon  = '$_POST[telp]', 
                                  Email  = '$_POST[email]' WHERE Id_peserta     = '$_POST[id]'");

    if ($_SESSION['leveluser']=='admin'){
      header('location:../../media.php?module='.$module);
    }else{
      header('location:../../media.php?module=peserta&act=edper&id='.$_POST[id].'&nip='.$_POST[nip]);
    }
  }
  // Apabila password diubah
  else{
  $data_foto = mysqli_query($koneksi, "SELECT Foto FROM peserta WHERE Id_peserta ='$_POST[id]'");
  $r      = mysqli_fetch_array($data_foto);
  @unlink('../../images/img_peserta/'.$r['Foto']);
  @unlink('../../images/img_peserta/'.'small_'.$r['Foto']);
    UploadPeserta($nama_file_unik ,'../../images/img_peserta/');
    mysqli_query($koneksi, "UPDATE peserta SET Nip     = '$_POST[nip]',
                                  Gelar_depan  = '$_POST[glr_depan]',
                                  Nama_lengkap  = '$_POST[nama]',
                                  Gelar_belakang  = '$_POST[glr_blkng]',
                                  No_ktp  = '$_POST[ktp]',
                                  Tempat_lahir  = '$_POST[tempat_lahir]',
                                  Tanggal_lahir  = '$_POST[tgl_lahir]',
                                  Jenis_kelamin  = '$_POST[jns_kelamin]',
                                  Golongan  = '$_POST[pangkat]',
                                  Jabatan  = '$_POST[jabatan]',
                                  Instansi   = '$_POST[instansi]',
                                  Alamat          = '$_POST[alamat]',
                                  Propinsi          = '$_POST[propinsi]',
                                  Kota          = '$_POST[kota]', 
                                  Kode_pos          = '$_POST[kodepos]', 
                                  Telepon  = '$_POST[telp]', 
                                  Email  = '$_POST[email]',
                                  Foto  = '$nama_file_unik' WHERE Id_peserta     = '$_POST[id]'");
  }
  }else{
  if (empty($lokasi_file)){
  mysqli_query($koneksi, "UPDATE peserta SET Nip     = '$_POST[nip]',
                                  Gelar_depan  = '$_POST[glr_depan]',
                                  Nama_lengkap  = '$_POST[nama]',
                                  Gelar_belakang  = '$_POST[glr_blkng]',
                                  No_ktp  = '$_POST[ktp]',
                                  Tempat_lahir  = '$_POST[tempat_lahir]',
                                  Tanggal_lahir  = '$_POST[tgl_lahir]',
                                  Jenis_kelamin  = '$_POST[jns_kelamin]',
                                  Golongan  = '$_POST[pangkat]',
                                  Jabatan  = '$_POST[jabatan]',
                                  Instansi   = '$_POST[instansi]',
                                  Alamat          = '$_POST[alamat]',
                                  Propinsi          = '$_POST[propinsi]',
                                  Kota          = '$_POST[kota]', 
                                  Kode_pos          = '$_POST[kodepos]', 
                                  Telepon  = '$_POST[telp]', 
                                  Email  = '$_POST[email]' WHERE Id_peserta     = '$_POST[id]'");

    if ($_SESSION['leveluser']=='admin'){
      header('location:../../media.php?module='.$module);
    }else{
      header('location:../../media.php?module=peserta&act=edper&id='.$_POST[id].'&nip='.$_POST[nip]);
    }
  }else{
  $data_foto = mysqli_query($koneksi, "SELECT Foto FROM peserta WHERE Id_peserta ='$_POST[id]'");
  $r = mysqli_fetch_array($data_foto);
  @unlink('../../images/img_peserta/'.$r['Foto']);
  @unlink('../../images/img_peserta/'.'small_'.$r['Foto']);
    UploadPeserta($nama_file_unik ,'../../images/img_peserta/');

    mysqli_query($koneksi, "UPDATE peserta SET Nip     = '$_POST[nip]',
                                  Gelar_depan  = '$_POST[glr_depan]',
                                  Nama_lengkap  = '$_POST[nama]',
                                  Gelar_belakang  = '$_POST[glr_blkng]',
                                  No_ktp  = '$_POST[ktp]',
                                  Tempat_lahir  = '$_POST[tempat_lahir]',
                                  Tanggal_lahir  = '$_POST[tgl_lahir]',
                                  Jenis_kelamin  = '$_POST[jns_kelamin]',
                                  Golongan  = '$_POST[pangkat]',
                                  Jabatan  = '$_POST[jabatan]',
                                  Instansi   = '$_POST[instansi]',
                                  Alamat          = '$_POST[alamat]', 
                                  Propinsi          = '$_POST[propinsi]',
                                  Kota          = '$_POST[kota]',
                                  Kode_pos          = '$_POST[kodepos]', 
                                  Telepon  = '$_POST[telp]', 
                                  Email  = '$_POST[email]',
                                  Foto  = '$nama_file_unik' WHERE Id_peserta     = '$_POST[id]'");

  }
  }
    if ($_SESSION['leveluser']=='admin'){
      header('location:../../media.php?module='.$module);
    }else{
      header('location:../../media.php?module=peserta&act=edper&id='.$_POST[id].'&nip='.$_POST[nip]);
    }
}


 //hapus module
elseif($module=='peserta' AND $act=='hapus'){

/////////////PEMBATAS//////////

  $cek="SELECT Foto FROM peserta WHERE Nip='$_GET[id]'";
  $ada=mysqli_query($koneksi, $cek) or die(mysqli_error());
  if(mysqli_num_rows($ada)>0)
  { 
      $id=$_GET['id'];
    mysqli_query($koneksi, "DELETE peserta, pendidikan_formal, pendidikan_informal, riwayat_pekerjaan, sertifikat
                          FROM peserta INNER JOIN pendidikan_formal
                          ON peserta.Nip = pendidikan_formal.Nip INNER JOIN pendidikan_informal 
                          ON peserta.NIP = pendidikan_informal.Nip INNER JOIN riwayat_pekerjaan
                          ON peserta.NIP = riwayat_pekerjaan.Nip INNER JOIN sertifikat
                          ON peserta.NIP = sertifikat.Nip WHERE peserta.Nip='$id'");
      unlink("../../../../images/img_peserta/$_GET[files]"); 
      unlink("../../../../images/img_peserta/small_$_GET[files]");

    header('location:../../media.php?module='.$module);   
  }
  else
  {
      $id=$_GET['id'];
    mysqli_query($koneksi, "DELETE peserta, pendidikan_formal, pendidikan_informal, riwayat_pekerjaan, sertifikat
                          FROM peserta INNER JOIN pendidikan_formal
                          ON peserta.Nip = pendidikan_formal.Nip INNER JOIN pendidikan_informal 
                          ON peserta.NIP = pendidikan_informal.Nip INNER JOIN riwayat_pekerjaan
                          ON peserta.NIP = riwayat_pekerjaan.Nip INNER JOIN sertifikat
                          ON peserta.NIP = sertifikat.Nip WHERE peserta.Nip='$id'");

    header('location:../../media.php?module='.$module);
  }

}

}
?>
