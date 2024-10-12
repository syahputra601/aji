<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<script>document.location='index.php';</script>";
}else{
  
include "../../../../config/koneksi.php";
include "../../../../config/fungsi_thumb.php";

$module=$_GET['module'];
$act=$_GET['act'];
$np=$_POST['nip'];

// Tampil hasil passing Sertifikat Pelatihan
if ($module=='katpel' AND $act=='passing'){

  header('location:../../media.php?module=serti&act=fikat&nip='.$np);
  
}

}
?>
