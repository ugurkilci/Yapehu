<?php
	include("ayar.php");
	include("ushare.php");
	session_start();
	$page = $_GET["page"];
	$veri = $vt->prepare("select * from messages where id=?");
	$veri->execute(array("$page"));
	$row = $veri->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title><?php echo $row["message"]; ?> | yapehu</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/genel.css" />
		
		<link rel="dns-prefetch" href="https://google-analytics.com/">
		<link rel="dns-prefetch" href="https://www.google-analytics.com/">
		<link rel="dns-prefetch" href="https://fonts.googleapis.com/">
		<link rel="dns-prefetch" href="https://pbs.twimg.com/">

		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta http-equiv="cleartype" content="on">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<meta name="description" content="<?php echo $row["message"]; ?> | Only yapehu.">
		<link rel="author" href="dipnot.txt">

		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-title" content="Post">
		<!--<meta name="apple-itunes-app" content="app-id=123">-->

		<link rel="shortcut icon" href="resimler/ico.ico">

		
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="google" value="notranslate">

		<meta property="og:type" content="website">
		<meta property="og:url" content="http://ya.pe.hu/">
		<meta property="og:title" content="Post">
		<meta property="og:description" content="<?php echo $row["message"]; ?> | Only yapehu.">
		<meta property="og:image" content="">

		<meta name="twitter:site" content="@ugur2nd">
		<meta name="twitter:creator" content="@ugur2nd">
		<meta name="twitter:domain" content="http://ya.pe.hu/">
		<meta name="twitter:title" content="Post">
		<meta name="twitter:description" content="<?php echo $row["message"]; ?> | Only yapehu.">
		<meta name="twitter:image:src" content="">

		<link href="https://plus.google.com/+dusunenadamugur" rel="publisher">

		<meta itemprop="name" content="Post">
		<meta itemprop="description" content="<?php echo $row["message"]; ?> | Only yapehu.">
		<meta itemprop="image" content="">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-xs-offset-3">
					<?php include("header.php"); ?>
					<h4 class="gg">post</h4>
					<!-- POST -->
					<?php
						if(empty($page == "")){
							echo "<div class='post' style='border-left:3px solid ".$row["color"].";'>
									<a href='u?u=".$row["name"]."'><strong>".$row["name"]." (".$row["text"].")</strong></a> | <a href='p?page=".$row["id"]."'>".$row["date"]."</a>
									<div class='yazi3 g'>
										<a href='".ushare("fb")."' target='_blank'>k</a>
										<a href='".ushare("twt")."' target='_blank'>E</a>
										<a href='".ushare("gpls")."' target='_blank'>m</a>
										<a href='".ushare("lin")."' target='_blank'>z</a>
										<a href='".ushare("blggr")."' target='_blank'>e</a>
										<a href='".ushare("tmblr")."' target='_blank'>G</a>
									</div>
									".$row["message"]."
								</div>
								";
						}else{
							header("refresh:0; url=404");
						}
					?>
					<!-- /POST -->
				</div>
			</div>
		</div>
	</body>
</html>