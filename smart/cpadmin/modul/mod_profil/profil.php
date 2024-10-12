<?php
session_start();
if (trim($_SESSION['leveluser'])==''){
  echo "<script>document.location='index.php';</script>";
}else{
  $aksi="modul/mod_profil/aksi_profil.php";
  switch($_GET['act']){

  default:
  if ($_SESSION['leveluser']=='admin'){
  echo "<div class='col-xs-12'>  
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>Semua Users</h3>
                  <a class='pull-right btn btn-primary btn-sm' href='?module=profil&act=tambah'>Tambahkan Data</a>
                </div>
                <div class='box-body'>
                  <table id='example1' class='table table-bordered table-striped'>
                    <thead>
                      <tr>
                       <th width='20px'>No</th> 
                       <th>Username</th> 
                       <th>Nama Lengkap</th> 
                       <th>Email</th>
                       <th>Foto</th>
                       <th>Level</th> 
                       <th width='50px'>Action</th>
                      </tr> 
                     </thead>
                     <tbody>";

    if ($_SESSION['leveluser']=='admin'){
      $tampil = mysqli_query($koneksi, "SELECT * FROM users ORDER BY id_session DESC");
    }else{
      $tampil = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$_SESSION[namauser]'");
    }
  
    $no = 1;
    while($r=mysqli_fetch_array($tampil)){
     echo "<tr> 
             <td width=50><center>$no</center></td>
             <td>$r[username]</td>
             <td>$r[nama_lengkap]</td>
             <td><a href=mailto:$r[email]>$r[email]</a></td>";
               if (empty($r['foto'])){
                echo "<td><center><img class='img-thumbnail img-circle' src='../foto_user/blank.png' width=50></center></td>";
               }else{
                echo "<td><center><img class='img-thumbnail img-circle' src='../foto_user/$r[foto]' width=50></center></td>";
               }
      echo "<td align=center>$r[level]</td>
            <td valign=middle>
              <a class='btn btn-success btn-xs' title='Edit Data' href='?module=profil&act=edit&id=$r[id_session]'><span class='glyphicon glyphicon-edit'></span></a>
              <a class='btn btn-danger btn-xs' title='Delete Data' href='$aksi?module=profil&act=hapus&id=$r[id_session]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
            </td> 

          </tr> ";
      $no++; 
    }
  
   echo "</tbody></table> ";
   }
   break;

  
  case "tambah":
  if ($_SESSION['leveluser']=='admin'){
  echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah User Baru</h3>
                </div>
              <div class='box-body'>
              <form class='form-horizontal' role='form' method=POST action='$aksi?module=profil&act=input' enctype='multipart/form-data'>
                <div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <tr><th width='120px' scope='row'>Username</th> <td><input type='text' class='form-control' name='username' required></td></tr>
                    <tr><th scope='row'>Password</th>               <td><input type='password' class='form-control' name='password' required></td></tr>
                    <tr><th scope='row'>Nama Lengkap</th>           <td><input type='text' class='form-control' name='nama_lengkap' required></td></tr>
                    <tr><th scope='row'>NIP</th>                    <td><input type='text' class='form-control' name='nip' required></td></tr>
                    <tr><th scope='row'>Alamat Email</th>           <td><input type='email' class='form-control' name='email' required></td></tr>
                    <tr><th scope='row'>No Telpon</th>              <td><input type='text' class='form-control' name='no_telp' required></td></tr>
                    <tr><th scope='row'>Upload Foto</th>            <td><input type='file' class='form-control' name='fupload' required></td></tr>";
                    echo "</div></td></tr>
                  </tbody>
                  </table>
                </div>
              </div>
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info' onclick=\"return alert('Data berhasil disimpan.')\">Tambahkan</button> 
                    <button type='button' class='btn btn-default pull-right' data-dismiss='modal' onclick='self.history.back()'>Kembali</button>
              </div>
            </div>
          </div>
          <div style='clear:both'></div>"; 
   }
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
              <form role='form' name='form1' method=POST action='$aksi?module=profil&act=update' enctype='multipart/form-data'>
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
                        <td><input type='password' class='form-control' name='password' /></td>
                    </tr>
                  </table>
                  <table class='table table-striped' style='width: 100%;'>
                    <tr>
                        <th style='background-color: #dadada;' colspan='3'>Profile</th>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Nip</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='text' class='form-control' name='nip' value='$r[nip]' required/></td>
                    </tr>
                    <tr>
                        <td style='vertical-align: middle; width: 100px;'>Nama</td>
                        <td style='vertical-align: middle; width: 20px;'>:</td>
                        <td><input type='text' class='form-control' name='nama_lengkap' value='$r[nama_lengkap]' required/></td>
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
                    <button type='submit' name='submit' class='btn btn-primary' onclick=\"return alert('Data berhasil disimpan.')\">Simpan</button>
                    <button type='button' class='btn btn-default pull-right' data-dismiss='modal' onclick='self.history.back()'>Kembali</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>";

  break;
  }
}
?>