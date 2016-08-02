<?php
	include("ayar.php");
	include("sezar.php");
	session_start();
	if($_SESSION){
?>
<!--şifrelemeyi yaparken çok canımı sıktı. şifrenizi unutmayın ha. :D (buna bi ara el atacağım. :))-->
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>settings | yapehu</title>
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
		<meta name="apple-mobile-web-app-title" content="Settings">
		<!--<meta name="apple-itunes-app" content="app-id=123">-->

		<link rel="shortcut icon" href="resimler/ico.ico">

		
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="google" value="notranslate">

		<meta property="og:type" content="website">
		<meta property="og:url" content="http://ya.pe.hu/">
		<meta property="og:title" content="Settings">
		<meta property="og:description" content="Only yapehu.">
		<meta property="og:image" content="">

		<meta name="twitter:site" content="@ugur2nd">
		<meta name="twitter:creator" content="@ugur2nd">
		<meta name="twitter:domain" content="http://ya.pe.hu/">
		<meta name="twitter:title" content="Settings">
		<meta name="twitter:description" content="Only yapehu.">
		<meta name="twitter:image:src" content="">

		<link href="https://plus.google.com/+dusunenadamugur" rel="publisher">

		<meta itemprop="name" content="Settings">
		<meta itemprop="description" content="Only yapehu.">
		<meta itemprop="image" content="">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-xs-offset-3">
					<?php include("header.php"); 
						
						if(isset($_POST["submit"])){
							$name 			= strip_tags($_POST["name"]);
							$mail 			= strip_tags(trim($_POST["mail"]));
							$text 			= strip_tags($_POST["text"]);
							$about			= strip_tags($_POST["about"]);
							$yas				= $_POST["yas"];
							$cinsiyet		= $_POST["cinsiyet"];
							
							if(empty($name) || empty($mail) || empty($text) || empty($about) || empty($yas) || empty($cinsiyet)){
								echo "<font color='red'>abe sen neden sürekli boş bırakıyon bea! :s</font><br />";
							}else{
								$veri2 = $vt->prepare("update users set name=?, mail=?, text=?, about=?, yas=?, cinsiyet=?");
								$veri2->execute(array($name,$mail,$text,$about,$yas,$cinsiyet));
								
								echo ":)";
								header("refresh:2;url=settings");
							}
						}
					?>
					<h4 class="gg">settings</h4>
					<form action="" method="POST">
						<strong class="g">name:</strong>
						<input type="text" name="name" maxlength="140" minlength="2" value="<?php echo $_SESSION["uye"]; ?>" class="form-control"/>
						
						<strong class="g">mail:</strong>
						<input type="text" name="mail" maxlength="140" minlength="2" value="<?php echo $_SESSION["mail"]; ?>" class="form-control"/>
						
						<strong class="g">text:</strong>
						<input type="text" name="text" maxlength="140" minlength="2" value="<?php echo $_SESSION["text"]; ?>" class="form-control"/>
						
						<strong class="g">about:</strong>
						<input type="text" name="about" maxlength="140" minlength="2" value="<?php echo $_SESSION["about"]; ?>" class="form-control"/>
						
						<strong class="g">yas:</strong>
						<input type="number" name="yas" value="<?php echo $_SESSION["yas"]; ?>" class="form-control"/>
						
						<strong class="g">cinsiyet:</strong>
						<select name="cinsiyet" value="<?php echo $_SESSION["cinsiyet"]; ?>" class="form-control">
							<option value="male">male</option>
							<option value="female">female</option>
						</select>
						<br />
						<input type="submit" name="submit" value="save" class="btn btn-danger form-control"/>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
<?php }else { header("refresh:0;url=404"); } ?>