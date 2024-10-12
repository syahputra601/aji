 
  <?php
  $aksi="modul/mod_identitas/aksi_identitas.php";
  switch($_GET[act]){
  // Tampil identitas
  default:
    $record  = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM identitas LIMIT 1"));
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Identitas Website</h3>
                </div>
              <div class='box-body'>
              <form class='form-horizontal' role='form' method=POST enctype='multipart/form-data' action=$aksi?module=identitas&act=update>
              <input type=hidden name=id value=$record[id_identitas]>
              <div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <tr><th width='120px' scope='row'>Nama Website</th>   <td><input type='text' class='form-control' name='nama_website' value='$record[nama_website]'></td></tr>
                    <tr><th scope='row'>Email</th>                        <td><input type='text' class='form-control' name='email' value='$record[email]'></td></tr>
                    <tr><th scope='row'>Domain</th>                 <td><input type='text' class='form-control' name='url' value='$record[url]'></td></tr>
                    <tr><th scope='row'>Sosial Network</th>               <td><input type='text' class='form-control' name='facebook' value='$record[facebook]'></td></tr>
                    <tr><th scope='row'>No. Rekening</th>                 <td><input type='text' class='form-control' name='rekening' value='$record[rekening]'></td></tr>
                    <tr><th scope='row'>No Telpon</th>                    <td><input type='text' class='form-control' name='no_telp' value='$record[no_telp]'></td></tr>
                    <tr><th scope='row'>Meta Deskripsi</th>               <td><input type='text' class='form-control' name='meta_deskripsi' value='$record[meta_deskripsi]'></td></tr>
                    <tr><th scope='row'>Meta Keyword</th>                 <td><input type='text' class='form-control' name='meta_keyword' value='$record[meta_keyword]'></td></tr>
                    <tr><th scope='row'>Google Maps</th>                  <td><textarea class='form-control' name='maps' style='height:80px'>$record[maps]</textarea></td></tr>
                    <tr><th scope='row'>Ganti Favicon</th>                      <td><input type='file' class='form-control' name='fupload' value='$record[favicon]'>
                    <hr style='margin:2px'>Favicon Saat ini : <img src=../$record[favicon] width=30></td></tr>
                  </tbody>
                  </table>
                </div>
              </div>
              <div class='box-footer'>
                    <button type='submit' name='upload' class='btn btn-info'>Update</button>
                    <a href='index.php'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div>";
    break;  
  }
  ?>