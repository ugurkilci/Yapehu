<?php 
	include("ayar.php"); session_start(); 
	//easteregg :D
	$i = @$_GET["i"];
	if($i == "krmz"){echo "70584<br/>";}
	if($i == "van"){echo "monster<br/>";}
	//!easteregg
?>
<!DOCTYPE html>
<!--Bu site fikrini bir anda aklıma gelmesiyle yaptım(!) Bu yüzden açıklama kodlarını daha eklemedim. Ama bu eklemeyeceğim anlamına gelmez.-->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>world | yapehu</title>
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
		<meta name="apple-mobile-web-app-title" content="Home">
		<!--<meta name="apple-itunes-app" content="app-id=123">-->

		<link rel="shortcut icon" href="resimler/ico.ico">

		
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="google" value="notranslate">

		<meta property="og:type" content="website">
		<meta property="og:url" content="http://ya.pe.hu/">
		<meta property="og:title" content="Home">
		<meta property="og:description" content="Only yapehu.">
		<meta property="og:image" content="">

		<meta name="twitter:site" content="@ugur2nd">
		<meta name="twitter:creator" content="@ugur2nd">
		<meta name="twitter:domain" content="http://ya.pe.hu/">
		<meta name="twitter:title" content="Home">
		<meta name="twitter:description" content="Only yapehu.">
		<meta name="twitter:image:src" content="">

		<link href="https://plus.google.com/+dusunenadamugur" rel="publisher">

		<meta itemprop="name" content="Home">
		<meta itemprop="description" content="Only yapehu.">
		<meta itemprop="image" content="">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-xs-offset-3">
					
						<?php include("header.php"); ?>
						<?php include("sidebar.php"); ?>
						<h4 class="gg">all</h4>
						<!-- POST -->
						<?php
							$num_rec_per_page = 20; 
							 try { 
							   if (isset($_GET["page"])) { $page = $_GET["page"]; } else { $page=1; }; 
							   $start_from = ($page-1) * $num_rec_per_page; 
							   $sql = "SELECT * FROM messages ORDER BY id DESC LIMIT $start_from, $num_rec_per_page"; 
							   $rs_result = $vt->prepare($sql); 
							   $rs_result->setFetchMode(PDO::FETCH_ASSOC); 
							   $rs_result->execute(); 
							   if($rs_result->rowCount()>0){
							
							while($row=$rs_result->fetchObject()){

								echo "
								<div class='post' style='border-left:3px solid ".$row->color.";'>
									<a href='u?u=".$row->name."'><strong>".$row->name." (".$row->text.")</strong></a> | <a href='p?page=".$row->id."'>".$row->date."</a>
									<br />
									".$row->message."
								</div>
								<p class='t'></p>
								";
								
							}} 
							else{ 
								echo "Ao Hata Çıktı! :)"; }
							} 
							catch(PDOException $pe){
								echo "Ao Hata Çıktı! :)";
							}
						?>
						<!-- /POST -->
				</div>
			</div>
		</div>
	</body>
</html>