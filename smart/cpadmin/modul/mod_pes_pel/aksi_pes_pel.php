<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<script>document.location='index.php';</script>";
}else{
  
include "../../../../config/koneksi.php";
include "../../../../config/fungsi_thumb.php";

$module=$_GET['module'];
$act=$_GET['act'];
$jns=$_POST['jns_anatomi'];

// Input user
if ($module=='pes_pel' AND $act=='passing'){

  header('location:../../media.php?module=serPel&id='.$jns);
  
}

}
?>
