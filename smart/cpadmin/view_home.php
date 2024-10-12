<?php

if (trim($_SESSION['leveluser'])=='admin'){

if ($_GET['module']=='home'){
echo "<div class='box box-default color-palette-box'>
        <div class='box-header with-border'>
            <h3 class='box-title'><i class='fa fa-dashboard'></i> Dashboard</h3>
        </div>
        <div class='box-body'>
            <div class='row'>
                <div class='col-sm-12 col-md-12'>
                    <div class='callout callout-info'>
                    <h4>Selamat datang, <b>$users[nama_lengkap]</b></h4>    
                    <p>Anda berada dalam halaman administrator PKH. Silahkan pilih menu di samping untuk melanjutkan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

          <a style='color:#000' href='media.php?module=peserta'>
          <div class='col-md-3 col-sm-6 col-xs-12'>
            <div class='info-box'>
              <span class='info-box-icon bg-blue'><i class='fa fa-user'></i></span>
              <div class='info-box-content'>
                <span class='info-box-text'>Pegawai</span>";
                $jmla = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM peserta"));
                echo "<span class='info-box-number'>$jmla</span>
              </div>
            </div>
          </div>
          </a>

          <a style='color:#000' href='media.php?module=ms_pel'>
          <div class='col-md-3 col-sm-6 col-xs-12'>
            <div class='info-box'>
              <span class='info-box-icon bg-green'><i class='fa fa-file'></i></span>
              <div class='info-box-content'>
                <span class='info-box-text'>Jenis Pelatihan</span>";
                $jmlb = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM masterpelatihan"));
                echo "<span class='info-box-number'>$jmlb</span>
              </div>
            </div>
          </div>
          </a>

          <a style='color:#000' href='media.php?module=pelatihan'>
          <div class='col-md-3 col-sm-6 col-xs-12'>
            <div class='info-box'>
              <span class='info-box-icon bg-yellow'><i class='fa fa-files-o'></i></span>
              <div class='info-box-content'>
                <span class='info-box-text'>Jadwal Pelatihan</span>";
                $jmlc = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pelatihan"));
                echo "<span class='info-box-number'>$jmlc</span>
              </div>
            </div>
          </div>
          </a>

          <a style='color:#000' href='media.php?module=pengguna'>
          <div class='col-md-3 col-sm-6 col-xs-12'>
            <div class='info-box'>
              <span class='info-box-icon bg-red'><i class='fa fa-users'></i></span>
              <div class='info-box-content'>
                <span class='info-box-text'>Pengguna</span>";
                $jmld = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM users"));
                echo "<span class='info-box-number'>$jmld</span>
              </div>
            </div>
          </div>
          </a>

          <a style='color:#000'>
          <div class='col-md-3 col-sm-6 col-xs-12'>
            <div class='info-box'>
              <span class='info-box-icon bg-red'><i class='fa fa-users'></i></span>
              <div class='info-box-content'>
                <span class='info-box-text'>Pengguna Online</span>
                <span class='info-box-number' id='jumlahOnline'></span>
              </div>
            </div>
          </div>
          </a>

            <div class='col-xs-12'>  
                  <div class='box'>
                    <div class='box-header'>
                      <h3 class='box-title'>Data Aktifitas Pengguna Online</h3>
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
                        $tampil=mysqli_query($koneksi, "SELECT * FROM users_log WHERE Status='online' order by Username");
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
            </div>
          ";
}

}else{
    echo "<div class='col-md-6'>
          <div class='box'>
            <div class='box-header'>
              <h3 class='box-title'>Selamat Datang di Halaman $users[level]</h3>
            </div>
            <div class='box-body'>
              <p>Silahkan klik menu pilihan yang berada di sebelah kiri untuk mengelola Tulisan anda pada web ini, berikut informasi akun anda saat ini : </p>
              <dl class='dl-horizontal'>
                <dt>Username</dt>
                <dd>$users[username]</dd>

                <dt>Password</dt>
                <dd>***********</dd>

                <dt>Nip</dt>
                <dd>$users[nip]</dd>

                <dt>Nama Lengkap</dt>
                <dd>$users[nama_lengkap]</dd>

                <dt>Alamat Email</dt>
                <dd>$users[email]</dd>

                <dt>No. Telpon</dt>
                <dd>$users[no_telp]</dd>

                <dt>Level</dt>
                <dd>$users[level]</dd>

              </dl>
              <div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='icon fa fa-info'></i> Info Penting!</h4>
                Diharapkan informasi akun sesuai dengan identitas pada Kartu Pengenal anda, Untuk Mengubah informasi Profile anda klik <a href='?module=profil&act=edit&id=$_SESSION[sessid]'>disini</a>.
              </div>
            </div>
          </div>
        </div>

 
          <div class='col-md-3 col-sm-6 col-xs-12'>
            <div class='info-box'>
              <span class='info-box-icon bg-blue'><i class='fa fa-user'></i></span>
              <div class='info-box-content'>
                <span class='info-box-text'>Jumlah <br>Pegawai</span>";
                $jmla = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM peserta"));
                echo "<span class='info-box-number'>$jmla</span>
              </div>
            </div>
          </div>


          <div class='col-md-3 col-sm-6 col-xs-12'>
            <div class='info-box'>
              <span class='info-box-icon bg-yellow'><i class='fa fa-files-o'></i></span>
              <div class='info-box-content'>
                <span class='info-box-text'>Jumlah <br>Jadwal Pelatihan</span>";
                $jmlc = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pelatihan"));
                echo "<span class='info-box-number'>$jmlc</span>
              </div>
            </div>
          </div>


<div class='col-xs-12'>  
                  <div class='box'>
                    <div class='box-header'>
                      <h3 class='box-title'>Rekapitulasi Jumlah Jadwal Pelatihan Berdasarkan Jenis Pelatihan</h3>
                    </div>
                    <div class='box-body'>
                      <tabel>";

$quer=mysqli_query($koneksi,"SELECT * FROM masterpelatihan");
  while($cet=mysqli_fetch_array($quer)){
    echo "<tr>
          <div class='col-md-3 col-sm-6 col-xs-12'>
            <div class='info-box'>
              <span class='info-box-icon bg-green'><i class='fa fa-file'></i></span>
              <div class='info-box-content'>
                <h5>$cet[nama]</h5>";
                $jmla = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pelatihan WHERE Jenis='$cet[nama]'"));
                echo "<span class='info-box-number'>$jmla</span>
              </div>
            </div>
          </div>
          </tr>";
  }
    echo "</table>

                  </div>
              </div>
            </div>
        ";
}