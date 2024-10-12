<?php

include "../../config/koneksi.php";

$x = @$_GET['x'];
$id = @$_GET['id'];

//Menampilkan Proses Provinsi
if($x==1){
	echo "<option>[Pilih Propinsi]</option>";
	$quer=mysqli_query($koneksi,"SELECT * FROM provinsi");
	while($cet=mysqli_fetch_array($quer)){
		?>
		<option value="<?php echo $cet[1]?>"><?php echo $cet[1]?></option>
		<?php
	}
}

//Menampilkan Proses untuk tampil kabupaten
if($x==2){
	$quer=mysqli_query($koneksi,"SELECT * FROM kabupaten WHERE propinsi='$id'");
	while($cet=mysqli_fetch_array($quer)){
		?>
		<option value="<?php echo $cet[3]?>"><?php echo $cet[3]?></option>
		<?php
	}
}

//Menampilkan Proses Provinsi Pengadilan
if($x==3){
	echo "<option>[Pilih Propinsi]</option>";
	$quer=mysqli_query($koneksi,"SELECT * FROM provinsi");
	while($cet=mysqli_fetch_array($quer)){
		?>
		<option value="<?php echo $cet[1]?>"><?php echo $cet[1]?></option>
		<?php
	}
}

//Menampilkan Proses untuk tampil Instansi
if($x==4){
	$quer=mysqli_query($koneksi,"SELECT * FROM instansi WHERE propinsi='$id'");
	while($cet=mysqli_fetch_array($quer)){
		?>
		<option value="<?php echo $cet[2]?>"><?php echo $cet[2]?></option>
		<?php
	}
}

//Menampilkan Proses untuk tampil Anatomi
if($x==5){
	$quer=mysqli_query($koneksi,"SELECT * FROM pelatihan WHERE tahun ='$id'");
	while($cet=mysqli_fetch_array($quer)){
		?>
		<option id="nama" name="nama" value="<?php echo $cet[0]?>">
			<?php 
			echo $cet[2]." di ".$cet[3].", ".$cet[5]."-".$cet[4]." (".$cet[7]." s.d. ".$cet[8].")";
			?>
		</option>
		<?php
	}
}

// PROSES Menampilkan NIP/NRP SECARA OTOMATIS
if($x==6){
	$nip  = $id;
	$sql = "SELECT * FROM peserta WHERE Nip ='$nip'";
	$result = mysqli_query($koneksi,$sql);
	$row=mysqli_fetch_array($result);
		echo "$row[3],$row[5],$row[8],$row[15],$row[6],$row[7],$row[12]";
}

//Menampilkan Proses Jenis Pelatihan
if($x==7){
echo "<option>[Pilih Jenis Pelatihan]</option>";
	$quer=mysqli_query($koneksi,"SELECT * FROM masterpelatihan");
	while($cet=mysqli_fetch_array($quer)){
		?>
		<option value="<?php echo $cet[1]?>"><?php echo $cet[1]?></option>
		<?php
	}
}

//Menampilkan Proses untuk tampil Nama Pelatihan
if($x==8){
	$quer=mysqli_query($koneksi,"SELECT * FROM pelatihan WHERE Jenis='$id'");
	while($cet=mysqli_fetch_array($quer)){
		?>
		<option value="<?php echo $cet[0]?>"><?php echo $cet[2]?></option>
		<?php
	}
}

// //Menampilkan Proses untuk tampil Id Pelatihan
// if($x==9){
// 	$quer=mysqli_query($koneksi,"SELECT * FROM pelatihan WHERE Nama='$id'");
// 	$cet=mysqli_fetch_array($quer);
// 	echo "$row[0]";
// }

// PROSES Menampilkan Tanggal Mulai s.d Selesai Pelatihan
if($x==9){
	$nip  = $id;
	$sql = "SELECT * FROM pelatihan WHERE Id_pelatihan ='$id'";
	$result = mysqli_query($koneksi,$sql);
	$row=mysqli_fetch_array($result);
		echo "$row[0],$row[7],$row[8]";
}


// PROSES MEMUNCULKAN NAMA secara otomatis MEMALUI NIP
if($x==10){
	$data=mysqli_query($koneksi,"SELECT * FROM peserta WHERE Nip='$id'");
		$out=mysqli_fetch_array($data);
		{
		echo "$out[3]";
		}
}
//AKHIR PROSES MEMUNCULKAN NAMA secara otomatis MEMALUI NIP


?>