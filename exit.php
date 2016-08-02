<?php 
	include("ayar.php");
	session_start();
	if($_SESSION){
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>exit | yapehu</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/genel.css" />
		
		<link rel="dns-prefetch" href="https://google-analytics.com/">
		<link rel="dns-prefetch" href="https://www.google-analytics.com/">
		<link rel="dns-prefetch" href="https://fonts.googleapis.com/">
		<link rel="dns-prefetch" href="https://pbs.twimg.com/">

		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta http-equiv="cleartype" content="on">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<meta name="description" content="Only yapehu.">
		<link rel="author" href="dipnot.txt">

		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-title" content="Exit">
		<!--<meta name="apple-itunes-app" content="app-id=123">-->

		<link rel="shortcut icon" href="resimler/ico.ico">

		
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="google" value="notranslate">

		<meta property="og:type" content="website">
		<meta property="og:url" content="http://ya.pe.hu/">
		<meta property="og:title" content="Exit">
		<meta property="og:description" content="Only yapehu.">
		<meta property="og:image" content="">

		<meta name="twitter:site" content="@ugur2nd">
		<meta name="twitter:creator" content="@ugur2nd">
		<meta name="twitter:domain" content="http://ya.pe.hu/">
		<meta name="twitter:title" content="Exit">
		<meta name="twitter:description" content="Only yapehu.">
		<meta name="twitter:image:src" content="">

		<link href="https://plus.google.com/+dusunenadamugur" rel="publisher">

		<meta itemprop="name" content="Exit">
		<meta itemprop="description" content="Only yapehu.">
		<meta itemprop="image" content="">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-xs-offset-3">
					<?php 
						session_destroy();
						header("refresh: 3; url=index");
					?>
					<h1 class="gg">exit</h1>
					su gibi gidin. su gibi gelin. yine bekleriz.. :)
				</div>
			</div>
		</div>
	</body>
</html>
<?php }else { header("refresh:0;url=404"); } ?>