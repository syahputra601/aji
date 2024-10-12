<?php
session_start();
if (trim($_SESSION['leveluser'])==''){
  echo "<script>document.location='index.php';</script>";
}else{
  $cek=user_akses($_GET['module'],$_SESSION['sessid']);
  if($_SESSION['leveluser']=='user' OR $_SESSION['leveluser']=='admin'){
    $aksi="modul/mod_peserta/aksi_peserta.php";

    switch($_GET['act']){
      default:
       echo "<div class='col-xs-12'>  
                  <div class='box'>
                    <div class='box-header'>
                      <h3 class='box-title'>Data Pegawai</h3>
                      <a class='pull-right btn btn-primary btn-sm' href='?module=peserta&act=tambah'>Tambahkan Data</a>
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
                        $tampil=mysqli_query($koneksi, "SELECT * FROM peserta order by Nip");
                        while ($row = mysqli_fetch_array($tampil)){
                        echo "<tr><td>$no</td>
                                  <td>$row[Nama_lengkap]</td>";
                        echo "<td>$row[Nip]</td>
                              <td>$row[Instansi]</td>
                              <td>$row[Jabatan]</td>
                                  <td><center>
                                    <a class='btn btn-success btn-xs' title='Edit Data' href='?module=peserta&act=edit&id=$row[Nip]'><span class='glyphicon glyphicon-edit'></span></a>
                                    <a class='btn btn-danger btn-xs' title='Delete Data' href='$aksi?module=peserta&act=hapus&id=$row[Nip]&files=$row[Foto]&files2=small_$row[Foto]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                                  </center></td>
                              </tr>";
                          $no++;
                        }

                      echo "</tbody>
                    </table>
                  </div>
              </div>
            </div>";
      break;

      case "tambah":
        echo "<div class='example-modal'>

        <div class='modal'>

          <div class='modal-dialog modal-lg'>

            <div class='modal-content'>

              <div class='modal-header'>

                <button type='button' class='close' data-dismiss='modal' aria-label='Close' onclick='self.history.back()'>

                  <span aria-hidden='true'>&times;</span></button>

                <h4 class='modal-title'><i class='fa fa-plus'></i> Tambah Pegawai</h4>

              </div>

              <div class='modal-body'>

                <form role='form' name='form1' action='$aksi?module=peserta&act=input' method='post' enctype='multipart/form-data' onSubmit='return validasi()'>

                <table class='table table-striped' style='width: 100%;'>  

                    <tr>

                        <td style='vertical-align: middle; width: 100px;'>Nama</td>

                        <td style='vertical-align: middle; width: 20px;'>:</td>

                        <td>

                            <input type='text' class='form-control inline' style='width: 17%;' name='glr_depan' id='glr_depan' placeholder='Gelar Depan' />

                            <input type='text' class='form-control inline' style='width: 60%;' name='nama' id='nama' placeholder='Nama Lengkap' required='required' />

                            <input type='text' class='form-control inline' style='width: 18%;' name='glr_blkng' id='glr_blkng' placeholder='Gelar Belakang' />

                        </td>

                    </tr>

                    <tr>

                        <td style='vertical-align: middle; width: 100px;'>NIP/NRP</td>

                        <td style='vertical-align: middle; width: 20px;'>:</td>

                        <td><input type='text' class='form-control inline' style='width: 50%;' name='nip' id='nip_pegawai' placeholder='Masukan NIP/NRP' required /></td>

                    </tr>

                    <tr>

                        <td style='vertical-align: middle; width: 100px;'>NO KTP</td>

                        <td style='vertical-align: middle; width: 20px;'>:</td>

                        <td><input type='text' class='form-control inline' name='ktp' id='ktp' placeholder='Masukan KTP' required/></td>

                    </tr>

                    <tr>

                        <td style='vertical-align: middle; width: 100px;'>Tempat, Tanggal Lahir</td>

                        <td style='vertical-align: middle; width: 20px;'>:</td>

                        <td>

                            <input type='text' class='form-control inline' style='width: 200px;' name='tempat_lahir' id='tempat_lahir' placeholder='Tempat Lahir' required/>, 

                            <input type='date' class='form-control inline' style='width: 150px;' name='tgl_lahir' id='tanggal_pelatihan_awal' placeholder='Tanggal Lahir' required/>

                        </td>

                    </tr>

                    <tr>

                        <td style='vertical-align: middle; width: 100px;'>Jenis Kelamin</td>

                        <td style='vertical-align: middle; width: 20px;'>:</td>

                        <td>

                            <label>

                                <input type='radio' name='jns_kelamin' id='jns_kelamin' value='Laki-Laki' /> Laki-laki &nbsp; &nbsp;

                                <input type='radio' name='jns_kelamin' id='jns_kelamin' value='Perempuan' /> Perempuan

                            </label>

                        </td>

                    </tr>   

                    <tr>

                        <td style='vertical-align: middle; width: 100px;'>Pangkat/Golongan</td>

                        <td style='vertical-align: middle; width: 20px;'>:</td>

                        <td>

                            <select name='pangkat' id='pangkat' class='form-control required'>

                                <option>[Pilih Pangkat/Golongan]</option>";
$result=mysqli_query($koneksi, "SELECT * FROM golongan");
while($row=mysqli_fetch_array($result)){
  echo "<option value='$row[1]'>$row[1]</option>";
}

echo                         "</select>

                        </td>

                    </tr>

                    <tr>

                        <td style='vertical-align: middle; width: 100px;'>Jabatan</td>

                        <td style='vertical-align: middle; width: 20px;'>:</td>

                        <td>

                            <select name='jabatan' id='jabatan' class='form-control required'>

                                <option>[Pilih Jabatan]</option>";

$result2=mysqli_query($koneksi, "SELECT * FROM jabatan");
while($row2=mysqli_fetch_array($result2)){
  echo "<option value='$row2[1]'>$row2[1]</option>";
}
echo                         "</select>

                        </td>

                    </tr>

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

                        <td rowspan='2'>Alamat Rumah</td>

                        <td rowspan='2'>:</td>

                        <td colspan='3'>

                            <textarea class='form-control' id='alamat' name='alamat' rows='3' placeholder='[Tempat dan Jalan] [Nomor Rumah] [RT/RW] [Desa/Kelurahan] [Kecamatan]' required></textarea>

                        </td>

                    </tr>

                    <tr>

                        <td class='form-inline'>

                            <select name='propinsi' id='propinsi' class='form-control required'>

                                <option>[Pilih Propinsi]</option>
                            </select>

                            <select name='kota' id='kota' class='form-control required'>

                                <option>[Pilih Kota/Kabupaten]</option>
                            </select>

                            <input type='text' class='form-control inline pull-right' name='kodepos' id='kodepos' placeholder='kodepos' />

                        </td>

                    </tr>                    

                    <tr>

                        <td style='vertical-align: middle; width: 100px;'>Telp/HP</td>

                        <td style='vertical-align: middle; width: 20px;'>:</td>

                        <td><input type='text' class='form-control' name='telp' id='telp' placeholder='Masukan Telp' required/></td>

                    </tr>

                    <tr>

                        <td style='vertical-align: middle; width: 100px;'>Email</td>

                        <td style='vertical-align: middle; width: 20px;'>:</td>

                        <td><input type='text' class='form-control' name='email' id='email' placeholder='Masukan Email' required/></td>

                    </tr>

                    <tr>

                        <td style='vertical-align: middle;'>Foto</td>

                        <td style='vertical-align: middle;'>:</td>

                        <td>                        

                            <img src='images/img_peserta/no_photo.jpg' style='width: 236px; height: 315px;'  />

                            <input type='file' id='foto' name='foto' /><style class='help-block inline'>File foto harus bertipe *.jpeg, *.jpg, atau *.png</style>

                        </td>

                    </tr>

                </table>

              </div>

              <div class='modal-footer'>

                <button type='button' class='btn btn-default pull-left' data-dismiss='modal' onclick='self.history.back()'>Kembali</button>

                <button type='submit' class='btn btn-primary' name='submit' >Simpan</button>

              </div>

              </form>

            </div>



          </div>



        </div>

        </div>

      </div>";
      break;

      case "edper":
      $r = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM peserta WHERE Nip='$_GET[nip]'"));
echo "<div class='example-modal'>

        <div class='modal'>

          <div class='modal-dialog modal-lg'>

            <div class='modal-content'>

              <div class='modal-header'>

                <button type='button' class='close' data-dismiss='modal' aria-label='Close' onclick='self.history.back()'>

                  <span aria-hidden='true'>&times;</span></button>

                <h4 class='modal-title'><i class='fa fa-plus'></i> Tambah Pegawai</h4>

              </div>

              <div class='modal-body'>

                <form role='form' name='form1' action='$aksi?module=peserta&act=update' method='post' enctype='multipart/form-data' onSubmit='return validasi()'>

                <table class='table table-striped' style='width: 100%;'>  

                    <tr>

                        <td style='vertical-align: middle; width: 100px;'>Nama</td>

                        <td style='vertical-align: middle; width: 20px;'>:</td>

                        <td>
                            <input type=hidden name=id value=$r[Id_peserta]>

                            <input type='text' class='form-control inline' style='width: 17%;' name='glr_depan' id='glr_depan' placeholder='Gelar Depan' value='$r[Gelar_depan]' />

                            <input type='text' class='form-control inline' style='width: 60%;' name='nama' id='nama' placeholder='Nama Lengkap' value='$r[Nama_lengkap]' required/>

                            <input type='text' class='form-control inline' style='width: 18%;' name='glr_blkng' id='glr_blkng' placeholder='Gelar Belakang' value='$r[Gelar_belakang]' />

                        </td>

                    </tr>

                    <tr>

                        <td style='vertical-align: middle; width: 100px;'>NIP/NRP</td>

                        <td style='vertical-align: middle; width: 20px;'>:</td>

                        <td><input type='text' class='form-control inline' name='nip' id='nip' placeholder='Masukan NIP/NRP' value='$r[Nip]' required/></td>

                    </tr>

                    <tr>

                        <td style='vertical-align: middle; width: 100px;'>NO KTP</td>

                        <td style='vertical-align: middle; width: 20px;'>:</td>

                        <td><input type='text' class='form-control inline' name='ktp' id='ktp' placeholder='Masukan KTP' value='$r[No_ktp]' required/></td>

                    </tr>

                    <tr>

                        <td style='vertical-align: middle; width: 100px;'>Tempat, Tanggal Lahir</td>

                        <td style='vertical-align: middle; width: 20px;'>:</td>

                        <td>

                            <input type='text' class='form-control inline' style='width: 200px;' name='tempat_lahir' id='tempat_lahir' placeholder='Tempat Lahir' value='$r[Tempat_lahir]' required/>, 

                            <input type='date' class='form-control inline' style='width: 150px;' name='tgl_lahir' id='tgl_lahir' placeholder='Tanggal Lahir' value='$r[Tanggal_lahir]' required/>

                        </td>

                    </tr>

                    <tr>

                        <td style='vertical-align: middle; width: 100px;'>Jenis Kelamin</td>

                        <td style='vertical-align: middle; width: 20px;'>:</td>

                        <td>

                            <label>

                                <input type='radio' name='jns_kelamin' id='jns_kelamin' value='Laki-Laki' /> Laki-laki &nbsp; &nbsp;

                                <input type='radio' name='jns_kelamin' id='jns_kelamin' value='Perempuan' /> Perempuan

                            </label>

                        </td>

                    </tr>   

                    <tr>

                        <td style='vertical-align: middle; width: 100px;'>Pangkat/Golongan</td>

                        <td style='vertical-align: middle; width: 20px;'>:</td>

                        <td>

                            <select name='pangkat' id='pangkat' class='form-control required'>

                                <option>[Pilih Pangkat/Golongan]</option>";
$result=mysqli_query($koneksi, "SELECT * FROM golongan");
while($row=mysqli_fetch_array($result)){
  echo "<option value='$row[1]'>$row[1]</option>";
}

echo                         "</select>

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

                        <td rowspan='2'>Alamat Rumah</td>

                        <td rowspan='2'>:</td>

                        <td colspan='3'>

                            <textarea class='form-control' id='alamat' name='alamat' rows='3' placeholder='[Tempat dan Jalan] [Nomor Rumah] [RT/RW] [Desa/Kelurahan] [Kecamatan]' required>$r[Alamat]</textarea>

                        </td>

                    </tr>

                    <tr>

                        <td class='form-inline'>

                            <select name='propinsi' id='propinsi' class='form-control required'>

                                <option>[Pilih Propinsi]</option>
                            </select>

                            <select name='kota' id='kota' class='form-control required'>

                                <option>[Pilih Kota/Kabupaten]</option>
                            </select>

                            <input type='text' class='form-control inline pull-right' name='kodepos' id='kodepos' value='$r[Kode_pos]' placeholder='kodepos' />

                        </td>

                    </tr>                    

                    <tr>

                        <td style='vertical-align: middle; width: 100px;'>Telp/HP</td>

                        <td style='vertical-align: middle; width: 20px;'>:</td>

                        <td><input type='text' class='form-control' name='telp' id='telp' placeholder='Masukan Telp' value='$r[Telepon]' /></td>

                    </tr>

                    <tr>

                        <td style='vertical-align: middle; width: 100px;'>Email</td>

                        <td style='vertical-align: middle; width: 20px;'>:</td>

                        <td><input type='text' class='form-control' name='email' id='email' placeholder='Masukan Email' value='$r[Email]' required></td>

                    </tr>

                    <tr>

                        <td style='vertical-align: middle;'>Foto</td>

                        <td style='vertical-align: middle;'>:</td>

                        <td>                        

                            <img src='../../images/img_peserta/$r[Foto]' style='width: 236px; height: 315px;'  /><input type='file' name='foto'><style class='help-block inline'>File foto harus bertipe *.jpeg, *.jpg, atau *.png</style><br>";
                          if ($r['Foto']!=''){ echo "Foto Saat ini : <a target='_BLANK' href='../../images/img_peserta/$r[Foto]'>$r[Foto]</a>"; }else{ echo "Foto Saat ini : <a target='_BLANK' href='../../images/img_peserta/blank.png'>blank.png</a>"; } 


echo                       "

                        </td>

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

        </div>

      </div>";
      break;

      case "edit":
        $r = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM peserta WHERE Nip='$_GET[id]'"));
echo "<div class='box box-default color-palette-box'>
        <div class='box-header with-border'>
            <h3 class='box-title'><i class='fa fa-pencil-square-o'></i> Menu Ubah Data Pegawai</h3>
        </div>
        <div class='box-body'>
            <div class='row'>
                <div class='col-sm-12 col-md-12'>
                    <div class='callout callout-info'>
                    <center>
                    <input type='hidden' name='id' value='$r[Id_peserta]'>
                    <img src='../../images/img_peserta/$r[Foto]' style='width: 236px; height: 315px;'  />
                    <br>
                    $r[Nama_lengkap] - $r[Nip]
                    </center>
                    </div>
                  &nbsp;&nbsp;&nbsp;
                  <a class='btn btn-primary btn-sm' href='?module=peserta&act=edper&id=$r[Id_peserta]&nip=$r[Nip]' style='width: 240px;'>Profil</a>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a class='btn btn-primary btn-sm' href='?module=loop&nip=$r[Nip]&tip=' style='width: 240px;'>Pendidikan Formal</a>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a class='btn btn-primary btn-sm' href='?module=mt&nip=$r[Nip]&tip=' style='width: 240px;'>Riwayat Pekerjaan</a>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a class='btn btn-primary btn-sm' href='?module=lat&nip=$r[Nip]&tip=' style='width: 240px;'>Pendidikan Informal</a><br><br>
                  &nbsp;&nbsp;&nbsp;
                  <a class='btn btn-primary btn-sm' href='?module=serti&id=$r[Id_peserta]&nip=$r[Nip]' style='width: 240px;'>Sertifikat Pelatihan</a>
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