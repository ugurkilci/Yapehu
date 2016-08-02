<?php if(@$_SESSION){ ?>
<img src="resimler/logo.png" />
<a href="index"><strong class="yazi3" alt="home">U</strong> world</a> | 
<a href="settings"><strong class="yazi3" alt="settings">4</strong> settings</a> | 
<a href="exit"><strong class="yazi3" alt="exit">|</strong> exit</a>
<br /><br />
<?php }else{ ?>
<img src="resimler/logo.png" />
<a href="index"><strong class="yazi3" alt="home">U</strong> world</a> | 
<a href="login"><strong class="yazi3" alt="login"><</strong> login</a>
<br /><br />
<?php } ?>