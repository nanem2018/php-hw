
<DOCTYPE HTML>
<html>
<head>
<title>Задание 3 на php</title>
 <body>
 <?php
const $a=5;
const $b=3;

 function add($a, $b) {
    return $a + $b;
}
 

function sub($a, $b) {
    return $a - $b;
}
 

function mult($a, $b) {
    return $a * $b;
}
 
function div(a, b) {
    return a / b;
}

echo add($a,$b);
echo sub($a,$b);
echo mult($a,$b);
echo div($a,$b);
 ?>
</body>
</html>