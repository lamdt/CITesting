<?php 
	$code = new Encrypt;
	$string = "lam dang tung";
	echo "<br /> String encode: ".$code->encode($string);
	echo "<br /> String decode: ".$code->decode($code->encode($string));
	echo "<br /> String sha1 encode :".$code->encode_sha1($string);
?>

