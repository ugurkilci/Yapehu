<?php
	include("ayar.php");
	
	$date 		= date("d.m.20y - H:i:s");
	echo $date;
	
	if(isset($_POST["yolla"])){
		$name 		= $_SESSION["uye"];
		$text 		= $_SESSION["text"];
		$date2 		= date("d.m.20y h:i:s");
		$message	= strip_tags(trim($_POST["message"]));
		$color 		= $_POST["color"];
		
		if(empty($message)){
			echo "<br /><font color='red'>abe sen neden messageyi boş bırakıyon bea! :(</font><br />";
		}else{
			$veri2 = $vt->prepare("insert into messages set name=?, text=?, date=?, message=?, color=?");
			$veri2->execute(array($name,$text,$date2,$message,$color));
		}
	}
	
	if(@$_SESSION){
		
?>
<div class="g">
	<p>Welcome, <a href="u?u=<?php echo $_SESSION["uye"]; ?>"><strong><?php echo $_SESSION["uye"]; ?></strong></a>.</p>
	<strong>Write!</strong>
	<form action="" method="POST">
		<textarea name="message" placeholder="140 charackter" maxlength="140" minlength="2" class="form-control"></textarea>
		<select name="color" class="form-control">
			<option value="#2EA638">Green</option>
			<option value="#EA1A22">Red</option>
			<option value="#007FFF">Blue</option>
			<option value="#FDCE13">Yellow</option>
			<option value="#FF6600">Orange</option>
			<option value="#6A3A9A">Purple</option>
			<option value="#663300">Brown</option>
			<option value="#000000">Black</option>
			<option value="#DDDDDD">Grey</option>
			<option value="#FFFFFF">White :p</option>
		</select>
		<button type="submit" name="yolla" class="form-control btn btn-success">Yolla!</button>
	</form>
</div><br />
<?php } ?>