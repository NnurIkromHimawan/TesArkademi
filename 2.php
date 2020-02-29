<?php 
$username = "name";
$cek=strlen($username);
if ($cek<=5 && $cek >= 8) {
	if (preg_match('/^[a-z\d_]{5,20}$/i', $username)) {
		echo "Your username is ok.";
	} else {
		echo "Wrong username format.";
	}
}
else{
	echo "Wrong username format.";
}
?>