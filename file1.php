

<!doctype html>
<html>
<head> 

<title>Factorial table</title>

</head>

<body>


<!--Multiply table calculator-->
<form method="post" >
<table border="2">
<tr>
<th>Enter value number :</th>
<td><input type="number" name="txtnum" ></td>
</tr>

<tr>
<td><input type="submit" name="btn_sub" value="calculate" ></td>
</tr>
</table>

</form>


</body>
</html>

<?php
if(isset($_POST['btn_sub'])){
$val=$_POST['txtnum'];
$result=1;
for($i=$val; $i>=1; $i--){
	echo"$i x ";
	$result=$result*$i;
}
	echo" = $result";
}
?>