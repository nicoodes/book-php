

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Order form</title>
</head>
<body>

	<form action="" method="POST">
	<br>
		<label for="tires">Tires</label><br>
		<input type="text" name="tireqty"><br>

		<label for="oil">Oil</label><br>
		<input type="text" name="oilqty"><br>

		<label for="spark">Sparks</label><br>
		<input type="text" name="sparkqty"><br><br>

		<label for="address">Address</label><br>
		<input type="text" name="address"><br><br>

		<button type="submit">Submit order</button>
	</form>
<?php 
// create variables
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
$address = $_POST['address'];
$date = date('H: i, jS F Y');

echo "<p>Order processed.".$date."</p><br /><br />";
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




	// fopen(file_a_abrir, file_mode [, include_path] [, protocol])

	// creo la variable para acceder a root directory
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

	// accedo al file in apend and binary mode
	// el @ es para suprimir el mensaje de error y dar otro mejor con el if statement
	@ $fp = fopen("$DOCUMENT_ROOT/book/ch02/orders.txt", 'ab');

	flock($fp, LOCK_EX); //no lo explica

	if(!$fp) {
		echo "Your order culd not be processed at this time. Try gain later.";
		exit;
	}

	// writing to file
	// fwrite() or fputs() ---file put string--- or file_put_contents()
	// fwrite(file_a_escribir, datos [, max numb of bytes])

	$outputstring = $date."\t".$tireqty." tires\t".$oilqty." oil\t"
						.$sparkqty." spark plugs\t$".$totalamount."\t".$address."\r\n";

	// el 3er paramertro es opcional, aca uso la funcion strlen() para saber cuanto tama@o tiene el string y meter solo eso
	fwrite($fp, $outputstring, strlen($outputstring));

	flock($fp, LOCK_UN); //no lo explica

	// cierro el file
	fclose($fp);


	


?>

</body>
</html>