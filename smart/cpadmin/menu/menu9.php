<?php
$cek=umenu_akses("?module=pelatihan",$_SESSION['sessid']);
if($cek==1 OR $_SESSION['leveluser']=='admin' ){
echo "<li><a href='?module=pelatihan'><i class='fa fa-circle-o'> </i> Jadwal Pelatihan</a></li>";
}elseif($cek==1 OR $_SESSION['leveluser']=='user'){
echo "<li><a href='?module=pelatihan'><i class='fa fa-circle-o'> </i> Jadwal Pelatihan</a></li>";
}

$cek=umenu_akses("?module=pes_pel",$_SESSION['sessid']);
if($cek==1 OR $_SESSION['leveluser']=='admin'){
echo "<li><a href='?module=pes_pel'><i class='fa fa-circle-o'> </i> Peserta Pelatihan</a></li>";
}elseif($cek==1 OR $_SESSION['leveluser']=='user'){
echo "<li><a href='?module=pes_pel'><i class='fa fa-circle-o'> </i> Peserta Pelatihan</a></li>";
}

$cek=umenu_akses("?module=nilai",$_SESSION['sessid']);
if($cek==1 OR $_SESSION['leveluser']=='admin'){
echo "<li><a href='?module=nilai'><i class='fa fa-circle-o'> </i> Nilai Peserta Pelatihan</a></li>";
}elseif($cek==1 OR $_SESSION['leveluser']=='user'){
echo "<li><a href='?module=nilai'><i class='fa fa-circle-o'> </i> Nilai Peserta Pelatihan</a></li>";
}

?>
