<?php
session_start();
if (trim($_SESSION['leveluser'])==''){
  echo "<script>document.location='index.php';</script>";
}else{
  $cek=user_akses($_GET['module'],$_SESSION['sessid']);
  if($cek==1 OR $_SESSION['leveluser']=='admin'){

$aksi="modul/mod_pengguna/aksi_pengguna.php";
switch($_GET['act']){
 default:
 echo "<div class='col-xs-12'>  
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'><i class='fa fa-user'></i> Data Pengguna</h3>
                  <a class='pull-right btn btn-primary btn-sm' href='?module=pengguna&act=tambah'>Tambahkan Data</a>
                </div>
                <div class='box-body'>
          
          <div class='alert alert-info'>- Apabila AKTIF = Y, maka Akun User Telah Aktif. <br />
                  - Apabila AKTIF = N, maka Akun User Tidak Aktif.</div>";
?>
          <br />
          <br />
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
        <th width="30px">NO</th>
        <th width="100px">USERNAME</th>
        <th width="160px">NAMA</th>
                <th width="280px">EMAIL</th>
                <th width="50px">Aktif</th>
                <th width="50px">Bergabung</th>
                <th width="50px">LEVEL</th>
                <th width="80px"></th>
              </tr>
            </thead>
<?php
              echo  "<tbody>";

                    $no = 1;
                    if ($_SESSION['leveluser']=='admin'){
                      $tampil = mysqli_query($koneksi, "SELECT * FROM users ORDER BY username ASC");
                    }else{
                      $tampil = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$_SESSION[namauser]' ORDER BY username ASC");
                    }
                    $no = $posisi+1;
                    while ($r=mysqli_fetch_array($tampil)){
                    
                   echo "<tr>
                            <td>$no</td>
                            <td><a title='User Log' href='?module=pengguna&act=userlog&id=$r[username]'>$r[username]</a></td>
                            <td>$r[nama_lengkap]</td>
                            <td>$r[email]</td>
                            <td>$r[aktif]</td>
                            <td>$r[bergabung]</td>
                            <td>$r[level]</td>
                            <td valign=middle>
                            <a class='btn btn-success btn-xs' title='Edit Data' href='?module=pengguna&act=edit&id=$r[id_session]'><span class='glyphicon glyphicon-edit'></span></a>
                            <a class='btn btn-danger btn-xs' title='Delete Data' href='$aksi?module=pengguna&act=hapus&id=$r[id_session]&files=$r[foto]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-edit'></span></a>
                            <a class='btn btn-primary btn-xs' title='Edit Status' href='?module=pengguna&act=edstat&id=$r[id_session]'><span class='glyphicon glyphicon-edit'></span></a>
                            </td> ";

                                    // <a class='btn btn-success btn-xs' title='Edit Data' href='?module=pengguna&act=edit&id=$row[No]'><span class='glyphicon glyphicon-edit'></span></a>
                                    // <a class='btn btn-danger btn-xs' title='Delete Data' href='?module=pengguna&hapus=$row[No]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                    echo "</tr>";   
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
                <h4 class='modal-title'><i class='fa fa-plus'></i> Tambah Pengguna</h4>
              </div>
              <div class='modal-body'>
              <form role='form' name='form' method=POST action='$aksi?module=pengguna&act=input' enctype='multipart/form-data'>
                  <table class='table table-striped' style='width: 100%;'>
                    <input type=hidden name=id value=$r[id_session]>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Username</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='text' class='form-control' name='username' value='' required/></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Password</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='password' class='form-control' name='password' value='' required/></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Email</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='email' class='form-control' name='email' value='' required/></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Nip</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='text' class='form-control' name='nip' id='nip' value='' required/></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Nama</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input readonly='true' type='text' class='form-control' name='nama_lengkap' id='nama_lengkap' value='' required/></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Level</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td>
                            <input type='radio' name='status' value='user' checked> User &nbsp; 
                            <input type='radio' name='status' value='admin'> Admin
                        </td>
                    </tr>
                  </table>
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info pull-right' onclick=\"return alert('Data berhasil disimpan.')\">Simpan</button>
                    <button type='button' class='btn btn-default' >Kembali</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>";
   break;
    
    
  case "edit":
   $r=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM users WHERE id_session='$_GET[id]'"));
    echo "<div class='example-modal'>
        <div class='modal'>
          <div class='modal-dialog modal-lg'>
            <div class='modal-content'>
              <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close' onclick='self.history.back()'>
                  <span aria-hidden='true'>&times;</span></button>
                <h4 class='modal-title'><i class='fa fa-user'></i> Profile</h4>
              </div>
              <div class='modal-body'>
              <form role='form' name='form1' method=POST action='$aksi?module=pengguna&act=update' enctype='multipart/form-data'>
                  <table class='table table-striped' style='width: 100%;'>
                    <input type=hidden name=id value=$r[id_session]>
                    <tr>
                        <th style='background-color: #dadada;' colspan='3'>Akun</th>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Email</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='email' class='form-control' name='email' value='$r[email]' required/></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle;'>Password</td>
                        <td style='vertical-align: middle;'>:</td>
                        <td><input type='password' class='form-control' name='password' required/></td>
                    </tr>
                  </table>
                  <table class='table table-striped' style='width: 100%;'>
                    <tr>
                        <th style='background-color: #dadada;' colspan='3'>Profile</th>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Nip</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='text' class='form-control' name='nip' id='nip' value='$r[nip]' required/></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Nama</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input readonly='true' type='text' class='form-control' id='nama_lengkap' name='nama_lengkap' value='$r[nama_lengkap]' required/></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle;'>No Telp</td>
                        <td style='vertical-align: middle;'>:</td>
                        <td><input type='text' class='form-control' name='no_telp' value='$r[no_telp]' required/></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle;'>Foto</td>
                        <td style='vertical-align: middle;'>:</td>
                        <td><img src='../../foto_user/$r[foto]' style='width: 236px; height: 315px;'  /><input type='file' name='fupload'><style class='help-block inline'>File foto harus bertipe *.jpeg, *.jpg, atau *.png</style><br>";
                    if ($r['foto']!=''){ echo "Foto Saat ini : <a target='_BLANK' href='../../foto_user/$r[foto]'>$r[foto]</a>"; }else{ echo "Foto Saat ini : <a target='_BLANK' href='../../foto_user/blank.png'>blank.png</a>"; } 

                    
            echo "      </td>
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

  case "edstat":
   $r=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM users WHERE id_session='$_GET[id]'"));
    echo "<div class='example-modal'>
        <div class='modal'>
          <div class='modal-dialog modal-lg'>
            <div class='modal-content'>
              <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close' onclick='self.history.back()'>
                  <span aria-hidden='true'>&times;</span></button>
                <h4 class='modal-title'><i class='fa fa-user'></i> Status</h4>
              </div>
              <div class='modal-body'>
              <form role='form' name='form1' method=POST action='$aksi?module=pengguna&act=updatestatus' enctype='multipart/form-data'>
                  <table class='table table-striped' style='width: 100%;'>
                    <input type=hidden name=id value=$r[id_session]>
                    <tr>
                        <th style='background-color: #dadada;' colspan='3'>Status Akun</th>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Aktif</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='radio' name='aktif' value='Y' checked> Ya &nbsp; <input type='radio' name='aktif' value='N'> Tidak</td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle;'>Level</td>
                        <td style='vertical-align: middle;'>:</td>
                        <td><input type='radio' name='status' value='user' checked> User &nbsp; <input type='radio' name='status' value='admin'> Admin</td>
                    </tr>
                  </table>
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info' onclick=\"return alert('Data berhasil diubah.')\">Update</button>
                    <button type='button' class='btn btn-default pull-right' onclick='self.history.back()'>Cancel</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>";
  
  break;

  case "userlog":
   $r=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM users WHERE username ='$_GET[id]'"));
    echo "<div class='col-xs-12'>  
                  <div class='box'>
                    <div class='box-header'>
                      <h3 class='box-title'>Data Aktifitas Login <b>$r[username]</b></h3>
                    </div>
                    <div class='box-body'>
                      <table id='example1' class='table table-bordered table-striped'>
                        <thead>
                          <tr>
                            <th width='10px'>No</th>
                            <th width='30px'>Username</th>
                            <th width='300px'>Tanggal</th>
                            <th width='300px'>Jam In</th>
                            <th width='100px'>Jam Out</th>
                            <th width='100px'>Status</th>
                          </tr>
                        </thead>
                        <tbody>";
                        $no=1;
                        $tampil=mysqli_query($koneksi, "SELECT * FROM users_log WHERE Username='$_GET[id]' order by Id_userlog DESC");
                        while ($row = mysqli_fetch_array($tampil)){
                        echo "<tr><td>$no</td>
                                  <td>$row[Username]</td>
                                  <td>$row[Tanggal]</td>
                                  <td>$row[Jamin]</td>
                                  <td>$row[Jamout]</td>";
                                  if($row[Status]=='offline')
                                  {
                                  echo"<td style='background-color:red' align=center>OFFLINE</td>";
                                  }      
                                  else
                                  {
                                  echo"<td class='bg-green' align=center>ONLINE</td>";
                                  }       
                        echo  "</tr>";
                          $no++;
                        }

                      echo "</tbody>
                    </table>
                  </div>
              </div>
            </div>";
  
  break;

  }
  }else{
     echo akses_salah();
}
}
