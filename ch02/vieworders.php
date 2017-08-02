<?php 
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Order form</title>
</head>
<body>

	<h1>Bob's Auto Parts</h1>
	<h2>Customer Orders</h2>

	<?php 
		// 01 - abro con fopen() en read mode rb
		@ $fp = fopen("$DOCUMENT_ROOT/book/ch02/orders.txt", 'rb');
		flock($fp, LOCK_EX); //no lo explica

		if(!$fp) {
			echo "<br />No orders pending. Please try gain later.";
			exit;
		}

		// 02- cheque cuando debo para de leer
		// feof() file end of file se usa para ver cuando llegue al final del file
		// en este caso mientrs no haya llegado al final (!feof) sigo leyendo
		 while (!feof($fp)) {

		 	// 03 - leo una linea a la vez hasta un "\n" (new line)
		 	// fgets() or fgetss() or fgetcv()

		 	$order = fgets($fp, 999);
		 	echo $order."<br />";
		 }
	 ?>


</body>
</html>