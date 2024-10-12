<?php
session_start();
if (trim($_SESSION['leveluser'])==''){
  echo "<script>document.location='index.php';</script>";
}else{
  $cek=user_akses($_GET['module'],$_SESSION['sessid']);
  if($cek==1 OR $_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    $aksi="modul/mod_loop/aksi_loop.php";
    $lop=$_POST['nip'];
    $lop=$_GET['nip'];
    switch($_GET['act']){
      default:
       echo "<div class='col-xs-12'>  
                  <div class='box'>
                    <div class='box-header'>
                      <input type='hidden' name='nip' value='$lop'>";
                $r=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM peserta WHERE Nip ='$_GET[nip]'"));
                echo  "<h3 class='box-title'>Pendidikan Formal <b>$r[Nama_lengkap]</b></h3>
                      <a class='pull-right btn btn-primary btn-sm' href='?module=loop&act=tambah&nip=$lop'>Tambahkan Data</a>
                    </div>
                    <div class='box-body'>
                      <table id='example1' class='table table-bordered table-striped'>
                        <thead>
                          <tr>
                            <th style='width:20px'>No</th>
                            <th>Jenjang</th>
                            <th>Jurusan</th>
                            <th>Nama Sekolah</th>
                            <th>Lokasi</th>
                            <th>Tahun Lulus</th>
                            <th style='width:70px'></th>
                          </tr>
                        </thead>
                        <tbody>";
                        $no=1;
                        $tampil=mysqli_query($koneksi, "SELECT * FROM pendidikan_formal WHERE Nip=$lop");
                        while ($row = mysqli_fetch_array($tampil)){
                        echo "<tr>
                                  <td>$no</td>
                                  <td>$row[Jenjang]</td>
                                  <td>$row[Jurusan]</td>
                                  <td>$row[Nama_sekolah]</td>
                                  <td>$row[Lokasi]</td>";
                        echo "<td>$row[Tahun_lulus]</td>
                                  <td>
                                    <center>
                                    <a class='btn btn-success btn-xs' title='Edit Data' href='?module=loop&act=edit&id=$row[Id_penformal]&nip=$lop'><span class='glyphicon glyphicon-edit'></span></a>
                                    <a class='btn btn-danger btn-xs' title='Delete Data' href='$aksi?module=loop&act=hapus&id=$row[Id_penformal]&nip=$row[Nip]&nip=$lop' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                                    </center>
                                  </td>
                              </tr>";
                          $no++;
                        }

                      echo "</tbody>
                    </table>
                  </div>
                <div class='modal-footer'>
                  <input type='button' class='btn btn-default pull-right' name='submit' data-dismiss='modal' value='Selanjutnya' onclick=\"window.location='?module=mt&nip=$lop'\" />
                </div>
              </div>
            </div>";
      break;

      case "tambah":
 echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Pendidikan Formal</h3>
                </div>
              <div class='box-body'>
              <form class='form-horizontal' role='form' method=POST action='$aksi?module=loop&act=input' enctype='multipart/form-data'>
                <div class='col-md-12'>
                  <table class='table table-striped' style='width: 100%;'>
                  <tbody>
                        <input type='hidden' name='nip' value='$lop'>
                    <tr><th scope='row' style='width: 150px;'>Jenjang</th>      
                        <td><select name='jenjang' id='jenjang' class='form-control required'>
                                <option>[Pilih Jenjang]</option>";

$result=mysqli_query($koneksi, "SELECT * FROM jenjang");
while($row=mysqli_fetch_array($result)){
  echo "<option value='$row[1]'>$row[1]</option>";
}

echo                         "</select>
                    </tr>
                    <tr><th scope='row' style='width: 150px;'>Jurusan</th>      <td><input type='text' class='form-control' name='jurusan' placeholder='Masukan Jurusan' required></td></tr>
                    <tr><th scope='row' style='width: 150px;'>Nama Sekolah</th> <td><input type='text' class='form-control' name='nama_sekolah' placeholder='Masukan Nama Sekolah' required></td></tr>
                    <tr><th scope='row' style='width: 150px;'>Lokasi</th>       <td><textarea class='form-control' id='lokasi' name='lokasi' placeholder='Masukan Lokasi' required></textarea></td></tr>
                    <tr><th scope='row' style='width: 150px;'>Tanggal Lulus</th>  <td><input type='date' class='form-control inline' style='width: 150px;' name='tgl_lulus' id='tgl_lulus' placeholder='Tahun Lulus' value='' required/>

                    </td></tr>";
                echo "</div></td></tr>
                  </tbody>
                  </table>
                </div>
              </div>
              <div class='box-footer'>
                    <button type='button' class='btn btn-default pull-left' data-dismiss='modal' onclick='self.history.back()'>Kembali</button>
                    <button type='submit' name='submit' class='btn btn-primary pull-right' onclick=\"return alert('Data berhasil disimpan.')\">Simpan</button>
              </div>
            </div>
          </div>
          <div style='clear:both'></div>"; 
      break;

      case "edit":
        $r=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM pendidikan_formal WHERE Id_penformal='$_GET[id]'"));
 echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Ubah Pendidikan Formal</h3>
                </div>
              <div class='box-body'>
              <form class='form-horizontal' role='form' method=POST action='$aksi?module=loop&act=update&nip=$lop' enctype='multipart/form-data'>
                <div class='col-md-12'>
                  <table class='table table-striped' style='width: 100%;'>
                  <tbody>
                        <input type='hidden' name='id' value='$r[Id_penformal]'>
                        <input type='hidden' name='nip' value='$lop'>
                    <tr><th scope='row' style='width: 150px;'>Jenjang</th>      
                        <td><select name='jenjang' id='jenjang' class='form-control required'>
                                <option>[Pilih Jenjang]</option>";

$result=mysqli_query($koneksi, "SELECT * FROM jenjang");
while($row=mysqli_fetch_array($result)){
  echo "<option value='$row[1]'>$row[1]</option>";
}

echo                         "</select>
                    </tr>
                    <tr><th scope='row' style='width: 150px;'>Jurusan</th>      <td><input type='text' class='form-control' name='jurusan' placeholder='Masukan Jurusan' value='$r[Jurusan]' required></td></tr>
                    <tr><th scope='row' style='width: 150px;'>Nama Sekolah</th> <td><input type='text' class='form-control' name='nama_sekolah' placeholder='Masukan Nama Sekolah' value='$r[Nama_sekolah]' required></td></tr>
                    <tr><th scope='row' style='width: 150px;'>Lokasi</th>       <td><textarea class='form-control' id='lokasi' name='lokasi' placeholder='Masukan Lokasi' required>$r[Lokasi]</textarea></td></tr>
                    <tr><th scope='row' style='width: 150px;'>Tanggal Lulus</th>  <td><input type='date' class='form-control inline' style='width: 150px;' name='tgl_lulus' id='tgl_lulus' placeholder='Tahun Lulus' value='$r[Tahun_lulus]' required/></td></tr>";
                echo "</div></td></tr>
                  </tbody>
                  </table>
                </div>
              </div>
              <div class='box-footer'>
                    <button type='button' class='btn btn-default pull-left' data-dismiss='modal' onclick='self.history.back()'>Kembali</button>
                    <button type='submit' name='submit' class='btn btn-primary pull-right' onclick=\"return alert('Data berhasil diubah.')\">Simpan</button>
              </div>
            </div>
          </div>
          <div style='clear:both'></div>"; 
      break;  
    }
  }else{
       echo akses_salah();
  }
}
?>