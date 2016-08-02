<?php
	
	/*
	 * uShare
	 *
	 * uShare, sosyal medya paylaþým kodlarýný kolayca ulaþmanýzý saðlar.
	 *
	 * Detaylar: {@link https://github.com/ushare}
	 *
	 *******************
	 *
	 * Uður KILCI
	 *
	 * @ugurkilci Github
	 * @ugur2nd Twitter
	 * uShare 1.0
	 */
	
	## TR:/ Sosyal Medya Paylaþým Kodlarý Baþla
	## EN:/ Social Media Share Codes Start
	
	function ushare($usharea) {
		$usharea = trim($usharea);
		$ushb = array('fb','twt','gpls','pin','lin','vk','okru','su','rddt','tmblr','blggr','i.n.f.o','ulnk');
		$ushc = array("http://www.facebook.com/share.php?u=http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."#ref=uShare","https://twitter.com/home?status=http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."#ref=uShare","https://plus.google.com/share?url=http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."#ref=uShare","https://pinterest.com/pin/create/button/?url=http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."&?ref=uShare","https://www.linkedin.com/shareArticle?mini=true&url=http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."&source=http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."#ref=uShare","http://vk.com/share.php?url=".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."#ref=uShare","http://ok.ru/share.php?url=".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."#ref=uShare","http://www.stumbleupon.com/submit?url=".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."#ref=uShare","http://www.reddit.com/submit?url=http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."#ref=uShare","http://www.tumblr.com/share/link?url=http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."#ref=uShare","https://www.blogger.com/blog-this.g?u=http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."&t=http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."#ref=uShare",
		"http://github.com/ushare#ref=uShare","http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']);
		$ushislem= str_replace($ushb,$ushc,$usharea);
		return $ushislem;
	}
	
	## EN:/ Social Media Share Codes Finish
	## TR:/ Sosyal Medya Paylaþým Kodlarý Bitiþ

?>