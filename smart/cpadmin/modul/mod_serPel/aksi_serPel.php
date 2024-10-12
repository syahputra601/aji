<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<script>document.location='index.php';</script>";
}else{
  
include "../../../../config/koneksi.php";
include "../../../../config/fungsi_thumb.php";

$module=$_GET['module'];
$act=$_GET['act'];
$tid=$_GET['id'];
$nip=$_GET['nip'];
$nama=$_GET['nama'];
$ins=$_GET['ins'];
$jbt=$_GET['jbt'];

// Input user
if ($module=='serPel' AND $act=='input'){
  
  $cek="SELECT Nip FROM peserta_pelatihan where Nip=$nip AND Id_pelatihan=$tid";
  $ada=mysqli_query($koneksi, $cek) or die(mysqli_error());
  if(mysqli_num_rows($ada)>0)
  { 
      echo "<script>alert('Data sudah ada.');history.go(-1);</script>";
  }
  else
  {

  mysqli_query($koneksi, "INSERT INTO peserta_pelatihan(Id_pespel,
                                  Nip,
                                 Nama_lengkap,
                                 Instansi,
                                 Jabatan,                                 
                                 Id_pelatihan) 
                         VALUES('',
                                '$nip',
                                '$nama',
                                '$ins',
                                '$jbt',
                                '$tid')");

  header('location:../../media.php?module=serPel&id='.$tid);

  }
}

// Input Nilai Peserta Pelatihan
if ($module=='serPel' AND $act=='inputnilai'){

$NIP = $_POST['nip'];
$KODE = $_POST['kodeetik'];
$UUD = $_POST['uud'];

$pakhir = $KODE + $UUD;
$NA= $pakhir / 2;

  $cek="SELECT Nip FROM nilai_pesertapelatihan where Nip=$NIP AND Id_pelatihan=$tid";
  $ada=mysqli_query($koneksi, $cek) or die(mysqli_error());
  if(mysqli_num_rows($ada)>0)
  { 
      echo "<script>alert('Data sudah ada.');history.go(-1);</script>";
  }
  else
  {

  mysqli_query($koneksi, "INSERT INTO nilai_pesertapelatihan(Id_nilai,
                                  Nip,
                                 Kode_etik,
                                 UUD,
                                 Nilai_akhir,                                 
                                 Id_pelatihan) 
                         VALUES('',
                                '$NIP',
                                '$KODE',
                                '$UUD',
                                '$NA',
                                '$tid')");

  header('location:../../media.php?module=serPel&id='.$tid);
  }
}


 //hapus module
elseif($module=='serPel' AND $act=='hapus'){
  $id=$_GET['idps'];
  mysqli_query($koneksi, "DELETE FROM peserta_pelatihan WHERE Id_pespel='$id'");
  header('location:../../media.php?module=serPel&id='.$tid);
}

 //Multiple Delete
elseif($module=='serPel' AND $act=='multiinput'){

    $NIP = $_POST['ipt'];
    $NMmulti = $_POST['nmmulti'];
    $jumlah_dipilih = count($NIP);
      for($x=0;$x<$jumlah_dipilih;$x++){

        mysqli_query($koneksi, "INSERT INTO peserta_pelatihan values('','{$NIP[$x]}','','','','$tid')");

      }    

    header('location:../../media.php?module=serPel&id='.$tid);
  }

 //Exxport Data
elseif($module=='serPel' AND $act=='export'){

// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=tahap_1.xls");

$r = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM pelatihan WHERE Id_pelatihan ='$tid'"));

echo "<table border='1'>
        <tr>
          <td colspan='14'>
            <center>
              <b>DAFTAR PESERTA $r[2] di $r[3], $r[5]-$r[4] ($r[7] s.d. $r[8])</b>
            </center>
          </td>
        </tr>
        <tr>
          <td><b>NO</b></td>
          <td><b>GELAR DEPAN</b></td>
          <td><b>NAMA</b></td>
          <td><b>GELAR BELAKANG</b></td>
          <td><b>NIP/NRP</b></td>
          <td><b>TEMPAT LAHIR</b></td>
          <td><b>TANGGAL LAHIR</b></td>
          <td><b>JENIS KELAMIN</b></td>
          <td><b>PANGKAT/GOLONGAN</b></td>
          <td><b>JABTAN</b></td>
          <td><b>UNIT KERJA</b></td>
          <td><b>ALAMAT RUMAH</b></td>
          <td><b>NO TELP/HP</b></td>
          <td><b>EMAIL</b></td>
        </tr>";
      
        $no=1;
$data=mysqli_query($koneksi, "SELECT * FROM peserta_pelatihan WHERE Id_pelatihan = '$tid'");
//$nip=$data['Nip'];
//$tampil=mysqli_query($koneksi, "SELECT * FROM peserta_pelatihan,peserta WHERE Nip ='$nip' ORDER BY Nama_lengkap");
      while ($row = mysqli_fetch_array($data)){
        $nip=$row['Nip'];
    echo  "<tr>
          <td>$no</td>";
    $data2=mysqli_query($koneksi, "SELECT * FROM peserta WHERE Nip='$nip' order by Nama_lengkap");
    while ($row2 = mysqli_fetch_array($data2)){
      echo "<td>$row2[Gelar_depan]</td>
            <td>$row2[Nama_lengkap]</td>
            <td>$row2[Gelar_belakang]</td>
            <td>'$row2[Nip]</td>
            <td>$row2[Tempat_lahir]</td>
            <td>$row2[Tanggal_lahir]</td>
            <td>$row2[Jenis_kelamin]</td>
            <td>$row2[Golongan]</td>
            <td>$row2[Jabatan]</td>
            <td>$row2[Instansi]</td>
            <td>$row2[Alamat], $row2[Kota] - $row2[Propinsi]</td>
            <td>'$row2[Telepon]</td>
            <td>$row2[Email]</td>";
    }
    echo  "</tr>";
        $no++;
      }

echo "</table>";
}

}
?>
