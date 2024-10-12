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
if ($module=='nilai' AND $act=='passing'){

  header('location:../../media.php?module=nilai_serPel&id='.$jns);
  
}

 //hapus module
elseif($module=='peserta' AND $act=='hapus'){
  $id=$_GET['id'];
  mysqli_query($koneksi, "DELETE FROM peserta WHERE Nip='$id'");
  header('location:../../media.php?module='.$module);
}

}
?>
