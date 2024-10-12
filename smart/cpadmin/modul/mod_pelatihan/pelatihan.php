<?php
session_start();
if (trim($_SESSION['leveluser'])==''){
  echo "<script>document.location='index.php';</script>";
}else{
  $cek=user_akses($_GET['module'],$_SESSION['sessid']);
  if($cek==1 OR $_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    $aksi="modul/mod_pelatihan/aksi_pelatihan.php";

    switch($_GET['act']){
      default:
       echo "<div class='col-xs-12'>  
                  <div class='box'>
                    <div class='box-header'>
                      <h3 class='box-title'>Data Jadwal Pelatihan</h3>
                      <a class='pull-right btn btn-primary btn-sm' href='?module=pelatihan&act=tambah'>Tambahkan Data</a>
                    </div>
                    <div class='box-body'>
                      <table id='example1' class='table table-bordered table-striped'>
                        <thead>
                          <tr>
                            <th width='10px'>No</th>
                            <th width='30px'>Jenis</th>
                            <th width='300px'>Nama</th>
                            <th width='300px'>Lokasi</th>
                            <th width='100px'>Tanggal</th>
                            <th width='10px'></th>
                          </tr>
                        </thead>
                        <tbody>";
                        $no=1;
                        $tampil=mysqli_query($koneksi, "SELECT * FROM pelatihan order by Id_pelatihan");
                        while ($row = mysqli_fetch_array($tampil)){
                        echo "<tr><td>$no</td>
                                  <td>$row[Jenis]</td>";
                        echo "<td>$row[Nama]</td>
                              <td>$row[Lokasi], $row[kabupaten]-$row[propinsi]</td>
                              <td>$row[Tanggal_mulai] s.d. $row[Tanggal_selesai]</td>
                                  <td><center>
                                    <a class='btn btn-success btn-xs' title='Edit Data' href='?module=pelatihan&act=edit&no=$row[Id_pelatihan]&name=$row[Jenis]'><span class='glyphicon glyphicon-edit'></span></a>
                                    <a class='btn btn-danger btn-xs' title='Delete Data' href='$aksi?module=pelatihan&act=hapus&no=$row[Id_pelatihan]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
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
                <h4 class='modal-title'><i class='fa fa-plus'></i> Tambah Jadwal Pelatihan</h4>
              </div>
              <div class='modal-body'>
                <form role='form' name='form1' action='$aksi?module=pelatihan&act=input' method='post' enctype='multipart/form-data' onSubmit='return validasi()'>
                <table class='table table-striped' style='width: 100%;'>   
                    <tr>
                        <td style='ertical-align: middle; width: 100px;'>Jenis</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td>
                            <select name='jenis' id='jenis' class='form-control required'>
                                <option>[Pilih Jenis Pelatihan]</option>";

$result = mysqli_query($koneksi,"Select * From masterpelatihan");
while($print=mysqli_fetch_array($result)){
  echo "<option value='$print[1]'>$print[1]</option>";
}

echo                         "</select>
                        </td>
                    </tr>

                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Nama</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='text' class='form-control' name='nm_pelatihan' id='nm_pelatihan' placeholder='Masukan Nama Pelatihan' required='required' /></td>
                    </tr>
                    <tr>
                        <td>Lokasi</td>
                        <td>:</td>
                        <td>
                            <textarea class='form-control' id='tempat' name='tempat' rows='3' placeholder='Masukan Lokasi Pelatihan' required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class='form-inline'>
                            <select name='propinsi' id='propinsi' class='form-control required'>
                            </select>
                            <select name='kota' id='kota' class='form-control required'>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Tahun</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td>
                            <select name='tahun' id='tahun' class='form-control required' style='width: 20%;'>
                                <option>[Pilih Tahun]</option>";
                                for( $i= 1980 ; $i <= 2018 ; $i++ )
                                {
                          
                          echo "<option value='$i'>$i</option>";
                          
                                }

                          echo "</select>  
                        </td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Tanggal</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td>
                            <input type='date' class='form-control inline' style='width: 150px;' name='tgl_awal' id='tanggal_pelatihan_awal'  placeholder='Mulai' required='required' />
                            s.d.
                            <input type='date' class='form-control inline' style='width: 150px;' name='tgl_akhir' id='tanggal_pelatihan_akhir' placeholder='Akhir' required='required' />                            
                        </td>
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
        $r = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM pelatihan WHERE Id_pelatihan ='$_GET[no]'"));
        echo "<div class='example-modal'>
        <div class='modal'>
          <div class='modal-dialog modal-lg'>
            <div class='modal-content'>
              <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close' onclick='self.history.back()'>
                  <span aria-hidden='true'>&times;</span></button>
                <h4 class='modal-title'><i class='fa fa-plus'></i> Tambah Jadwal Pelatihan</h4>
              </div>
              <div class='modal-body'>
                <form role='form' name='form1' action='$aksi?module=pelatihan&act=update' method='post' enctype='multipart/form-data' onSubmit='return validasi()'>
                <table class='table table-striped' style='width: 100%;'>   
                    <tr>
                        <td style='ertical-align: middle; width: 100px;'>Jenis</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td>
                            <select name='jenis2' id='jenis2' class='form-control required'>
                                <option>[Pilih Jenis Pelatihan]</option>";

$result = mysqli_query($koneksi,"SELECT * FROM pelatihan WHERE Id_pelatihan='$_GET[no]''");
$row = mysqli_fetch_array($result);
$result2 = mysqli_query($koneksi,"SELECT * FROM masterpelatihan");
while($row2=mysqli_fetch_array($result2, MYSQLI_NUM))
{
  if($row['Jenis']==$row2[1])
    echo "<option value='$row2[1]' selected='selected'>$row2[1]</option>";
  else
    echo "<option value='$row2[1]'>$row2[1]</option>";
}
echo                        "</select>
                        </td>
                    </tr>
                    <tr>
                        <input type=hidden name=no value=$r[No]>
                        <td style='vertical-align: middle; width: 100px;'>Nama</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='text' class='form-control' name='nm_pelatihan' id='nm_pelatihan' placeholder='Masukan Nama Pelatihan' required='required' value='$r[Nama]'/></td>
                    </tr>
                    <tr>
                        <td>Lokasi</td>
                        <td>:</td>
                        <td>
                            <textarea class='form-control' id='tempat' name='tempat' rows='3' placeholder='Masukan Lokasi Pelatihan' required>$r[Lokasi]</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class='form-inline'>
                            <select name='propinsi' id='propinsi' class='form-control required'>
                            </select>
                            <select name='kota' id='kota' class='form-control required'>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Tahun</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='text' class='form-control' name='tahun' id='tahun' placeholder='Masukan Tahun' required='required' value='$r[tahun]'/></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Tanggal</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td>
                            <input type='date' class='form-control inline' style='width: 150px;' name='tgl_awal' id='' data-date-format='dd-mm-yyyy' placeholder='Mulai' required='required' value='$r[Tanggal_mulai]'/>
                            s.d.
                            <input type='date' class='form-control inline' style='width: 150px;' name='tgl_akhir' id='' placeholder='Akhir' required='required' value='$r[Tanggal_selesai]'/>                            
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

      </div>";
      break;
    }
  }else{
       echo akses_salah();
  }
}
?>