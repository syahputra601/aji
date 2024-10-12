<?php
session_start();
if (trim($_SESSION['leveluser'])==''){
  echo "<script>document.location='index.php';</script>";
}else{
  $cek=user_akses($_GET['module'],$_SESSION['sessid']);
  if($cek==1 OR $_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    $aksi="modul/mod_lat/aksi_lat.php";
    $lop=$_POST['nip'];
    $lop=$_GET['nip'];
    switch($_GET['act']){
      default:
       echo "<div class='col-xs-12'>  
                  <div class='box'>
                    <div class='box-header'>
                      <input type='hidden' name='nip' value='$lop'>";
                $r=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM peserta WHERE Nip ='$_GET[nip]'"));
                echo  "<h3 class='box-title'>Pendidikan Informal <b>$r[Nama_lengkap]</b></h3>
                      <a class='pull-right btn btn-primary btn-sm' href='?module=lat&act=tambah&nip=$lop'>Tambahkan Data</a>
                    </div>
                    <div class='box-body'>
                      <table id='example1' class='table table-bordered table-striped'>
                        <thead>
                          <tr>
                            <th style='width:20px'>No</th>
                            <th>Nama Pendidikan</th>
                            <th>Tempat</th>
                            <th>Tahun</th>
                            <th>Penyelenggara</th>
                            <th style='width:70px'></th>
                          </tr>
                        </thead>
                        <tbody>";
                        $no=1;
                        $tampil=mysqli_query($koneksi, "SELECT * FROM pendidikan_informal WHERE Nip=$lop");
                        while ($row = mysqli_fetch_array($tampil)){
                        echo "<tr>
                                  <td>$no</td>
                                  <td>$row[Nama_pendidikan]</td>
                                  <td>$row[Tempat]</td>
                                  <td>$row[Tahun]</td>";
                        echo "<td>$row[Penyelenggara]</td>
                                  <td>
                                    <center>
                                    <a class='btn btn-success btn-xs' title='Edit Data' href='?module=lat&act=edit&id=$row[Id_peninformal]&nip=$lop'><span class='glyphicon glyphicon-edit'></span></a>
                                    <a class='btn btn-danger btn-xs' title='Delete Data' href='$aksi?module=lat&act=hapus&id=$row[Id_peninformal]&nip=$row[Nip]&nip=$lop' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                                    </center>
                                  </td>
                              </tr>";
                          $no++;
                        }

                      echo "</tbody>
                    </table>
                  </div>
                <div class='modal-footer'>
                  <input type='button' class='btn btn-default pull-left' name='submit' data-dismiss='modal' value='Sebelumnya' onclick=\"window.location='?module=mt&nip=$lop'\" />
                  <input type='button' class='btn btn-default pull-right' name='submit' data-dismiss='modal' value='Selanjutnya' onclick=\"window.location='?module=serti&nip=$lop'\" />
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
                <h4 class='modal-title'><i class='fa fa-plus'></i> Tambah Pendidikan Informal </h4>
              </div>
              <div class='modal-body'>
                <form role='form' name='form1' action='$aksi?module=lat&act=input' method='post' enctype='multipart/form-data' onSubmit='return validasi()'>
                <input type='hidden' name='nip' value='$lop' />
                <table class='table table-striped' style='width: 100%;'>   
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Nama Pendidikan</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='text' class='form-control' name='nm_pendidikan' id='nm_pendidikan' placeholder='Masukan Nama Pendidikan' value='' required /></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Tempat</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='text' class='form-control' name='tempat' id='tempat' placeholder='Masukan Tempat' value='' required /></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Tahun</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='date' class='form-control inline' style='width: 150px;' name='tahun' id='tahun' placeholder='Tahun' value='' required/></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Penyelenggara</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='text' class='form-control' name='plg' id='plg' placeholder='Masukan Penyelenggara' value='' required /></td>
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
        $r=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM pendidikan_informal WHERE Id_peninformal='$_GET[id]'"));
echo "<div class='example-modal'>
        <div class='modal'>
          <div class='modal-dialog modal-lg'>
            <div class='modal-content'>
              <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close' onclick='self.history.back()'>
                  <span aria-hidden='true'>&times;</span></button>
                <h4 class='modal-title'><i class='fa fa-plus'></i> Tambah Master Pelatihan </h4>
              </div>
              <div class='modal-body'>
                <form role='form' name='form1' action='$aksi?module=lat&act=update&nip=$lop' method='post' enctype='multipart/form-data' onSubmit='return validasi()'>
                <input type='hidden' name='id' value='$r[Id_peninformal]'>
                <input type='hidden' name='nip' value='$lop' />
                <table class='table table-striped' style='width: 100%;'>   
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Nama Pendidikan</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='text' class='form-control' name='nm_pendidikan' id='nm_pendidikan' placeholder='Masukan Nama Pendidikan' value='$r[Nama_pendidikan]' required='required' /></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Tempat</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='text' class='form-control' name='tempat' id='tempat' placeholder='Masukan Tempat' value='$r[Tempat]' required='required' /></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Tahun</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='date' class='form-control inline' style='width: 150px;' name='tahun' id='tahun' placeholder='Tahun' value='$r[Tahun]' required/></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Penyelenggara</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='text' class='form-control' name='plg' id='plg' placeholder='Masukan Penyelenggara' value='$r[Penyelenggara]' required='required' /></td>
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