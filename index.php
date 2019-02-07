<?php
include 'function.php';

if(isset($_POST['summation'])){
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	
	if(empty($num1) or empty($num2)){
		echo "<span style='color: #EE6554;'>Field must not be empty</span>";
	}else{
		echo "<span style='color: green; font-weight: bold;'>The values entered are: $num1 and $num2</span><br>";
		$cal = new Calculation;
		$cal->add($num1, $num2);
		$cal->sub($num1, $num2);
		$cal->mul($num1, $num2);
		$cal->div($num1, $num2);
		$cal->mol($num1, $num2);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Arithmetic</title>
</head>
<body>
	<form action="" method="post">
		<table>
			<tr>
				<td>Enter the first Number :</td>
				<td><input type="number" name="num1"></td>
			</tr>
			<tr>
				<td>Enter the second Number :</td>
				<td><input type="number" name="num2"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="summation" value="Calculate"></td>
			</tr>
		</table>
	</form>
</body>
</html>
