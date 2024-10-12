<?php
$cek=umenu_akses("?module=pengguna",$_SESSION['sessid']);
if($cek==1 OR $_SESSION['leveluser']=='admin'){
echo "<li><a href='?module=pengguna'><i class='fa fa-circle-o'> </i> Pengguna</a></li>";
}

$cek=umenu_akses("?module=ms_pel",$_SESSION['sessid']);
if($cek==1 OR $_SESSION['leveluser']=='admin'){
echo "<li><a href='?module=ms_pel'><i class='fa fa-circle-o'> </i> Jenis Pelatihan</a></li>";
}

$cek=umenu_akses("?module=peserta",$_SESSION['sessid']);
if($cek==1 OR $_SESSION['leveluser']=='admin'){
echo "<li><a href='?module=peserta'><i class='fa fa-circle-o'> </i> Pegawai</a></li>";
}elseif($cek==1 OR $_SESSION['leveluser']=='user'){
echo "<li><a href='?module=peserta&act=edit&id=$users[nip]'><i class='fa fa-circle-o'> </i> Pegawai</a></li>";
}

?>
