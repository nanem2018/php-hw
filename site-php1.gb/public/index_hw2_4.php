
<DOCTYPE HTML>
<html>
<head>
<title>Задание 4 на php</title>
 <body>
 <?php



 function add($arg1, $arg2) {
    return $arg1 + $arg2;
}
 

function sub($arg1, $arg2) {
    return $arg1 - $arg2;
}
 

function mult($arg1, $arg2) {
    return $arg1 * $arg2;
}
 
function div($arg1, $arg2) {
    return $arg1/ $arg2;
}
function mathOperation($arg1, $arg2, $operation){
	switch($operation){
		case "+":
			return add(arg1,arg2);
			break;
		case "-":
			return sub(arg1,arg2);
		break;
			case "*":
			return mult(arg1,arg2);
		break;
			case "/":
			return div(arg1,arg2);
		break;
	}
}

echo mathOperation(5,3,"+"));
 ?>
</body>
</html>