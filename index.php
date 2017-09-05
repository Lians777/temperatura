<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"
	<title></title>
</head>
<body>


<table class="table table-bordered table-inverse">
  <thead>
    <tr>
      <th>#</th>
      <th>Temperatura</th>
      <th>Pojutis</th>
      <th>Username</th>
    </tr>
  </thead>
  
<?php

function getfeel($t){

if ($t <= -20){
	echo "labai salta";
}	elseif ($t <= 5) {
		echo "salta";
	}elseif ($t <= 20) {
		echo "silta";
	}elseif ($t <= 25) {
		echo "karsta";
	}elseif ($t >= 35) {
		echo "labai karsta";
	}
}
		
	


for ($i= -30; $i < 36 ; $i+=3 ) 
	echo "<tr> <td> </td> <td> ". $i ." </td> <td> </td> <td> </td> </tr>";
	

?>


</table>

</body>
</html>
