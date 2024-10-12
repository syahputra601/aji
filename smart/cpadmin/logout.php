<?php
	include "../../config/koneksi.php";
 	include "../../config/library.php";
  	include "../../config/fungsi_indotgl.php";
$jamout = date("H:i:s");
  session_start();

//Untuk Update data Aktivitas Pengguna

mysqli_query($koneksi, "UPDATE users_log SET Jamout='$jamout',
                              Status='offline'
  WHERE Username = '$_SESSION[namauser]' AND Jamout='logged' AND Status='online'");

$id_saya = session_id();
//Untuk Hapus Id Session data Online Users
mysqli_query($koneksi, "DELETE FROM users_online WHERE Id_session='".$id_saya."'");

  session_destroy();
  
  echo "<script>window.alert('Anda berhasil logout.');
				window.location='index.php'</script>";
	die();
		

?>