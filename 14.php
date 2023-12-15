<html>
<head>
<title>Array</title>
<style>
input[type="text"] {width: 50px; height: 50px; font-size: 40px;}
</style>
</head>
<body>
<form method="POST">
<table border="1">
<tr>
<td><input type="text" name="one"></td> <td><input type="text" name="two"></td> <td><input type="text" name="three"></td>
</tr>
<tr>
<td><input type="text" name="four"></td> <td><input type="text" name="five"></td> <td><input type="text" name="six"></td>
</tr>
<tr>
<td><input type="text" name="seven"></td> <td><input type="text" name="eight"></td> <td><input type="text" name="nine"></td>
</tr>
<tr>
<td colspan="3"><input type="submit" value="Рассчитать" name="cooldude"></td>
</tr>
</table>
</form>
<?php 
if (isset($_POST['cooldude']))
cooldude();

function cooldude(){
$arr = array(
array($_POST['one'], $_POST['two'], $_POST['three']),
array($_POST['four'], $_POST['five'], $_POST['six']),
array($_POST['seven'], $_POST['eight'], $_POST['nine'])
);
echo calculaa($arr);
}

function calculaa($arr){
$mainlinesum = 0;
for ($i = 0; $i < count($arr); $i++){
	$mainlinesum += $arr[$i][$i];
}
return $mainlinesum;
}
?>
</body>
</html>