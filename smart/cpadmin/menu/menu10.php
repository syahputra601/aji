<?php
$cek=umenu_akses("?module=observasi",$_SESSION['sessid']);
if($cek==1 OR $_SESSION['leveluser']=='admin'){
echo "<li><a href='?module=rekap_nilai'><i class='fa fa-circle-o'> </i> Rekapitulasi Nilai</a></li>";
}elseif($cek==1 OR $_SESSION['leveluser']=='user'){
echo "<li><a href='?module=nilai_serPel&act=nilai_pegawai'><i class='fa fa-circle-o'> </i> Nilai Pelatihan</a></li>";
}

$cek=umenu_akses("?module=ppt",$_SESSION['sessid']);
if($cek==1 OR $_SESSION['leveluser']=='admin'){
echo "<li><a href='?module=katpel'><i class='fa fa-circle-o'> </i> Rekap Jumlah Pelatihan</a></li>";
}elseif($cek==1 OR $_SESSION['leveluser']=='user'){
echo "<li><a href='?module=katpel'><i class='fa fa-circle-o'> </i> Rekap Jumlah Pelatihan</a></li>";
}

?>
