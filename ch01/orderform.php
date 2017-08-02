
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Order form</title>
</head>
<body>

	<form action="processorder.php" method="POST">
	<br>
		<label for="tires">Tires</label><br>
		<input type="text" name="tireqty"><br>

		<label for="oil">Oil</label><br>
		<input type="text" name="oilqty"><br>

		<label for="spark">Sparks</label><br>
		<input type="text" name="sparkqty"><br><br>

		<button type="submit">Submit order</button>
	</form>


</body>
</html>