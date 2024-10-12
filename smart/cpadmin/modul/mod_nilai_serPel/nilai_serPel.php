<?php
session_start();
if (trim($_SESSION['leveluser'])==''){
  echo "<script>document.location='index.php';</script>";
}else{
  $cek=user_akses($_GET['module'],$_SESSION['sessid']);
  if($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    $aksi="modul/mod_nilai_serPel/aksi_nilai_serPel.php";

$tid=$_GET['id'];

    switch($_GET['act']){
      default:
      $r = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM pelatihan WHERE Id_pelatihan ='$_GET[id]'"));
       echo "<div class='col-xs-12'>  
                  <div class='box'>
                    <div class='box-header'>
                      <h3 class='box-title'>Data Nilai Peserta Pelatihan</h3>
                      
                      <center >
                        
                        <p style='width: 38%;'>
                          DAFTAR NILAI PESERTA<br>
                          $r[2] di $r[3], $r[5]-$r[4] ($r[7] s.d. $r[8])
                        </p>
                      </center>
                    </div>
                    <div class='box-body'>
                      <table id='example1' class='table table-bordered table-striped'>
                        <thead>
                          <tr>
                            <th style='width:20px'>No</th>
                            <th width='60px'>NAMA</th>
                            <th width='60px'>NIP</th>
                            <th width='50px'>Kode Etik</th>
                            <th width='50px'>UUD</th>
                            <th width='50px'>Nilai Akhir</th>
                            <th style='width:70px'>Action</th>
                          </tr>
                        </thead>
                        <tbody>";
$no=1;
$data=mysqli_query($koneksi, "SELECT * FROM nilai_pesertapelatihan WHERE Id_pelatihan = '$tid'");
//$nip=$data['Nip'];
//$tampil=mysqli_query($koneksi, "SELECT * FROM peserta_pelatihan,peserta WHERE Nip ='$nip' ORDER BY Nama_lengkap");
      while ($row = mysqli_fetch_array($data)){
        $nip=$row['Nip'];
    echo  "<tr>
          <td>$no</td>";
    $data2=mysqli_query($koneksi, "SELECT * FROM peserta WHERE Nip='$nip' order by Nama_lengkap");
    while ($row2 = mysqli_fetch_array($data2)){
      echo "<td>$row2[Nama_lengkap]</td>
            <td>$row[Nip]</td>
            <td>$row[Kode_etik]</td>
            <td>$row[UUD]</td>
            <td>$row[Nilai_akhir]</td>
            <td>
              <center>
                <a class='btn btn-success btn-xs' title='Edit Data' href='?module=nilai_serPel&act=editnilai&nip=$row[Nip]&id=$tid'><span class='glyphicon glyphicon-edit'></span></a>
                <a class='btn btn-danger btn-xs' title='Delete Data' href='$aksi?module=nilai_serPel&act=hapus&idn=$row[Id_nilai]&id=$tid' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
              </center>
            </td>";
    }
    echo  "</tr>";
        $no++;
      }

                      echo "</tbody>
                    </table>
                    <button type='button' class='btn btn-default pull-left' data-dismiss='modal' onclick='self.history.back()'>Kembali</button>
                  </div>
              </div>
            </div>";
      break;

case "editnilai":

$r=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM peserta_pelatihan WHERE Nip ='$_GET[nip]'"));
$r2=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM nilai_pesertapelatihan WHERE Nip ='$_GET[nip]' AND Id_pelatihan = '$_GET[id]'"));
    echo "<div class='example-modal'>
        <div class='modal'>
          <div class='modal-dialog modal-lg'>
            <div class='modal-content'>
              <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close' onclick='self.history.back()'>
                  <span aria-hidden='true'>&times;</span></button>
                <h4 class='modal-title'>Ubah Nilai Peserta Pelatihan</h4>
                <h5><i class='fa fa-user'></i> <b>$r[2]</b></h5>
              </div>
              <div class='modal-body'>
              <form role='form' name='form1' method=POST action='$aksi?module=nilai_serPel&act=editnilai&id=$tid' enctype='multipart/form-data'>
                  <table class='table table-striped' style='width: 100%;'>
                    <input type=hidden name=id value=$tid>
                    <input type=hidden name=idnilai value=$r2[0]>
                    <input type=hidden name=nip value=$r[Nip]>
                    <tr>
                        <th style='background-color: #dadada;' colspan='3'>Nilai Pelatihan</th>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Kode Etik</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='text' class='form-control' name='kodeetik' value='$r2[2]' style='width: 120px;' placeholder='Masukan Nilai' required/></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle;'>UUD</td>
                        <td style='vertical-align: middle;'>:</td>
                        <td><input type='text' class='form-control' name='uud' value='$r2[3]' style='width: 120px;' placeholder='Masukan Nilai' required/></td>
                    </tr>
                  </table>
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info' onclick=\"return alert('Data berhasil diubah.')\">Simpan</button>
                    <button type='button' class='btn btn-default pull-right' onclick='self.history.back()'>Kembali</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>";

break;

case "rekapnilai":

      $r = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM pelatihan WHERE Id_pelatihan ='$_GET[id]'"));
       echo "<div class='col-xs-12'>  
                  <div class='box'>
                    <div class='box-header'>
                      <h3 class='box-title'>Data Nilai Peserta Pelatihan</h3>
                      <a class='btn btn-primary btn-sm pull-right' target='_blank' title='Export Excel' href='$aksi?module=nilai_serPel&act=export&id=$tid'><i class='fa fa-file-excel-o'></i>&nbsp;&nbsp; Export XLS</a> 
                      <center >
                        
                        <p style='width: 38%;'>
                          DAFTAR NILAI PESERTA<br>
                          $r[2] di $r[3], $r[5]-$r[4] ($r[7] s.d. $r[8])
                        </p>
                      </center>
                    </div>
                    <div class='box-body'>
                      <table id='example1' class='table table-bordered table-striped'>
                        <thead>
                          <tr>
                            <th style='width:20px'>No</th>
                            <th width='60px'>NAMA</th>
                            <th width='60px'>NIP</th>
                            <th width='50px'>Kode Etik</th>
                            <th width='50px'>UUD</th>
                            <th width='50px'>Nilai Akhir</th>
                          </tr>
                        </thead>
                        <tbody>";
$no=1;
$data=mysqli_query($koneksi, "SELECT * FROM nilai_pesertapelatihan WHERE Id_pelatihan = '$tid'");
//$nip=$data['Nip'];
//$tampil=mysqli_query($koneksi, "SELECT * FROM peserta_pelatihan,peserta WHERE Nip ='$nip' ORDER BY Nama_lengkap");
      while ($row = mysqli_fetch_array($data)){
        $nip=$row['Nip'];
    echo  "<tr>
          <td>$no</td>";
    $data2=mysqli_query($koneksi, "SELECT * FROM peserta WHERE Nip='$nip' order by Nama_lengkap");
    while ($row2 = mysqli_fetch_array($data2)){
      echo "<td>$row2[Nama_lengkap]</td>
            <td>$row[Nip]</td>
            <td>$row[Kode_etik]</td>
            <td>$row[UUD]</td>
            <td>$row[Nilai_akhir]</td>";
    }
    echo  "</tr>";
        $no++;
      }

                      echo "</tbody>
                    </table>
                    <button type='button' class='btn btn-default pull-left' data-dismiss='modal' onclick='self.history.back()'>Kembali</button>
                  </div>
              </div>
            </div>";

break;

case "nilai_pegawai":

$NIP = $users[nip];
$NAMA = $_SESSION['namalengkap'];
       echo "<div class='col-xs-12'>  
                  <div class='box'>
                    <div class='box-header'>
                      <a class='btn btn-primary btn-sm pull-right' target='_blank' title='Export Excel' href='$aksi?module=nilai_serPel&act=export2&nip=$NIP&id=$tid'><i class='fa fa-file-excel-o'></i>&nbsp;&nbsp; Export XLS</a> 
                      <center >
                        
                        <p style='width: 38%;'>
                          DAFTAR NILAI PESERTA PELATIHAN<br>
                          <b>$NAMA - $NIP</b>
                        </p>
                      </center>
                    </div>
                    <div class='box-body'>
                      <table id='example1' class='table table-bordered table-striped'>
                        <thead>
                          <tr>
                            <th style='width:20px'>No</th>
                            <th width='60px'>JENIS</th>
                            <th width='60px'>NAMA</th>
                            <th width='50px'>TANGGAL</th>
                            <th width='50px'>LOKASI</th>
                            <th width='50px'>NAMA LENGKAP</th>
                            <th width='60px'>NIP</th>
                            <th width='50px'>Kode Etik</th>
                            <th width='50px'>UUD</th>
                            <th width='50px'>Nilai Akhir</th>
                          </tr>
                        </thead>
                        <tbody>";
$no=1;
$data=mysqli_query($koneksi, "SELECT * FROM nilai_pesertapelatihan WHERE Nip = '$NIP'");
      while ($row = mysqli_fetch_array($data)){
        $idpel=$row['Id_pelatihan'];
    $data3=mysqli_query($koneksi, "SELECT * FROM peserta WHERE Nip='$NIP'");
    while ($row3 = mysqli_fetch_array($data3)){
    echo  "<tr>
          <td>$no</td>";
    $data2=mysqli_query($koneksi, "SELECT * FROM pelatihan WHERE Id_pelatihan='$idpel' order by Jenis ASC");
    while ($row2 = mysqli_fetch_array($data2)){
      echo "<td>$row2[Jenis]</td>
            <td>$row2[Nama]</td>
            <td>$row2[Tanggal_mulai] s.d. $row2[Tanggal_selesai]</td>
            <td>$row2[Lokasi], $row2[kabupaten]-$row2[propinsi]</td>
            <td>$row3[Nama_lengkap]</td>
            <td>$row3[Nip]</td>
            <td>$row[Kode_etik]</td>
            <td>$row[UUD]</td>
            <td>$row[Nilai_akhir]</td>";
    }
    echo  "</tr>";
        $no++;
      }
    }

                      echo "</tbody>
                    </table>
                    <button type='button' class='btn btn-default pull-left' data-dismiss='modal' onclick='self.history.back()'>Kembali</button>
                  </div>
              </div>
            </div>";

break;

    }
  }else{
      echo akses_salah();    
    }
  }
?>