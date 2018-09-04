<!DOCTYPE html>
<html lang="en">
<head>

	<!-- meta tag -->
	<meta charset="UTF-8">
	<!-- /meta tag -->

	<!-- stylesheet -->
	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">
	<link rel="shortcut icon" href="assets/favicon/favicon.png">
	<!-- /stylesheet -->

	<title>Data QODR</title>
</head>
<body>
		<nav class="navbar">
			<div class="container">
				<div id="navbar-brand">
					<a href=""><img src="assets/logo/logo-horizontal.png" alt="qodr"></a>
				</div>
			<div id="nav" id="navbar">
				<ul class="nav-menu">
					<li><a href="#">Website</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
			<div id="nav-right">
				<input type="button" value="LOGIN">
			</div>
			</div>
		</nav><!-- navbar -->
		
		<!-- main-page -->
		<div class="container" id="main">
			<div id="title">
				<h1>Data QODR</h1>
				<p>Data Cabang QODR Yogyakarta Magelang Semarang</p>
			</div>
			<div class="table">
				<div id="nav-table">
					<nav id="table-nav">
						<ul>
							<li><a href="#">YOGYAKARTA</a></li>
							<li><a href="#">MAGELANG</a></li>
							<li><a href="#">SEMARANG</a></li>
						</ul>
					</nav>
				</div>

				<div id="table-data">

					<div class="row" id="head">
	        			<div class="no">NO</div>
	        			<div class="name">NAME</div>
	        			<div class="cabang">CABANG</div>
	    			</div>

					<?php
						foreach ($datas as $v):
							$username = $v['username'];
					?>
					<?php
					
						for($i = 1; $i > 10; $i++){
							echo $i;
						}	
					?>

					<div class="row">
						<div class="no"><?php $i; ?></div>
	        			<div class="name"><?php echo $username; ?></div>
	        			<div class="cabang" id="rifky"></div>
	    			</div>
					<?php endforeach; ?>
				</div>
			</div><!-- /main-page -->

			

			<footer>
				<img src="assets/logo/color.png" alt="logo1">
				<span>This Website maked with <i class="fa fa-heart"></i> in QODR HQ</span>
			</footer>
		</div>
	</body>
</html>

<script>

$(function(){
  <?php 

	$db[]['wakatime'] = 'https://wakatime.com/share/@RedAuthorium/2b6ca259-b902-4590-9685-442abaeed305.json';
	$db[]['wakatime'] = 'https://wakatime.com/share/@sikode/5b46a374-f03f-4931-9285-f9add04ee376.json';

	foreach($db as $k=>$v){
	  echo "getWakatime('$v[wakatime]');\n";
	}  
  ?>
});

function secondsToHms(d) {
	d = Number(d);
	var h = Math.floor(d / 3600);
	var m = Math.floor(d % 3600 / 60);
	var s = Math.floor(d % 3600 % 60);

	var hDisplay = h > 0 ? h + (h == 1 ? " hour, " : " hours, ") : "";
	var mDisplay = m > 0 ? m + (m == 1 ? " minute, " : " minutes, ") : "";
	var sDisplay = s > 0 ? s + (s == 1 ? " second" : " seconds") : "";
	return hDisplay + mDisplay + sDisplay; 
}

function getWakatime(url) {
	$.ajax({
		type: 'GET',
		url: url,
		dataType: 'jsonp',
		success: function(response) {
		var detik = 0;
		var rata2detik;
		var totaldata = response.data.length;
			for( key in response.data ){
			detik = detik+response.data[key].grand_total.total_seconds;
			}
			rata2detik = detik/totaldata;
			var jam = secondsToHms(rata2detik);
			$('#rifky').html(jam);
	},
  });
}
</script>