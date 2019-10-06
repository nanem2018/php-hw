
<DOCTYPE HTML>
<html>
<head>
<title>Задание 4 на php</title>
 <body>
 <?php


function power($val,$row){
	$result=1;
		for($i=1;$i<=$row;$i++){
	$result *= $val;
	}
	 return (int)$result;
   }
   echo power(3,3);
 ?>
</body>
</html>