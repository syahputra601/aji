<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>KYRI | Peningkatan Kapasitas Hakim</title>
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyAq7MAxF8fVCG6nGjJwh--jXS-LgdFJ8nQ">
	</script>
    <!-- SCRIPT UNTUK ASSET GRAFIK -->
	<script type="text/javascript" src="administrator/assets/plugins/jQuery/jquery.min.js"></script>
	<script>
		
    var marker;
      function initialize() {
		  
		// Variabel untuk menyimpan informasi (desc)
		var infoWindow = new google.maps.InfoWindow;
		
		//  Variabel untuk menyimpan peta Roadmap
		var mapOptions = {
          mapTypeId: google.maps.MapTypeId.ROADMAP
        } 
		
		// Pembuatan petanya
		var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
              
        // Variabel untuk menyimpan batas kordinat
		var bounds = new google.maps.LatLngBounds();

		// Pengambilan data dari database
		<?php
			include_once('config/koneksi.php');
            $query = mysqli_query($con,"select * from data_location");
			while ($data = mysqli_fetch_array($query))
			{
				$nama = $data['desc'];
				$lat = $data['lat'];
				$lon = $data['lon'];
				
				echo ("addMarker($lat, $lon, '<b>$nama</b>');\n");                        
			}
          ?>
		  
		// Proses membuat marker 
		function addMarker(lat, lng, info) {
			var lokasi = new google.maps.LatLng(lat, lng);
			bounds.extend(lokasi);
			var marker = new google.maps.Marker({
				map: map,
				position: lokasi
			});       
			map.fitBounds(bounds);
			bindInfoWindow(marker, map, infoWindow, info);
		 }
		
		// Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, map, infoWindow, html) {
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }
 
        }
      google.maps.event.addDomListener(window, 'load', initialize);
    
	</script>
	
	
	
</head><!--/head-->

<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo" width="80%"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Home</a></li>
                        <li class="scroll"><a href="#features">Peta Pelatihan</a></li>
                        <li class="scroll"><a href="#work-process">Gallery Video</a></li>
                        <li class="scroll"><a href="#testimonial">Gallery Foto</a></li>
                        <li class="scroll"><a href="#testimonial">Testimoni</a></li>
                        <li class="scroll"><a href="#services">Pustaka</a></li>
                        <li class="scroll"><a href="#contact">Contact</a></li>
                        <!-- 
                        <li class="scroll"><a href="#blog">Blog</a></li> 
                        <li class="scroll"><a href="#get-in-touch">Contact</a></li
                        -->                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
   <br/>
    <section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<img src="images/home/1.jpg" class="girl img-responsive pray_framePhoto" alt="" width="100%"/><br/>
								</div>
								<div class="col-sm-6">
									<h2>Peningkatan Kapasitas Hakim</h2>
									<br/>
									<p>
									Puji syukur kehadirat Allah SWT, yang telah memberikan rahmat serta karunia-Nya sehingga Komisi Yudisial (KY) dapat membangun Website Peningkatan Kapasitas Hakim. Kehadiran website ini merupakan salah satu bentuk implementasi tugas KY sesuai amanat UU No.18 tahun 2011 dalam meningkatkan kapasitas hakim dan diharapkan dapat menjadi media informasi, komunikasi, dan pembelajaran bagi hakim. Semoga website ini menjadi media yang berguna khususnya bagi hakim dan pihak lain yang membutuhkan pada umumnya.
									</p>   
									   
									
								</div>
								
							</div>
							<div class="item">
								<div class="col-sm-6">
									<img src="images/home/2.jpg" class="girl img-responsive pray_framePhoto" alt="" width="100%"/><br/>
								</div>
								<div class="col-sm-6">
									<h2>Membangun kekuatan karakter untuk menjaga kemuliaan hakim</h2>
									<br/>
									<p>
									Puji syukur kehadirat Allah SWT, yang telah memberikan rahmat serta karunia-Nya sehingga Komisi Yudisial (KY) dapat membangun Website Peningkatan Kapasitas Hakim. Kehadiran website ini merupakan salah satu bentuk implementasi tugas KY sesuai amanat UU No.18 tahun 2011 dalam meningkatkan kapasitas hakim dan diharapkan dapat menjadi media informasi, komunikasi, dan pembelajaran bagi hakim. Semoga website ini menjadi media yang berguna khususnya bagi hakim dan pihak lain yang membutuhkan pada umumnya.
									</p>
									
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<img src="images/home/3.jpg" class="girl img-responsive pray_framePhoto" alt="" width="100%"/><br/>
								</div>
								<div class="col-sm-6">
									<h2>Judul Berita Peningkatan Kapasitas Hakim Komisi Yudisial</h2>
									<br/>
									<p>
									Puji syukur kehadirat Allah SWT, yang telah memberikan rahmat serta karunia-Nya sehingga Komisi Yudisial (KY) dapat membangun Website Peningkatan Kapasitas Hakim. Kehadiran website ini merupakan salah satu bentuk implementasi tugas KY sesuai amanat UU No.18 tahun 2011 dalam meningkatkan kapasitas hakim dan diharapkan dapat menjadi media informasi, komunikasi, dan pembelajaran bagi hakim. Semoga website ini menjadi media yang berguna khususnya bagi hakim dan pihak lain yang membutuhkan pada umumnya.
									</p>
									
								</div>
							</div>
							
						</div>
						
						<!-- <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a> -->
						
						
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->

    <section id="cta" class="wow fadeIn">
        <div class="container">
           

            <div class="row">
                <div class="col-sm-6">
                    <h3 class="column-title">Peserta Pelatihan</h3>
                    <strong>2010</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="85">85%</div>
                    </div>
                    <strong>2011</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="70">70%</div>
                    </div>
                    <strong>2012</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="90">90%</div>
                    </div>
                    <strong>2013</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="65">65%</div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <h3 class="column-title">Faqs</h3>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <b>KEPPH</b>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <b>Tematik</b>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!--/#cta-->

    <section id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Peta Pelatihan</h2>
            </div>
            <div class="row">
            <form action="index.php#features" method="post" enctype="multipart/form-data">
              <table width="45%" border="0" cellspacing="0" align="right">
                  <tr>
                    <td width="75%">
                        <select name="jns_anatomi" id="jns_anatomi" class="form-control select2" style="width: 100%;" required="">
                          <option selected="">Pilih Tahun</option>
                          <?php
                              for( $i= 2010 ; $i <= 2017 ; $i++ )
                                {
                          ?>
                          <option value="1"><?php echo $i; ?></option>
                          <?php
                                }
                          ?>
                          
                        </select>
                    </td>
                    <td align="right"><button type="submit" class="btn btn-primary">Tampilkan Data</button></td>
                  </tr>
                </table>
                </form>
                <br/>
                <br/>

				<div id="map-canvas" style="width: 100%; height: 706px;">
        

                </div>
            </div>
        </div>
    </section>

    <section id="work-process">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Links</h2>
            </div>

            <div class="row text-center">
                <div class="col-sm-3">
                    <a href=""><img class="img-square" src="images/testimonial/01.jpg" alt=""></a>
                        <p>Mahkamah Agung RI</p>
                </div>
                <div class="col-sm-3">
                    <a href=""><img class="img-square" src="images/testimonial/01.jpg" alt=""></a>
                        <p>Jurnal Yudisial</p>
                </div>
                <div class="col-sm-3">
                    <a href=""><img class="img-square" src="images/testimonial/01.jpg" alt=""></a>
                        <p>Analisis Putusan Hakim</p>
                </div>
                <div class="col-sm-3">
                    <a href=""><img class="img-square" src="images/testimonial/01.jpg" alt=""></a>
                        <p>Komisi Yudisial Republik Indonesia</p>
                </div>
            </div>
        </div>
    </section><!--/#work-process-->

    <section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Peserta PKH</h2>
            </div>

            <div class="row">

                <div id="map-canvas" style="width: 100%; height: 706px;"></div>

            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="testimonial">
        <div class="container">
        
          <div class="section-header">
               <h2 class="section-title text-center wow fadeInDown">Testimoni</h2>
                <p class="text-center wow fadeInDown">Video testimoni peserta Pelatihan Kapasitas Hakim </p>
            </div>
        
            <div class="row">
                <div>

                    <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                            
                                <div class="col-sm-3">
                                <p><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                                <h4>Test</h4>
                                <small>Hakim Pengadilan Negeri</small>
                                </div>
                                
                                <div class="col-sm-3">
                                <p><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                                <h4>Nama Hakim Lengkap</h4>
                                <small>Hakim Pengadilan Negeri</small>
                                </div>
                                
                                <div class="col-sm-3">
                                <p><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                                <h4>Nama Hakim Lengkap</h4>
                                <small>Hakim Pengadilan Negeri</small>
                                </div>
                                
                                <div class="col-sm-3">
                                <p><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                                <h4>Nama Hakim Lengkap</h4>
                                <small>Hakim Pengadilan Negeri</small>
                                </div>
                                
                            </div>
                            <div class="item">
                            
                                <div class="col-sm-3">
                                <p><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                                <h4>Nama Hakim Lengkap</h4>
                                <small>Hakim Pengadilan Negeri</small>
                                </div>
                                
                                <div class="col-sm-3">
                                <p><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                                <h4>Nama Hakim Lengkap</h4>
                                <small>Hakim Pengadilan Negeri</small>
                                </div>
                                
                                <div class="col-sm-3">
                                <p><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                                <h4>Nama Hakim Lengkap</h4>
                                <small>Hakim Pengadilan Negeri</small>
                                </div>
                                
                                <div class="col-sm-3">
                                <p><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                                <h4>Nama Hakim Lengkap</h4>
                                <small>Hakim Pengadilan Negeri</small>
                                </div>
                            
                            </div>
                        </div>

                        <!-- Controls -->
                        <div class="btns">
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#testimonial-->

    <section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">PUSTAKA</h2>
            </div>

            <div class="row">
                
                <div class="col-sm-4">
                    <h3 class="column-title">Karya Ilmiah</h3>
                    <strong>2010</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="85">85%</div>
                    </div>
                    <strong>2011</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="70">70%</div>
                    </div>
                    <strong>2012</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="90">90%</div>
                    </div>
                    <strong>2013</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="65">65%</div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <h3 class="column-title">Publikasi</h3>
                    <div role="tabpanel">
                        <ul class="nav main-tab nav-justified" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tab1" role="tab" data-toggle="tab" aria-controls="tab1" aria-expanded="true">Karya Ilmiah</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab2" role="tab" data-toggle="tab" aria-controls="tab2" aria-expanded="false">Publikasi</a>
                            </li>
                        </ul>
                        <div id="tab-content" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab1" aria-labelledby="tab1">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters readable English.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab2" aria-labelledby="tab2">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters readable English.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="animated-number">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Visitors</h2>
                <p class="text-center wow fadeInDown">Pengunjung Website Peningkatan Kapasitas Hakim Komisi Yudisial</p>
            </div>

            <div class="row text-center">
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="animated-number" data-digit="10" data-duration="1000"></div>
                        <strong>Visitors Today</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="animated-number" data-digit="1231" data-duration="1000"></div>
                        <strong>Visitors Online</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="animated-number" data-digit="3025" data-duration="1000"></div>
                        <strong>Total Hits</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="animated-number" data-digit="1199" data-duration="1000"></div>
                        <strong>Total Visitors</strong>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#animated-number-->

    <section id="contact" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">CONTACT US</h2>
            </div>

            <div class="row">
                
                    <div class="col-sm-5-sm-offset-8">
                            <h3>Address</h3>
                    </div>

                    <div class="col-sm-3">
                            <address>
                              <strong>Kantor :</strong><br>
                              Komisi Yudisial Republik Indonesia<br>
                              Jalan Kramat Raya Nomer 57, Jakarta <br>
                              Pusat<br>
                              DKI Jakarta, Indonesia <br><br>

                              <strong>Email :</strong><br>
                              pkh[at]komisiyudisial.go.id<br><br>

                              <strong>Telepon :</strong><br>
                                021 - 390 5876<br>
                            </address>
                    </div>

                    <div class="col-sm-9">
                        <div class="contact-form">
                        <?php if(!empty($statusMsg)){ ?>
                             <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
                        <?php } ?>
                            <form id="" name="contact-form" method="post" action="">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" name="sendmessage" class="btn btn-primary">Send Message</button>
                            </form>
                    </div>

            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    Komisi Yudisial Republik Indonesia
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

<?php

$statusMsg = '';
$msgClass = '';
if(isset($_POST['sendmessage'])){
    // Get the submitted form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Cek apakah ada data yang belum diisi
    if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
            $msgClassk = 'errordiv';
        }else{
            // Pengaturan penerima email dan subjek email
            $toEmail = 'ajisyahputra601@gmail.com'; // Ganti dengan alamat email yang Anda inginkan
            $emailSubject = 'Pesan website dari '.$name;
            $htmlContent = '<h2> via Form Kontak Website</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Subject</h4><p>'.$subject.'</p>
                <h4>Message</h4><p>'.$message.'</p>';
            
            // Mengatur Content-Type header untuk mengirim email dalam bentuk HTML
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            // Header tambahan
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";
            
            // Send email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $statusMsg = 'Pesan Anda sudah terkirim dengan sukses !';
                $msgClass = 'succdiv';
            }else{
                $statusMsg = 'Maaf pesan Anda gagal terkirim, silahkan ulangi lagi.';
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusMsg = 'Harap mengisi semua field data';
        $msgClass = 'errordiv';
    }
}

?>