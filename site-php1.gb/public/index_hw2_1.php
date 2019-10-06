

<DOCTYPE HTML>
<html>
<head>
<title>Задание 1 на php</title>
 <body>
 <?php
 
 $a = 5;
 $b = 3;
 
 if($a >= 0 && $b >= 0)
     echo $a - $b;
 elseif ($a < 0 && $b < 0)
     echo $a * $b;
 elseif (($a < 0 && $b >= 0) || ($a >= 0 && $b < 0))
     echo $a + $b;
 
 ?>
?>
</body>
</html>