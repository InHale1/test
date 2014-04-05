<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	$host = '127.4.193.2';
	$usr = 'adminwkVHDGk';
	$pwd = '5_ntb-C-9l2r';
	$nameconnect = mysql_connect($host, $usr, $pwd) ;
	$res = mysql_select_db ('BankClient', $nameconnect) || die(mysql_error());  
?>
