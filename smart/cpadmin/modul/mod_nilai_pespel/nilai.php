<?php
session_start();
if (trim($_SESSION['leveluser'])==''){
  echo "<script>document.location='index.php';</script>";
}else{
  $cek=user_akses($_GET['module'],$_SESSION['sessid']);
  if($_SESSION['leveluser']=='user' OR $_SESSION['leveluser']=='admin'){
    $aksi="modul/mod_nilai_pespel/aksi_nilai_pespel.php";

    switch($_GET['act']){
      default:
       echo "<div class='example-modal' style='width: 100%;'>

        <div class='modal' style='width: 100%;'>

          <div class='modal-dialog modal-lg' style='width: 100%;'>

            <div class='modal-content' style='width: 100%;'>

              <div class='modal-header'>

                <button type='button' class='close' data-dismiss='modal' aria-label='Close' onclick='self.history.back()'>

                  <span aria-hidden='true'>&times;</span></button>

                <h4 class='modal-title'>Pilih Pelatihan</h4>

              </div>

              <div class='modal-body'>
              <form role='form' name='form1' action='$aksi?module=nilai&act=passing' method='post' enctype='multipart/form-data' onSubmit='return validasi()'>
                <table class='table table-striped' style='width: 100%;'>  
                    <tr>

                        <td style='vertical-align: middle; width: 100px;'>Tahun</td>

                        <td style='vertical-align: middle; width: 20px;'>:</td>

                        <td class='form-inline'>

                            <select name='thn_anatomi' id='thn_anatomi' class='form-control required' style='width: 100%;'>

                                <option>[Pilih Tahun Pelatihan]</option>";
                                
$query=mysqli_query($koneksi,"SELECT * FROM pelatihan GROUP BY tahun DESC");
while($cetak=mysqli_fetch_array($query)){
$i=$cetak['tahun'];                          
                          echo "<option value='$i'>$i</option>";
} 

                          echo "</select>

                        </td>

                    </tr>   

                    <tr>

                        <td style='vertical-align: middle; width: 100px;'>Nama</td>

                        <td style='vertical-align: middle; width: 20px;'>:</td>

                        <td class='form-inline'>

                            <select name='jns_anatomi' id='jns_anatomi' class='form-control required' style='width: 100%;'>                
                                

                            </select>

                        </td>

                    </tr>                                  
                </table>
                  <div class='modal-footer'>
                    <button type='submit' class='btn btn-primary' name='submit'>Tampilkan Data</button>
                  </div
                </form>
              </div>

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