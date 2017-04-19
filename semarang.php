<!DOCTYPE HTML>
<html>
<head>
<title>Wisata Pantai di Jawa Tengah</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/blue.css" rel="stylesheet" type="text/css" media="all" />
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/menu.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/fliplightbox.min.js"></script>
		<script type="text/javascript">
			$('body').flipLightBox()
		</script>
		<script type="text/javascript" src="js/jquery.easing.min.js"></script>
		<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
		<script type="text/javascript">
			$(function() {

				var filterList = {

					init : function() {

						// MixItUp plugin
						// http://mixitup.io
						$('#portfoliolist').mixitup({
							targetSelector : '.portfolio',
							filterSelector : '.filter',
							effects : ['fade'],
							easing : 'snap',
							// call the hover effect
							onMixEnd : filterList.hoverEffect()
						});

					},

					hoverEffect : function() {

						// Simple parallax effect
						$('#portfoliolist .portfolio').hover(function() {
							$(this).find('.label').stop().animate({
								bottom : 0
							}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({
								top : -30
							}, 500, 'easeOutQuad');
						}, function() {
							$(this).find('.label').stop().animate({
								bottom : -40
							}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({
								top : 0
							}, 300, 'easeOutQuad');
						});

					}
				};

				// Run the show!
				filterList.init();

			});
		</script>
<!-- start light_box -->
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
<!--
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
-->
<script type="text/javascript" src="js/jquery.fancybox-1.2.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("div.fancyDemo a").fancybox();
		});
	</script>

</head>
<body>
<div class="header_bg">
<div class="container">
	<div class="header">
		<div class="logo">
			<a href="index.php"><img src="images/logoku.png" alt=""/></a>
		</div>
		<div class="h_menu">
		<a id="touch-menu" class="mobile-menu" href="#">Menu</a>
		<nav>
		<ul class="menu list-unstyled">
			<li><a href="index.php">HOME</a></li>
			<li><a href="galeri.php">Galeri</a></li>
			<li><a>Kabupaten</a>
			<ul class="sub-menu list-unstyled">
				<li><a href="kabbatang.php">Kab. Batang</a>
				</li><li><a href="kabbrebes.php">Kab. Brebes</a></li>
				<li><a href="kabcilacap.php">Kab. Cilacap</a></li>
				<li><a href="kabdemak.php">Kab. Demak</a></li>
				<li><a href="kabjepara.php">Kab. Jepara</a></li>
				<li><a href="kabkebumen.php">Kab. Kebumen</a></li>
				<li><a href="kabkendal.php">Kab. Kendal</a></li>
				<li><a href="kabpati.php">Kab. Pati</a></li>
				<li><a href="kabpemalang.php">Kab. Pemalang</a></li>
				<li><a href="kabpurworejo.php">Kab. Purworejo</a></li>
				<li><a href="kabrembang.php">Kab. Rembang</a></li>
				
			</ul>
			</li>
			<li><a>Kota</a>
			<ul class="sub-menu list-unstyled">
				<li><a href="semarang.php">Kota Semarang</a></li>
				<li><a href="pekalongan.php">Kota Pekalongan</a></li>
			</ul>
			</li>
			<li><a href="kontak.php">KONTAK</a></li>
		</ul>
		</nav>
		<script src="js/menu.js" type="text/javascript"></script>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_bg"><!-- start main -->
<div class="container">
	<div class="main_grid1">
		<h3 class="style pull-left">Pantai di Kota Semarang</h3
		
		<div class="clearfix"></div>
	</div>
</div>
</div>


<div class="container">
  <div itemscope itemtype="http://schema.org/Product">
      <center><div itemprop="name"><h2>Pantai Marina</h2></div></center>
	  <div class="thumbnail">
        <img itemprop="image" class="img-responsive" src="images/semarangpantaimarina.jpg" alt='' width="417px" height"440px"></a></center> </div>
	  <div align='center'>
<center><span style="font-size:22px;">INFORMASI : </span></center>
	 <span style="font-size:15px ;">Perkiraan Cuaca di Pantai Marina</span>
<br>
<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/14252955f15867ff/conditions/q/IA/semarang/anjasmoro.json");
  $json_a =json_decode($json_string);
  $json_stringb = file_get_contents("http://api.wunderground.com/api/14252955f15867ff/forecast10day/q/IA/semarang/anjasmoro.json");
  $json_b =json_decode($json_stringb);
  
  
  //pencarian variabel
  $lokasi = $json_a->{"current_observation"}->{"display_location"}->{"city"};
  $lokasi2 = $json_a->{"current_observation"}->{"observation_location"}->{"city"};
  $lokasi3 = $json_a->{"current_observation"}->{"display_location"}->{"country"};
  $local_time = $json_a->{"current_observation"}->{"local_time_rfc822"};
  $wind = $json_a->{"current_observation"}->{"wind_kph"};
  
  $month = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"monthname"};
  $day = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"day"};
  $weekday = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"weekday"};
  $year = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"year"};
   $cndtn = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"conditions"};
  $icon = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"icon"};
   $temp = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"low"}->{"fahrenheit"};
  $temp1 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"high"}->{"celsius"};
  
   //eksekusi variabel
    echo "$local_time\n";
    echo "<br>";
    echo "${cndtn} and wind degrees ${wind} kph \n";
    echo "<br>";
    echo "<img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'><br/>";
    echo "<h3>${temp} <sup>O</sup>F/ ${temp1}<sup>O</sup>C\n</h3>";
	echo "<br>";
    echo " ${local_time} Cuaca di ${lokasi} ${lokasi2} ${cndtn} dan suhu ${temp} <sup>O</sup>F|  ${temp1}<sup>O</sup>C with ${wind} wind degrees";
 ?>
 </div>
	  <br>
	  
      <div itemprop="description">	
	 <p>
		<center><span style="font-size:22px;">Lokasi</span></center>
		<span style="font-size:15px;"><div style="text-align:justify;">
			Pantai Marina berlokasi di Jalan Yos Sudarso, kurang lebih 4 km dari Tugu Muda dan bersebelahan dengan Puri Mareokoco<br>
			<br>
			<center>Daya Tarik</center>
			
			Para pengunjung dapat naik perahu keliling jika ingin melihat lautnya atau hanya sekedar ingin memancing. Di sini juga disediakan persewaan mobil balap mainan dan ban untuk berenang. Karena banyak pepohonan rindang di pintu masuk, menyebabkan pantai ini tidak terasa panas. Pepohonan yang rindang ditambah dengan suara debur ombak yang menerpatembok pembatas yang dibangun mengelilingi pantai dan juga menabrak karang, makin menambah keindahan pantai ini. Dengan keamanan yang terjamin, para pengunjung dapat berenang dan bermain pasir dengan nyaman. 
Disini para pengunjung juga akan menemukan kebun buah naga yang akan menambah keasrian pantai. Jembatan kayu yang menjorok kepantai bisa dijadikan tempat untuk berfoto dengan latar belakang keindahan pantai Marina
			<center>Harga Tiket</center>

<center>Untuk masuk ke pantai ini, para pengunjung hanya wajibmembayar tiket seharga Rp. 3000 per orang</center></div>
</span>
	</p>
	</br>
	</br>

<div class="container">
  <div itemscope itemtype="http://schema.org/Product">
      <center><div itemprop="name"><h2>Pantai Baruna</h2></div></center>
	  <div class="thumbnail">
        <img itemprop="image" class="img-responsive" src="images/semarangbaruna.jpg" alt='' width="417px" height"440px"></a></center> </div>
	  <div align='center'>
<center><span style="font-size:22px;">INFORMASI : </span></center>
	 <span style="font-size:15px ;">Perkiraan Cuaca di Pantai Baruna</span>
<br>
<?php
 $json_string = file_get_contents("http://api.wunderground.com/api/14252955f15867ff/conditions/q/IA/semarang/bringin.json");
  $json_a =json_decode($json_string);
  $json_stringb = file_get_contents("http://api.wunderground.com/api/14252955f15867ff/forecast10day/q/IA/semarang/bringin.json");
  $json_b =json_decode($json_stringb);
  
  
  //pencarian variabel
  $lokasi = $json_a->{"current_observation"}->{"display_location"}->{"city"};
  $lokasi2 = $json_a->{"current_observation"}->{"observation_location"}->{"city"};
  $lokasi3 = $json_a->{"current_observation"}->{"display_location"}->{"country"};
  $local_time = $json_a->{"current_observation"}->{"local_time_rfc822"};
  $wind = $json_a->{"current_observation"}->{"wind_kph"};
  
  $month = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"monthname"};
  $day = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"day"};
  $weekday = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"weekday"};
  $year = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"year"};
   $cndtn = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"conditions"};
  $icon = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"icon"};
   $temp = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"low"}->{"fahrenheit"};
  $temp1 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"high"}->{"celsius"};
  
   //eksekusi variabel
    echo "$local_time\n";
    echo "<br>";
    echo "${cndtn} and wind degrees ${wind} kph \n";
    echo "<br>";
    echo "<img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'><br/>";
    echo "<h3>${temp} <sup>O</sup>F/ ${temp1}<sup>O</sup>C\n</h3>";
	echo "<br>";
    echo " ${local_time} Cuaca di ${lokasi} ${lokasi2} ${cndtn} dan suhu ${temp} <sup>O</sup>F|  ${temp1}<sup>O</sup>C with ${wind} wind degrees";
 ?>
 </div>
	  <br>
	  
      <div itemprop="description">	
	 <p>
		<center><span style="font-size:22px;">Lokasi</span></center>
		<span style="font-size:15px;"><div style="text-align:justify;">
			Pelabuhan Mas, Tanjung, Bringin, Tj. Mas, Semarang Utara, Kota Semarang, Jawa Tengah 50174<br>
			<br>
			<center>Daya Tarik</center>
			
			Pantai Baruna ini bisa dikatakan sebagai tempat yang cukup anti mainstream di Semarang. Sebelumnya, perlu kamu ketahui bahwa pantai ini tidak memiliki pasir putih serta air laut berwarna birus toska seperti pantai-pantai di Indonesia Timur. Yang menjadikan pantai ini menarik adalah padang ilalangnya yang luas. Saat sore, pemandangan ini terlihat sangat cantik. Pas banget untuk postingan di Instagram
Jika hari tidak sedang hujan, kamu bisa datang ke Pantai Baruna untuk menikmati sore di sana. Jalanan menuju pantai ini tidak beraspal jadi kalau hujan bisa dipastikan akan becek. Pemandangan sore di pantai ini akan menjadi semakin indah dengan beberapa aktivitas para pengunjung. Biasanya, kita akan mendapati beberapa orang yang sedang memancing di sekitar pantai. Perahu-perahu nelayan yang sedang menepi membuat pemandangan sorenya menjadi semakin syahdu.
</div>
<center> <p>Harga tiket masuk</p> </center>
			<p>Untuk masuk ke pantai ini, para pengunjung hanya wajib membayar tiket seharga Rp. 3000 per orang</p>
</span>
	</p>
	</br>
	</br>	

	
	
	</div><!----//End-img-cursual---->
	</div>
</div>
</div>

<div class="footer1_bg"><!-- start footer1 -->
<div class="container">
	<div class="footer1">
		<div class="copy pull-left">
			<p class="link"><span>&#169; All rights reserved | Template by&nbsp;<a href="https://myaccount.google.com/u/1/?utm_source=OGB&pli=1">Icha Dias Febrinia</a></span></p>
		</div>
		
		<div class="soc_icons pull-right">
			<ul class="list-unstyled text-center">
				<li><a href="https://twitter.com/IchaDiasF"><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://www.facebook.com/ichaa.d.meiktaprawira"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://plus.google.com/116899612716406446342"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
</body>
</html>
	