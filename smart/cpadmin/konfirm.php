<?php
  include "../../config/koneksi.php";

	$kode = $_GET['kode'];
	$username = $_GET['username'];


	$query = mysqli_query($koneksi, "UPDATE users SET aktif = 'Y' WHERE kode = '".$kode."'") or die (mysqli_error());

	if($query) {
		echo "Akun dengan username <strong>".$username."</strong> telah diaktifkan.<br>";
		echo "Klik <a href='http://aji.informatikakomputer352.com/smart/cpadmin/'>disini</a> untuk login.";
	} else {
		echo "Gagal diaktifkan";
	}
?>