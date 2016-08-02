<?php
	include("ayar.php");
	session_start();
	
	$u = $_GET["u"];
	$veri = $vt->prepare("select * from users where name=?");
	$veri->execute(array("$u"));
	$row = $veri->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title><?php echo $row["name"]." (".$row["text"].")"; ?> | yapehu</title>
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
		<meta name="apple-mobile-web-app-title" content="User">
		<!--<meta name="apple-itunes-app" content="app-id=123">-->

		<link rel="shortcut icon" href="resimler/ico.ico">

		
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="google" value="notranslate">

		<meta property="og:type" content="website">
		<meta property="og:url" content="http://ya.pe.hu/">
		<meta property="og:title" content="User">
		<meta property="og:description" content="Only yapehu.">
		<meta property="og:image" content="">

		<meta name="twitter:site" content="@ugur2nd">
		<meta name="twitter:creator" content="@ugur2nd">
		<meta name="twitter:domain" content="http://ya.pe.hu/">
		<meta name="twitter:title" content="User">
		<meta name="twitter:description" content="Only yapehu.">
		<meta name="twitter:image:src" content="">

		<link href="https://plus.google.com/+dusunenadamugur" rel="publisher">

		<meta itemprop="name" content="User">
		<meta itemprop="description" content="Only yapehu.">
		<meta itemprop="image" content="">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-xs-offset-3">
					<?php 
						include("header.php"); 
						include("sidebar.php");
						if($_SESSION){}else{echo "<br /><br />";}
						if(empty($u == "") || empty($u == $kadi)){
							echo "<h2><strong class='g'>".$row["name"]." (".$row["text"].")</strong></h2>
									".'"'.$row["yas"].' years old. '.$row["cinsiyet"].'"'."
									 | ".$row["mail"]."
									<br />
										".$row["about"]."
								";
						}else{
							header("refresh:0; url=404");
						}
					?>
				</div>
			</div>
		</div>
	</body>
</html>