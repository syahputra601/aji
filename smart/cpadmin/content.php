   <?php
   include "../../config/library.php";
   include "../../config/fungsi_combobox.php";
   include "../../config/class_paging.php";

// Bagian Home
  if ($_GET['module']=='home'){
    include "view_home.php";
  }

  // Bagian User
  elseif ($_GET['module']=='user'){
    if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'  OR $_SESSION['leveluser']=='kontributor'){
      include "modul/mod_users/users.php";
    }
  }

  // Bagian Hubungi Kami
  elseif ($_GET['module']=='hubungi'){
     if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
      include "modul/mod_hubungi/hubungi.php";
    }
  }

  // Bagian Video
  elseif ($_GET['module']=='video'){
      if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
      include "modul/mod_video/video.php";
    }
  }

  // Bagian Identitas Website
  elseif ($_GET['module']=='identitas'){
     if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
      include "modul/mod_identitas/identitas.php";
    }
  }

  // Bagian Pengguna
  elseif ($_GET['module']=='pengguna'){
    if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user' OR $_SESSION['leveluser']=='kontributor'){
      include "modul/mod_pengguna/pengguna.php";                            
    }
  }  

  // Bagian Master Pelatihan
  elseif ($_GET['module']=='ms_pel'){
    if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user' OR $_SESSION['leveluser']=='kontributor'){
      include "modul/mod_ms_pel/ms_pel.php";                            
    }
  }

  // Bagian Pelatihan
  elseif ($_GET['module']=='pelatihan'){
    if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user' OR $_SESSION['leveluser']=='kontributor'){
      include "modul/mod_pelatihan/pelatihan.php";                            
    }
  } 

  // Bagian Pserta -> Pelatihan
  elseif ($_GET['module']=='peserta_pelatihan'){
    if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user' OR $_SESSION['leveluser']=='kontributor'){
      include "modul/mod_peserta_pelatihan/peserta_pelatihan.php";                            
    }
  }

  // Bagian Peserta
  elseif ($_GET['module']=='peserta'){
    if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user' OR $_SESSION['leveluser']=='kontributor'){
      include "modul/mod_peserta/peserta.php";                            
    }
  } 

  // Bagian Peserta Pelatihan
  elseif ($_GET['module']=='pes_pel'){
    if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user' OR $_SESSION['leveluser']=='kontributor'){
      include "modul/mod_pes_pel/pes_pel.php";                            
    }
  }

  // Bagian Hasil Observasi
  elseif ($_GET['module']=='observasi'){
    if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user' OR $_SESSION['leveluser']=='kontributor'){
      include "modul/mod_h_observasi/observasi.php";                            
    }
  }

  // Bagian Hasil Observasi
  elseif ($_GET['module']=='katpel'){
    if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user' OR $_SESSION['leveluser']=='kontributor'){
      include "modul/mod_h_katpel/katpel.php";                            
    }
  } 

  // Bagian profil
  elseif ($_GET['module']=='profil'){
    if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user' OR $_SESSION['leveluser']=='kontributor'){
      include "modul/mod_profil/profil.php";                            
    }
  }

  // Bagian Loop Pendidikan Formal
  elseif ($_GET['module']=='loop'){
    if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user' OR $_SESSION['leveluser']=='kontributor'){
      include "modul/mod_loop/loop.php";                            
    }
  }

  // Bagian Loop Riwayat Pekerjaan
  elseif ($_GET['module']=='mt'){
    if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user' OR $_SESSION['leveluser']=='kontributor'){
      include "modul/mod_mt/mt.php";                            
    }
  }

  // Bagian Loop Pendidikan Informal
  elseif ($_GET['module']=='lat'){
    if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user' OR $_SESSION['leveluser']=='kontributor'){
      include "modul/mod_lat/lat.php";                            
    }
  }

  // Bagian serPel
  elseif ($_GET['module']=='serPel'){
    if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user' OR $_SESSION['leveluser']=='kontributor'){
      include "modul/mod_serPel/serPel.php";                            
    }
  }

  // Bagian XLS
  elseif ($_GET['module']=='laporan'){
    if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user' OR $_SESSION['leveluser']=='kontributor'){
      include "modul/laporan/xls_peserta_pelatihan.php";                            
    }
  }

  // Bagian register
  elseif ($_GET['module']=='serti'){
    if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user' OR $_SESSION['leveluser']=='kontributor'){
      include "modul/mod_sertifikat/sertifikat.php";                            
    }
  }


  // Bagian register
  elseif ($_GET['module']=='tampil_obs'){
    if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user' OR $_SESSION['leveluser']=='kontributor'){
      include "modul/mod_tampil_obs/tampil_obs.php";                            
    }
  }  

  // Bagian Nilai Peserta Pelatihan
  elseif ($_GET['module']=='nilai'){
    if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user' OR $_SESSION['leveluser']=='kontributor'){
      include "modul/mod_nilai_pespel/nilai.php";                            
    }
  }

  // Bagian Nilai Peserta Pelatihan
  elseif ($_GET['module']=='nilai_serPel'){
    if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user' OR $_SESSION['leveluser']=='kontributor'){
      include "modul/mod_nilai_serPel/nilai_serPel.php";                            
    }
  }

  // Bagian Rekap Nilai Peserta Pelatihan
  elseif ($_GET['module']=='rekap_nilai'){
    if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user' OR $_SESSION['leveluser']=='kontributor'){
      include "modul/mod_rekap_nilaipespel/rekap_nilai.php";                            
    }
  }



// Apabila modul tidak ditemukan
else{
  echo "<p><b>MODUL BELUM ADA ATAU BELUM LENGKAP</b></p>";
}


?>