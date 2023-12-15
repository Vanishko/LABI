<html>
<head>
</head>
<body>
<form action="" method="post">
<input type="text" placeholder="Введите x" name="x">
<input type="text" placeholder="Введите n" name="n">
<input type="submit" value="Ввод" name="Vvod">
</form>

<?php
if (isset($_POST['Vvod'])){
	osnova();
}

function calc($x, $n){
	$result = 0;
for ($num = 0; $num <= $n; $num++){
	$result += ($x**(2*$num+1))/(2*$num+1);
}
return 2 * $result;
}

function osnova(){
$x = $_POST['x'];
$n = $_POST['n'];
echo calc($x, $n);
}

?>
</body>
</html>