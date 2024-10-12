<?php
session_start();
if (trim($_SESSION['leveluser'])==''){
  echo "<script>document.location='index.php';</script>";
}else{
  $cek=user_akses($_GET['module'],$_SESSION['sessid']);
  if($cek==1 OR $_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    $aksi="modul/mod_sertifikat/aksi_serti.php";
    $lop=$_POST['nip'];
    $lop=$_GET['nip'];
    switch($_GET['act']){
      default:
       echo "<div class='col-xs-12'>  
                  <div class='box'>
                    <div class='box-header'>
                      <input type='hidden' name='nip' value='$lop'>";
                $r=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM peserta WHERE Nip ='$_GET[nip]'"));
                echo  "<h3 class='box-title'>Sertifikat Pelatihan <b>$r[Nama_lengkap]</b></h3>
                      <a class='pull-right btn btn-primary btn-sm' href='?module=serti&act=tambah&nip=$lop'>Tambahkan Data</a>
                    </div>
                    <div class='box-body'>
                      <div class='alert alert-info'>
                        Klik pada isi File untuk melihat dan mengunduh setiap data file.
                      </div>
                      <table id='example1' class='table table-bordered table-striped'>
                        <thead>
                          <tr>
                            <th style='width:20px'>No</th>
                            <th>Nama Pelatihan</th>
                            <th>Nama Lengkap</th>
                            <th>Unit Kompetensi</th>
                            <th>Penyelenggara</th>
                            <th>Tanggal</th>
                            <th>File</th>
                            <th style='width:70px'></th>
                          </tr>
                        </thead>
                        <tbody>";
                        $no=1;
                        $tampil=mysqli_query($koneksi, "SELECT * FROM sertifikat WHERE Nip=$lop");
                        while ($row = mysqli_fetch_array($tampil)){
                        echo "<tr>
                                  <td>$no</td>
                                  <td>$row[Nama_pelatihan]</td>
                                  <td>$row[Nama_lengkap]</td>
                                  <td>$row[Unit_kompetensi]</td>";
                        echo "<td>$row[Penyelenggara]</td>
                              <td>$row[Tanggal_mulai] s.d. $row[Tanggal_selesai]</td>
                              <td>";

//validasi file
if($row[File]!='')
{
  echo "<a target='_BLANK' href='../../file_sertifikat/$row[File]'>Ada</a>";
}else{
  echo "Tidak";
}

                        echo "</td>
                                  <td>
                                    <center>
                                    <a class='btn btn-success btn-xs' title='Edit Data' href='?module=serti&act=edit&id=$row[Id_sertifikat]&nip=$lop'><span class='glyphicon glyphicon-edit'></span></a>
                                    <a class='btn btn-danger btn-xs' title='Delete Data' href='$aksi?module=serti&act=hapus&id=$row[Id_sertifikat]&nip=$row[Nip]&nip=$lop&files=$row[File]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                                    </center>
                                  </td>
                              </tr>";
                          $no++;
                        }

                      echo "</tbody>
                    </table>
                  </div>
                <div class='modal-footer'>
                  <input type='button' class='btn btn-default pull-left' name='submit' data-dismiss='modal' value='Sebelumnya' onclick=\"window.location='?module=lat&nip=$lop'\" />";
if($_SESSION['leveluser']=='admin'){
  echo "<input type='button' class='btn btn-default pull-right' name='submit' data-dismiss='modal' value='Selesai' onclick=\"window.location='?module=peserta'\" />";
  }else{
    echo "<input type='button' class='btn btn-default pull-right' name='submit' data-dismiss='modal' value='Selesai' onclick=\"window.location='?module=home'\" />";
  }
              echo  "</div>
              </div>
            </div>";
      break;

      case "tambah":
      $r=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM peserta WHERE Nip =$lop"));
echo "<div class='example-modal'>
        <div class='modal'>
          <div class='modal-dialog modal-lg'>
            <div class='modal-content'>
              <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close' onclick='self.history.back()'>
                  <span aria-hidden='true'>&times;</span></button>
                <h4 class='modal-title'><i class='fa fa-plus'></i> Tambah Sertifikat Pelatihan </h4>
              </div>
              <div class='modal-body'>
                <form role='form' name='form1' action='$aksi?module=serti&act=input' method='post' enctype='multipart/form-data' onSubmit='return validasi()'>
                <input type='hidden' name='nip' value='$lop' />
                <input type='hidden' name='idpelatihan' id='idpelatihan' />
                <table class='table table-striped' style='width: 100%;'>   
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Nama Pelatihan</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td class='form-inline'>
                            <select name='jenis2' id='jenis2' class='form-control required' style='width: 25%;' required>

                            </select>
                            <select name='nmpelatihan' id='nmpelatihan' class='form-control required' style='width: 65%;' required>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Nama Lengkap</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='text' readonly='' class='form-control' name='nm_lengkap' id='nm_lengkap' placeholder='Masukan Nama Lengkap' required='required' value='$r[Nama_lengkap]'/></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Unit Kompetensi</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><textarea class='form-control' id='unit' name='unit' placeholder='Masukan Unit Kompetensi' required></textarea></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Penyelenggara</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='text' class='form-control' name='plg' id='plg' placeholder='Masukan Penyelenggara' value='' required='required' /></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Tanggal</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td>
                          <input type='date' class='form-control inline' style='width: 150px;' name='tanggal_mulai' id='tanggal_mulai' placeholder='Tahun' value='' required/>
                          s.d.
                          <input type='date' class='form-control inline' style='width: 150px;' name='tanggal_selesai' id='tanggal_selesai' placeholder='Tahun' value='' required/>
                        </td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Upload Sertifikat</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='file' id='file' name='file' accept='.pdf'/></td>
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
        $r=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM sertifikat WHERE Id_sertifikat ='$_GET[id]'"));
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
                <form role='form' name='form1' action='$aksi?module=serti&act=update&nip=$lop' method='post' enctype='multipart/form-data' onSubmit='return validasi()'>
                <input type='hidden' name='id' value='$r[Id_sertifikat]'>
                <input type='hidden' name='nip' value='$lop' />
                <input type='hidden' name='idpelatihan' id='idpelatihan' />
                <table class='table table-striped' style='width: 100%;'>   
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Nama Pelatihan</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td class='form-inline'>
                            <select name='jenis2' id='jenis2' class='form-control required' style='width: 25%;' required>

                            </select>
                            <select name='nmpelatihan' id='nmpelatihan' class='form-control required' style='width: 65%;' required>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Nama Lengkap</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='text' class='form-control' name='nm_lengkap' id='nm_lengkap' placeholder='Masukan Nama Lengkap' value='$r[3]' required='required' /></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Unit Kompetensi</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><textarea class='form-control' id='unit' name='unit' placeholder='Masukan Unit Kompetensi' required>$r[4]</textarea></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Penyelenggara</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='text' class='form-control' name='plg' id='plg' placeholder='Masukan Penyelenggara' value='$r[5]' required='required' /></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Tanggal</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td>
                          <input type='date' class='form-control inline' style='width: 150px;' name='tanggal_mulai' id='tanggal_mulai' placeholder='Tahun' value='$r[6]' required/>
                          s.d.
                          <input type='date' class='form-control inline' style='width: 150px;' name='tanggal_selesai' id='tanggal_selesai' placeholder='Tahun' value='$r[7]' required/>
                        </td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Upload Sertifikat</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='file' id='file' name='file' accept='.pdf'/>";
                           if ($r['File']!=''){ echo "File Saat ini : <a target='_BLANK' href='../../file_sertifikat/$r[File]'>$r[File]</a>"; }else{ echo "Foto Saat ini : <a target='_BLANK' href='../../file_sertifikat/blank.png'></a>"; } 
            echo       "</td>
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

      case "fikat":
      $r=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM peserta WHERE Nip =$lop"));
             echo "<div class='col-xs-12'>  
                  <div class='box'>
                    <div class='box-header'>
                      <input type='hidden' name='nip' value='$lop'>
                      <h3 class='box-title'>Sertifikat Pelatihan $r[Nama_lengkap]</h3>
                    </div>
                    <div class='box-body'>
                      <table id='example1' class='table table-bordered table-striped'>
                        <thead>
                          <tr>
                            <th style='width:20px'>No</th>
                            <th>Nama Pelatihan</th>
                            <th>Nip</th>
                            <th>Penyelenggara</th>
                            <th>Tanggal</th>
                            <th style='width:70px'>File</th>
                          </tr>
                        </thead>
                        <tbody>";
                        $no=1;
                        $tampil=mysqli_query($koneksi, "SELECT * FROM sertifikat WHERE Nip=$lop");
                        while ($row = mysqli_fetch_array($tampil)){
                        echo "<tr>
                                  <td>$no</td>
                                  <td>$row[Nama_pelatihan]</td>
                                  <td>$row[Nip]</td>
                              <td>$row[Penyelenggara]</td>
                              <td>$row[Tanggal]</td>
                                  <td>
                                    <center>
                                    <a target='_BLANK' href='../../file_sertifikat/$row[File]'>
                                    <button class='btn btn-white btn-info btn-bold'>
                                      <i class='fa fa-download bigger-120'></i>
                                        Unduh
                                    </button>
                                    </a>
                                    </center>
                                  </td>
                              </tr>";
                          $no++;
                        }

                      echo "</tbody>
                    </table>
                  </div>
                <div class='modal-footer'>
                  <button type='button' class='btn btn-default pull-left' onclick='self.history.back()'>Kembali</button>
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