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


// Edit Nilai Peserta Pelatihan
if ($module=='nilai_serPel' AND $act=='editnilai'){

$NIP = $_POST['nip'];
$KODE = $_POST['kodeetik'];
$UUD = $_POST['uud'];

$pakhir = $KODE + $UUD;
$NA= $pakhir / 2;

  mysqli_query($koneksi, "UPDATE nilai_pesertapelatihan SET Nip = '$NIP',
                                 Kode_etik = '$KODE',
                                 UUD = '$UUD',
                                 Nilai_akhir = '$NA' WHERE Id_nilai = '$_POST[idnilai]'");

  header('location:../../media.php?module=nilai_serPel&id='.$tid);

}

 //hapus module
elseif($module=='nilai_serPel' AND $act=='hapus'){
  $id=$_GET['idn'];
  mysqli_query($koneksi, "DELETE FROM nilai_pesertapelatihan WHERE Id_nilai ='$id'");
  header('location:../../media.php?module=nilai_serPel&id='.$tid);
}

 //Exxport Data
elseif($module=='nilai_serPel' AND $act=='export'){

// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data_Nilai_Peserta_Pelatihan.xls");

$r = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM pelatihan WHERE Id_pelatihan ='$tid'"));

echo "<table border='1'>
        <tr>
          <td colspan='12'>
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
          <td><b>JENIS KELAMIN</b></td>
          <td><b>PANGKAT/GOLONGAN</b></td>
          <td><b>JABATAN</b></td>
          <td><b>UNIT KERJA</b></td>
          <td><b>Kode Etik</b></td>
          <td><b>UUD</b></td>
          <td><b>Nilai Akhir</b></td>
        </tr>";
      
        $no=1;
$data=mysqli_query($koneksi, "SELECT * FROM nilai_pesertapelatihan WHERE Id_pelatihan = '$tid'");
//$nip=$data['Nip'];
//$tampil=mysqli_query($koneksi, "SELECT * FROM peserta_pelatihan,peserta WHERE Nip ='$nip' ORDER BY Nama_lengkap");
      while ($row = mysqli_fetch_array($data)){
        $nip=$row['Nip'];
    echo  "<tr>
          <td>$no</td>";
    $data2=mysqli_query($koneksi, "SELECT * FROM peserta WHERE Nip='$nip' order by Nama_lengkap ASC");
    while ($row2 = mysqli_fetch_array($data2)){
      echo "<td>$row2[Gelar_depan]</td>
            <td>$row2[Nama_lengkap]</td>
            <td>$row2[Gelar_belakang]</td>
            <td>'$row2[Nip]</td>
            <td>$row2[Jenis_kelamin]</td>
            <td>$row2[Golongan]</td>
            <td>$row2[Jabatan]</td>
            <td>$row2[Instansi]</td>
            <td>'$row[Kode_etik]</td>
            <td>'$row[UUD]</td>
            <td>'$row[Nilai_akhir]</td>";
    }
    echo  "</tr>";
        $no++;
      }

echo "</table>";
}


//Exxport Data coba dulu sob
elseif($module=='nilai_serPel' AND $act=='export2'){

// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data_Nilai_Peserta.xls");
$NIP=$_GET['nip'];
$NAMA = $_SESSION['namalengkap'];
$r = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM pelatihan WHERE Id_pelatihan ='$tid'"));

echo "<table border='1'>
        <tr>
          <td colspan='16'>
            <center>
              <b>DAFTAR NILAI PESERTA PELATIHAN</b><br>
              <b>$NAMA - $NIP</b>
            </center>
          </td>
        </tr>
        <tr>
          <td><b>NO</b></td>
          <td><b>Jenis Pelatihan</b></td>
          <td><b>Nama Pelatihan</b></td>
          <td><b>Tanggal</b></td>
          <td><b>Lokasi</b></td>
          <td><b>GELAR DEPAN</b></td>
          <td><b>NAMA</b></td>
          <td><b>GELAR BELAKANG</b></td>
          <td><b>NIP/NRP</b></td>
          <td><b>JENIS KELAMIN</b></td>
          <td><b>PANGKAT/GOLONGAN</b></td>
          <td><b>JABATAN</b></td>
          <td><b>UNIT KERJA</b></td>
          <td><b>Kode Etik</b></td>
          <td><b>UUD</b></td>
          <td><b>Nilai Akhir</b></td>
        </tr>";
$no=1;  
$nip=$_GET['nip'];    
$data=mysqli_query($koneksi, "SELECT * FROM nilai_pesertapelatihan WHERE Nip = '$nip'");
//$nip=$data['Nip'];
//$tampil=mysqli_query($koneksi, "SELECT * FROM peserta_pelatihan,peserta WHERE Nip ='$nip' ORDER BY Nama_lengkap");
      while ($row = mysqli_fetch_array($data)){
        $idpel=$row['Id_pelatihan'];
    $data3=mysqli_query($koneksi, "SELECT * FROM peserta WHERE Nip='$nip'");
    while ($row3 = mysqli_fetch_array($data3)){

    echo  "<tr>
          <td>$no</td>";
    $data2=mysqli_query($koneksi, "SELECT * FROM pelatihan WHERE Id_pelatihan='$idpel' order by Jenis ASC");
    while ($row2 = mysqli_fetch_array($data2)){
      echo "<td>$row2[Jenis]</td>
            <td>$row2[Nama]</td>
            <td>$row2[Tanggal_mulai] s.d. $row2[Tanggal_selesai]</td>
            <td>$row2[Lokasi], $row2[kabupaten]-$row2[propinsi]</td>
            <td>$row3[Gelar_depan]</td>
            <td>$row3[Nama_lengkap]</td>
            <td>$row3[Gelar_belakang]</td>
            <td>'$row3[Nip]</td>
            <td>$row3[Jenis_kelamin]</td>
            <td>$row3[Golongan]</td>
            <td>$row3[Jabatan]</td>
            <td>$row3[Instansi]</td>
            <td>'$row[Kode_etik]</td>
            <td>'$row[UUD]</td>
            <td>'$row[Nilai_akhir]</td>";
    }
    echo  "</tr>";
        $no++;
      }
    }

echo "</table>";
}

}
?>
