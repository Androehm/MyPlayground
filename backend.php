<?php 

require('connection.php');


$query = "SELECT * FROM coffeetable";
$result = $handler -> query($query);



while ($r = $result -> fetch()) {
	
	$a = json_encode($r);
	


}




//echo $a;

/*$res = json_encode($res);

echo $res;*/

?>