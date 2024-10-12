<?php

  include "../../config/koneksi.php";

session_start();

$id_saya = session_id();

$query = mysqli_query($koneksi, "SELECT Id_session FROM users_online WHERE Id_session = '".$id_saya."'");

$query2 = mysqli_fetch_array($query);

if ($query2 == null)
{
	mysqli_query($koneksi, "INSERT INTO users_online (Id_online, Id_session) VALUES ('', '$id_saya')");
}


?>