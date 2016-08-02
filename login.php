<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Login | yapehu</title>
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
		<meta name="apple-mobile-web-app-title" content="Login">
		<!--<meta name="apple-itunes-app" content="app-id=123">-->

		<link rel="shortcut icon" href="resimler/ico.ico">

		
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="google" value="notranslate">

		<meta property="og:type" content="website">
		<meta property="og:url" content="http://ya.pe.hu/">
		<meta property="og:title" content="Login">
		<meta property="og:description" content="Only yapehu.">
		<meta property="og:image" content="">

		<meta name="twitter:site" content="@ugur2nd">
		<meta name="twitter:creator" content="@ugur2nd">
		<meta name="twitter:domain" content="http://ya.pe.hu/">
		<meta name="twitter:title" content="Login">
		<meta name="twitter:description" content="Only yapehu.">
		<meta name="twitter:image:src" content="">

		<link href="https://plus.google.com/+dusunenadamugur" rel="publisher">

		<meta itemprop="name" content="Login">
		<meta itemprop="description" content="Only yapehu.">
		<meta itemprop="image" content="">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-xs-offset-3">
					<?php 
						session_start();
						include("ayar.php");
						include("sezar.php");
						include("header.php");
						
						$v = $vt->prepare("select * from users where name=? and password=?");

						if($_POST){
							
							$isim = $_POST["user"];
							$sifre = sezar($_POST["pass"]);


						$v->execute(array($isim,$sifre));

						$x = $v->fetch(PDO::FETCH_ASSOC);

						$d = $v->rowCount();

						if($d){
							
							$_SESSION["uye"] 			= $x["name"];
							$_SESSION["id"] 			= $x["id"];
							$_SESSION["durum"] 			= $x["durum"];
							$_SESSION["mail"] 			= $x["mail"];
							$_SESSION["text"] 			= $x["text"];
							$_SESSION["about"] 			= $x["about"];
							$_SESSION["yas"] 			= $x["yas"];
							$_SESSION["cinsiyet"] 		= $x["cinsiyet"];
							$_SESSION["password"] 		= $x["password"];
							
						}else{
							echo "abe sanırim usernameni pesvordunu yanlış girdin bea!<br />";
						}}
							
						if($_SESSION){
							header("refresh:0;url=index");
							if($_SESSION["durum"] == 1){/* echo " <a href='admin.php'>admin paneli</a>"; */}
						}else{
						echo '<strong>
						TR: Bu sitenin amacını koymadım. Çünkü bu sitenin amacını üyelerin koymasını istiyorum. Sizce bu sitenin amacı ne olsun?<br />
						<hr>EN:  I have not the purpose of this site. I want to write, because the purpose of the members of this site. You get what the purpose of this site?<br />
						</strong><br />
								 <form action="" method="POST">
									<h3 class="gg">login</h3>
									<strong>username:</strong>
									<input type="text" name="user" class="form-control"/>
									<strong>password:</strong>
									<input type="password" name="pass" class="form-control"/>
									<br />
									<input type="submit" value="go go go" class="btn btn-success form-control"/>
									<br />
									<a href="kaydol"><< register</a>
								 </form>';
						}	
						?>
				</div>
			</div>
		</div>
	</body>
</html>