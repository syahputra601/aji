<?php
session_start();
if (trim($_SESSION['leveluser'])==''){
  echo "<script>document.location='index.php';</script>";
}else{
  $cek=user_akses($_GET['module'],$_SESSION['sessid']);
  if($cek==1 OR $_SESSION['leveluser']=='admin'){
    $aksi="modul/mod_ms_pel/aksi_ms_pel.php";

    switch($_GET['act']){
      default:
       echo "<div class='col-xs-12'>  
                  <div class='box'>
                    <div class='box-header'>
                      <h3 class='box-title'>Jenis Pelatihan</h3>
                      <a class='pull-right btn btn-primary btn-sm' href='?module=ms_pel&act=tambah'>Tambahkan Data</a>
                    </div>
                    <div class='box-body'>
                      <table id='example1' class='table table-bordered table-striped'>
                        <thead>
                          <tr>
                            <th style='width:20px'>No</th>
                            <th>Nama</th>
                            <th width='350px'>Deskripsi</th>
                            <th style='width:70px'>Action</th>
                          </tr>
                        </thead>
                        <tbody>";
                        $no=1;
                        $tampil=mysqli_query($koneksi, "SELECT * FROM masterpelatihan order by no");
                        while ($row = mysqli_fetch_array($tampil)){
                        echo "<tr><td>$no</td>
                                  <td>$row[nama]</td>";
                        echo "<td>$row[deskripsi]</td>
                                  <td><center>
                                    <a class='btn btn-success btn-xs' title='Edit Data' href='?module=ms_pel&act=edit&no=$row[no]'><span class='glyphicon glyphicon-edit'></span></a>
                                    <a class='btn btn-danger btn-xs' title='Delete Data' href='$aksi?module=ms_pel&act=hapus&no=$row[no]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
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
                <h4 class='modal-title'><i class='fa fa-plus'></i> Tambah Jenis Pelatihan </h4>
              </div>
              <div class='modal-body'>
                <form role='form' name='form1' action='$aksi?module=ms_pel&act=input' method='post' enctype='multipart/form-data' onSubmit='return validasi()'>
                <input type='hidden' name='tip' value='13' />
                <input type='hidden' name='til' value='4' />
                <table class='table table-striped' style='width: 100%;'>   
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Nama</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='text' class='form-control' name='nm_pelatihan' id='nm_pelatihan' placeholder='Masukan Nama Pelatihan' value='' required /></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Deskripsi</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td>
                            <textarea id='deskripsi' name='deskripsi' rows='5' cols='80' placeholder='Masukan Deskripsi Pelatihan' required></textarea>
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
        $r=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM masterpelatihan WHERE no='$_GET[no]'"));
echo "<div class='example-modal'>
        <div class='modal'>
          <div class='modal-dialog modal-lg'>
            <div class='modal-content'>
              <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close' onclick='self.history.back()'>
                  <span aria-hidden='true'>&times;</span></button>
                <h4 class='modal-title'><i class='fa fa-edit'></i> Ubah Jenis Pelatihan</h4>
              </div>
              <div class='modal-body'>
                <form role='form' name='form1' action='$aksi?module=ms_pel&act=update' method='post' enctype='multipart/form-data' onSubmit='return validasi()'>
                <input type='hidden' name='tip' value='13' />
                <input type='hidden' name='til' value='4' />
                <table class='table table-striped' style='width: 100%;'>   
                    <tr>
                        <input type=hidden name=id value=$r[no]>
                        <td style='vertical-align: middle; width: 100px;'>Nama</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='text' class='form-control' name='nm_pelatihan' id='nm_pelatihan' placeholder='Masukan Nama Pelatihan' value='$r[nama]' required /></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Deskripsi</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td>
                            <textarea id='' name='deskripsi' rows='5' cols='80' placeholder='Masukan Deskripsi Pelatihan' required>$r[deskripsi]</textarea>
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