<?php
session_start();
if (trim($_SESSION['leveluser'])==''){
  echo "<script>document.location='index.php';</script>";
}else{
  $cek=user_akses($_GET['module'],$_SESSION['sessid']);
  if($_SESSION['leveluser']=='user' OR $_SESSION['leveluser']=='admin'){
    $aksi="modul/mod_serPel/aksi_serPel.php";

$tid=$_GET['id'];

    switch($_GET['act']){
      default:
      $r = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM pelatihan WHERE Id_pelatihan ='$_GET[id]'"));
       echo "<div class='col-xs-12'>  
                  <div class='box'>
                    <div class='box-header'>
                      <a class='btn btn-primary btn-sm pull-right' title='Export Excel' href='$aksi?module=serPel&act=export&id=$tid'><i class='fa fa-file-excel-o'></i>&nbsp;&nbsp; Export XLS</a> 
                      <center >
                        
                        <p style='width: 38%;'>
                          DAFTAR PESERTA<br>
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
                            <th width='50px'>INSTANSI</th>
                            <th width='50px'>JABATAN</th>
                            <th style='width:70px'>Action</th>
                          </tr>
                        </thead>
                        <tbody>";
                        $no=1;
                        $tampil=mysqli_query($koneksi, "SELECT * FROM peserta_pelatihan WHERE Id_pelatihan = '$tid' order by Nama_lengkap");
                        while ($row = mysqli_fetch_array($tampil)){
                        echo "<tr><td>$no</td>
                                  <td>$row[Nama_lengkap]</td>";
                        echo "<td>$row[Nip]</td>
                              <td>$row[Instansi]</td>
                              <td>$row[Jabatan]</td>
                                  <td>
                                  <center>
                                    <a class='btn btn-success btn-xs' title='Edit Data' href='?module=peserta&act=edit&id=$row[Nip]'><span class='glyphicon glyphicon-edit'></span></a>
                                    <a class='btn btn-primary btn-xs' title='Input Nilai' href='?module=serPel&act=inputnilai&nip=$row[Nip]&id=$tid'><span class='glyphicon glyphicon-edit'></span></a>
                                    <a class='btn btn-danger btn-xs' title='Delete Data' href='$aksi?module=serPel&act=hapus&idps=$row[Id_pespel]&id=$tid' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                                  </center>
                                  </td>
                              </tr>";
                          $no++;
                        }

                      echo "</tbody>
                    </table>
                    <button type='button' class='btn btn-default pull-left' data-dismiss='modal' onclick='self.history.back()'>Kembali</button>
                    <button type='button' class='btn btn-primary pull-right' data-toggle='modal' data-target='#tambah_peserta'>Tambah Peserta</button>
                  </div>
              </div>
            </div>

<div id='tambah_peserta' class='modal fade' role='dialog'>
  <div class='modal-dialog modal-lg'>


    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title'><i class='fa fa-users'></i> Peserta Pelatihan</h4>
      </div>
      <div class='modal-body mailbox'>  
        <form action='$aksi?module=serPel&act=input&id=$tid' method=POST>      
        <table id='example3' class='table table-bordered table-striped'>          
            <thead>
              <tr>
                  <th></th>
                  <th width='1px'>NO</th>
                  <th>NAMA</th>
                  <th width='100px'>NIP/NRP</th>
                  <th>INSTANSI</th>
                  <th width='50px'>JABATAN</th>
                  <th width='1px'>&nbsp;</th>
              </tr>
            </thead>
            <tbody>";
$no2=1;
$tampil=mysqli_query($koneksi, "SELECT * FROM peserta order by Nama_lengkap");
  while ($row = mysqli_fetch_array($tampil)){
     echo "<tr>
                <td align='center'>
                  <input type='checkbox' />
                </td>
                <td align='center'>$no2</td>
                <td>$row[Nama_lengkap]</td>
                <td>$row[Nip]</td>
                <td>$row[Instansi]</td> 
                <td>$row[Jabatan]</td>
                <td>
                    <div class='btn-group'>         
                        <button type='button' class='btn-xs btn-info' name='submit' onclick=\"window.location='$aksi?module=serPel&act=input&id=$tid&nip=$row[Nip]&nama=$row[Nama_lengkap]&ins=$row[Instansi]&jbt=$row[Jabatan]'\" data-toggle='tooltip' title='Masukan'><i class='fa fa-arrow-down'></i></button>
                    </div>
                </td>              
            </tr>";
      $no2++;
      }

    echo"</tbody>          
      </table>

      </div>
      <div class='modal-footer'>";
        //<button type='submit' class='btn btn-primary pull-left' name='do'>Tambahkan</button>
    echo"<button type='button' class='btn btn-default' data-dismiss='modal'>Tutup</button>
      </div>
      </form>
    </div>
  </div>
</div>";
      break;

case "inputnilai":

$r=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM peserta_pelatihan WHERE Nip ='$_GET[nip]'"));
    echo "<div class='example-modal'>
        <div class='modal'>
          <div class='modal-dialog modal-lg'>
            <div class='modal-content'>
              <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close' onclick='self.history.back()'>
                  <span aria-hidden='true'>&times;</span></button>
                <h4 class='modal-title'>Nilai Peserta Pelatihan</h4>
                <h5><i class='fa fa-user'></i> <b>$r[2]</b></h5>
              </div>
              <div class='modal-body'>
              <form role='form' name='form1' method=POST action='$aksi?module=serPel&act=inputnilai&id=$tid' enctype='multipart/form-data'>
                  <table class='table table-striped' style='width: 100%;'>
                    <input type=hidden name=id value=$tid>
                    <input type=hidden name=nip value=$r[Nip]>
                    <tr>
                        <th style='background-color: #dadada;' colspan='3'>Nilai Pelatihan</th>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Kode Etik</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='text' class='form-control' name='kodeetik' value='' style='width: 120px;' placeholder='Masukan Nilai' required/></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle;'>UUD</td>
                        <td style='vertical-align: middle;'>:</td>
                        <td><input type='text' class='form-control' name='uud' value='' style='width: 120px;' placeholder='Masukan Nilai' required/></td>
                    </tr>
                  </table>
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info' onclick=\"return alert('Data berhasil disimpan.')\">Simpan</button>
                    <button type='button' class='btn btn-default pull-right' onclick='self.history.back()'>Kembali</button>
              </div>
              </form>
            </div>
          </div>
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