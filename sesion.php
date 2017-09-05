<<?php 


session_start();

$_session["username"] = "antanas";

if(isset($_session["username"])){
} 		$varda = $_session ["username"];
else {
		$vardas = [ 'nezinomas'];

}




include "tamplate.php";
 ?>