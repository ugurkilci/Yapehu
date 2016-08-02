<!-- Yo.pe.hu (c) 2016 | Bir Uğur KILCI ürünüdür. | twttr@ugur2nd, fcbk@dusunuveringari, lnkdn@ugur2nd, gthb@ugurkilci, instgrm@ugur2nd, gglpls+dusunenadamugur, ytbe@dusunenadamugur, ugurklc.blogspot.com, ugurbocugu8@gmail.com -->
<?php
	try{
		$vt = new PDO("mysql:host=localhost;dbname=yph;charset=utf8;","root","");
	}catch(PDOExeption $ugur){
		echo $ugur->getMessage();
	}
?>