

<DOCTYPE HTML>
<html>
<head>
<title>Урок 3. Задание 1 на php</title>
 <body>
 <?php
 $i = 0;
 while($i <= 100) {
     echo $i . PHP_EOL;
     $i+=3;
 }

 /*второй вариант
 $counter = 0;

 while ( $counter++ <= 100) {
     if($counter % 3==0)
         echo "$counter <br>";
 }
*/
 ?>
?>
</body>
</html>