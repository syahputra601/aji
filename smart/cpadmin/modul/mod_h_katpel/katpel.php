<?php
session_start();
if (trim($_SESSION['leveluser'])==''){
  echo "<script>document.location='index.php';</script>";
}else{
  $cek=user_akses($_GET['module'],$_SESSION['sessid']);
  if($_SESSION['leveluser']=='user' OR $_SESSION['leveluser']=='admin'){
    $aksi="modul/mod_h_katpel/aksi_katpel.php";

    switch($_GET['act']){
      default:
       echo "<div class='col-xs-12'>  
                  <div class='box'>
                    <div class='box-header'>
                      <h3 class='box-title'>Rekapitulasi Jumlah Pelatihan Berdasarkan Tahun</h3>
                      <form role='form' name='form1' action='grafikrekap2.php' method='post' enctype='multipart/form-data' onSubmit='return validasi()' target='_blank'>
                      <select name='thn_anatomi' id='thn_anatomi' class='form-control required' style='width: 20%;'>

                                <option>[Pilih Tahun]</option>";

$query=mysqli_query($koneksi,"SELECT * FROM pelatihan GROUP BY tahun DESC");
while($cetak=mysqli_fetch_array($query)){
$thn=$cetak['tahun'];                          
                          echo "<option value='$thn'>$thn</option>";
}                          

                          echo "</select>
                      <button type='submit' class='btn btn-primary pull-left' name='submit'>Grafik Rekap</button>
                      </form>
                      <br><br><br><br>
                      <h3 class='box-title'>Rekapitulasi Jumlah Pelatihan Berdasarkan Provinsi</h3>
                      
                    </div>
                    <div class='box-body'>
                    <table>";

$quer=mysqli_query($koneksi,"SELECT * FROM provinsi");
  while($cet=mysqli_fetch_array($quer)){
    echo "<tr>
          <div class='col-md-3 col-sm-6 col-xs-12'>
            <div class='info-box'>
              <span class='info-box-icon bg-blue'><i class='fa fa-globe'></i></span>
              <div class='info-box-content'>
                <h5>Provinsi $cet[provinsi]</h5>";
                $jmla = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pelatihan WHERE propinsi='$cet[provinsi]'"));
//validasi pelatihan
if($jmla!='')
{
  echo "<span class='info-box-number'>$jmla Pelatihan</span>";
}else{
  echo "<span class='info-box-number'>Tidak ada</span>";
}
        echo "</div>
            </div>
          </div>
          </tr>";
  }
      echo "</table>

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
