<?php
session_start();
if (trim($_SESSION['leveluser'])==''){
  echo "<script>document.location='index.php';</script>";
}else{
  $cek=user_akses($_GET['module'],$_SESSION['sessid']);
  if($cek==1 OR $_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    $aksi="modul/mod_mt/aksi_mt.php";
    $lop=$_POST['nip'];
    $lop=$_GET['nip'];
    switch($_GET['act']){
      default:
       echo "<div class='col-xs-12'>  
                  <div class='box'>
                    <div class='box-header'>
                      <input type='hidden' name='nip' value='$lop'>";
                $r=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM peserta WHERE Nip ='$_GET[nip]'"));
                echo  "<h3 class='box-title'>Riwayat Pekerjaan <b>$r[Nama_lengkap]</b></h3>
                      <a class='pull-right btn btn-primary btn-sm' href='?module=mt&act=tambah&nip=$lop'>Tambahkan Data</a>
                    </div>
                    <div class='box-body'>
                      <table id='example1' class='table table-bordered table-striped'>
                        <thead>
                          <tr>
                            <th style='width:20px'>No</th>
                            <th>Instansi</th>
                            <th>Jabatan</th>
                            <th>Tahun Mulai</th>
                            <th style='width:70px'></th>
                          </tr>
                        </thead>
                        <tbody>";
                        $no=1;
                        $tampil=mysqli_query($koneksi, "SELECT * FROM riwayat_pekerjaan WHERE Nip=$lop");
                        while ($row = mysqli_fetch_array($tampil)){
                        echo "<tr>
                                  <td>$no</td>
                                  <td>$row[Instansi]</td>
                                  <td>$row[Jabatan]</td>";
                        echo "<td>$row[Tahun_mulai]</td>
                                  <td>
                                    <center>
                                    <a class='btn btn-success btn-xs' title='Edit Data' href='?module=mt&act=edit&id=$row[Id_riwayat]&nip=$lop'><span class='glyphicon glyphicon-edit'></span></a>
                                    <a class='btn btn-danger btn-xs' title='Delete Data' href='$aksi?module=mt&act=hapus&id=$row[Id_riwayat]&nip=$row[Nip]&nip=$lop' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                                    </center>
                                  </td>
                              </tr>";
                          $no++;
                        }

                      echo "</tbody>
                    </table>
                  </div>
                <div class='modal-footer'>
                  <input type='button' class='btn btn-default pull-left' name='submit' data-dismiss='modal' value='Sebelumnya' onclick=\"window.location='?module=loop&nip=$lop'\" />
                  <input type='button' class='btn btn-default pull-right' name='submit' data-dismiss='modal' value='Selanjutnya' onclick=\"window.location='?module=lat&nip=$lop'\" />
                </div>
              </div>
            </div>";

      case "tambah":
echo "<div class='example-modal'>
        <div class='modal'>
          <div class='modal-dialog modal-lg'>
            <div class='modal-content'>
              <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close' onclick='self.history.back()'>
                  <span aria-hidden='true'>&times;</span></button>
                <h4 class='modal-title'><i class='fa fa-plus'></i> Tambah Riwayat Pekerjaan </h4>
              </div>
              <div class='modal-body'>
                <form role='form' name='form1' action='$aksi?module=mt&act=input' method='post' enctype='multipart/form-data' onSubmit='return validasi()'>
                <input type='hidden' name='nip' value='$lop' />
                <table class='table table-striped' style='width: 100%;'> 
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Instansi</td>

                        <td style='vertical-align: middle; width: 20px;'>:</td>

                        <td class='form-inline'>

                            <select name='propinsi_pengadilan' id='propinsi_pengadilan' class='form-control required'>

                                <option>[Pilih Propinsi]</option>

                            </select>

                            <select name='instansi' id='instansi' class='form-control required'>

                                <option>[Pilih Instansi]</option>
                            </select>

                        </td>
                    </tr>
                    <tr>
                      <td style='vertical-align: middle; width: 100px;'>Jabatan</td>

                        <td style='vertical-align: middle; width: 20px;'>:</td>

                        <td>

                            <select name='jabatan' id='jabatan' class='form-control required'>

                                <option>[Pilih Jabatan]</option>";

$result=mysqli_query($koneksi, "SELECT * FROM jabatan");
while($row=mysqli_fetch_array($result)){
  echo "<option value='$row[1]'>$row[1]</option>";
}
echo                         "</select>

                        </td>
                    </tr>  
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Tahun Mulai</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='date' class='form-control inline' style='width: 150px;' name='tgl_mulai' id='tgl_mulai' placeholder='Tahun Mulai' value='' required/></td>
                    </tr>
                </table>
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-default pull-left' data-dismiss='modal' onclick='self.history.back()'>Kembali</button>
                <button type='submit' class='btn btn-primary' name='submit' onclick=\"return alert('Data berhasil disimpan.')\">Simpan</button>
              </div>
              </form>
            </div>

          </div>

        </div>

      </div>";
      break;

      case "edit":
        $r=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM riwayat_pekerjaan WHERE Id_riwayat='$_GET[id]'"));
echo "<div class='example-modal'>
        <div class='modal'>
          <div class='modal-dialog modal-lg'>
            <div class='modal-content'>
              <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close' onclick='self.history.back()'>
                  <span aria-hidden='true'>&times;</span></button>
                <h4 class='modal-title'><i class='fa fa-plus'></i> Ubah Riwayat Pekerjaan </h4>
              </div>
              <div class='modal-body'>
                <form role='form' name='form1' action='$aksi?module=mt&act=update&nip=$lop' method='post' enctype='multipart/form-data' onSubmit='return validasi()'>
                <input type='hidden' name='id' value='$r[Id_riwayat]'>
                <input type='hidden' name='nip' value='$lop'>
                <table class='table table-striped' style='width: 100%;'> 
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Instansi</td>

                        <td style='vertical-align: middle; width: 20px;'>:</td>

                        <td class='form-inline'>

                            <select name='propinsi_pengadilan' id='propinsi_pengadilan' class='form-control required'>

                                <option>[Pilih Propinsi]</option>

                            </select>

                            <select name='instansi' id='instansi' class='form-control required'>

                                <option>[Pilih Instansi]</option>
                            </select>

                        </td>
                    </tr>
                    <tr>
                      <td style='vertical-align: middle; width: 100px;'>Jabatan</td>

                        <td style='vertical-align: middle; width: 20px;'>:</td>

                        <td>

                            <select name='jabatan' id='jabatan' class='form-control required'>

                                <option>[Pilih Jabatan]</option>";
$result=mysqli_query($koneksi, "SELECT * FROM jabatan");
while($row=mysqli_fetch_array($result)){
  echo "<option value='$row[1]'>$row[1]</option>";
}
echo                         "</select>

                        </td>
                    </tr>  
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Tahun Mulai</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='date' class='form-control inline' style='width: 150px;' name='tgl_mulai' id='tgl_mulai' placeholder='Tahun Mulai' value='$r[Tahun_mulai]' required/></td>
                    </tr>
                </table>
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-default pull-left' data-dismiss='modal' onclick='self.history.back()'>Kembali</button>
                <button type='submit' class='btn btn-primary' name='submit' onclick=\"return alert('Data berhasil diubah.')\">Simpan</button>
              </div>
              </form>
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