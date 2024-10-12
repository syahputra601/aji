<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<head>
<title>Grafik Penduduk Indonesia</title>
<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="js/highcharts.js" type="text/javascript"></script>
<script src="js/exporting.js" type="text/javascript"></script>
<script type="text/javascript">
	var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'column'
         },   
         title: {
            <?php
            $thn = $_POST['thn_anatomi'];
            ?>
            text: 'Grafik Rekapitulasi Jumlah Pelatihan Administrasi PKH Pada Tahun <?php echo $thn ?>'
         },
         xAxis: {
            categories: ['Provinsi']
         },
         yAxis: {
            title: {
               text: 'Jumlah Pelatihan'
            }
         },
              series:             
            [
<?php      
include "../../config/koneksi.php";
$thn = $_POST['thn_anatomi'];
$sql   = "SELECT * from pelatihan WHERE tahun = '$thn' group by propinsi"; // file untuk mengakses ke tabel database
$query = mysqli_query($koneksi, $sql) or die(mysqli_error());
while($ambil = mysqli_fetch_array($query)){
   $dprovinsi = $ambil[propinsi];

   $jumlahx1 = mysqli_query($koneksi, "SELECT * FROM pelatihan WHERE tahun ='$thn' AND propinsi ='$dprovinsi'");
   $jumlahx2 = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pelatihan WHERE tahun ='$thn' AND propinsi ='$dprovinsi'"));           
	
	  ?>
	  {
		  name: '<?php echo $dprovinsi; ?>',
		  data: [<?php echo $jumlahx2; ?>]
	  },
	  <?php } ?>
]
});
});	
</script>
</head>
<body>
<!-- fungsi yang di tampilkan dibrowser  -->
<div id="container" style="min-width: 50px; height: 400px; margin: 0 auto"></div>

</body>
</html>
