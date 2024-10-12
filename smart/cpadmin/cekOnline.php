<?php
  include "../../config/koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM users_online");

$hitung = mysqli_num_rows($query);

echo $hitung;
?>