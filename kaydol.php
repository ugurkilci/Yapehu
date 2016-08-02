<?php 
	include("ayar.php");
	include("sezar.php");
	session_start();
	
	if(@$_SESSION){
		header("refresh:0;url=index");
	}else{
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Register | yapehu</title>
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
		<meta name="apple-mobile-web-app-title" content="Register">
		<!--<meta name="apple-itunes-app" content="app-id=123">-->

		<link rel="shortcut icon" href="resimler/ico.ico">

		
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="google" value="notranslate">

		<meta property="og:type" content="website">
		<meta property="og:url" content="http://ya.pe.hu/">
		<meta property="og:title" content="Register">
		<meta property="og:description" content="Only yapehu.">
		<meta property="og:image" content="">

		<meta name="twitter:site" content="@ugur2nd">
		<meta name="twitter:creator" content="@ugur2nd">
		<meta name="twitter:domain" content="http://ya.pe.hu/">
		<meta name="twitter:title" content="Register">
		<meta name="twitter:description" content="Only yapehu.">
		<meta name="twitter:image:src" content="">

		<link href="https://plus.google.com/+dusunenadamugur" rel="publisher">

		<meta itemprop="name" content="Register">
		<meta itemprop="description" content="Only yapehu.">
		<meta itemprop="image" content="">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-xs-offset-3">
					<img src="resimler/logo.png" />
					<a href="index"><strong class="yazi3" alt="home">U</strong> world</a> | 
					<a href="login"><strong class="yazi3" alt="login"><</strong> login</a>
					<br /><br />
					<?php 
						if($_POST){
							$name 		= strip_tags(trim($_POST["name"]));
							$password = strip_tags(trim(sezar($_POST["password"])));
							$mail 		= strip_tags(trim($_POST["mail"]));
							$text 		= strip_tags(trim($_POST["text"]));
							$about 		= strip_tags(trim($_POST["about"]));
							$yas 		= trim($_POST["yas"]);
							$cinsiyet	= trim($_POST["cinsiyet"]);
							
							$a = $vt->prepare("select * from users WHERE name =:kadi ");
							$a->execute(array('kadi'=>$name));
							$saydirma = $a->rowCount();
							
							if($saydirma >0){
								
								echo "emmioğlu, bu username kullanılmaz. :o";
								
							}else{
								
								if(empty($name) || empty($password) || empty($mail) || empty($text) || empty($about) || empty($yas) || empty($cinsiyet)){
								echo "sen nie boş bırakıyon bea! :(";
								}else{
									$veri2 = $vt->prepare("insert into users set name=?, password=?, mail=?, text=?, about=?, yas=?, cinsiyet=?");
									$veri2->execute(array($name, $password, $mail, $text, $about, $yas, $cinsiyet));
									echo "Success :)";
									header("refresh:2;url=login");
								}
								
							}
						}
					?>
					<form action="" method="POST">
						<h3 class="gg">register</h3>
						<strong>user name:</strong><input type="text" name="name" class="form-control"/>
						<strong>password:</strong><input type="password" name="password" class="form-control"/>
						<strong>mail:</strong><input type="text" name="mail" class="form-control"/>
						<strong>text:</strong><input type="text" name="text" class="form-control"/>
						<strong>about:</strong><input type="text" name="about" class="form-control"/>
						<strong>yas:</strong><input type="number" name="yas" value="13" class="form-control"/>
						<strong>cinsiyet:</strong>
						<select name="cinsiyet" class="form-control">
							<option value="Female">Female</option>
							<option value="Male">Male</option>
						</select>
						
						<br /><input type="submit" value="go go go" class="btn btn-success form-control"/><br />
						
						<a href="login"><< login</a>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
<?php } ?>