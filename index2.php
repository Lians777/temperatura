<?php 

$vardas  = "";



setcookie("username", "Linas", $cookie_name, $cookie_value, time() + (60 * 60 * 24 * 7), "/"); // 86400 = 1 day

if(isset($_COOKIE["username"])) {
	$vardas = $_COOKIE["username"];
}	else {
		$vardas = "nezinomas";
	}
include "tamplate.php";
 ?>