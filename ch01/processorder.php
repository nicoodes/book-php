	

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Order form</title>
</head>
<body>

	<h1>Bob's Auto parts</h1>
	<h2>Order results</h2>

	<?php 

	
		// create variables
		$tireqty = $_POST['tireqty'];
		$oilqty = $_POST['oilqty'];
		$sparkqty = $_POST['sparkqty'];

	 
		echo "<p>Order processed.".date("H:i, jS F Y")."</p><br /><br />";
		echo "<p>Your order is as follows:</p><br />";
		echo $tireqty." tires<br />";
		echo $oilqty." bottles of oil<br />";
		echo $sparkqty." spark plugs<br />";


		$totlaqty = 0;

		$totlaqty = $tireqty + $oilqty + $sparkqty;
		echo 'Items ordered: '.$totlaqty.'<br />';
		$totalamount = 0.00;

		define('TIREPRICE', 100);
		define('OILPRICE', 10);
		define('SPARKPRICE', 4);

		$totalamount = TIREPRICE * $tireqty + OILPRICE * $oilqty + SPARKPRICE * $sparkqty;
		echo 'The subtotal is: $'.number_format($totalamount, 2).'<br />';

		$taxrate = 0.10;
		echo 'The total amount is: $'.number_format($totalamount*(1 + $taxrate), 2);


		// echo "<p>Order processed.".date("H:i, jS F Y")."</p>";
	 ?>
	
</body>
</html>