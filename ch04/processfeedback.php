<?php 
	//create variables
	$name = $_POST['name'];
	$email = $_POST['email'];
	$feedback = $_POST['feedback'];
	
	// create some static info
	$toaddress = "feedback@example.com";

	$subject = "Feedback from website";

	$mailcontent = "Customer name: ".$name."\n".
					"Customer email: ".$email."n".
					"Customer feedback: ".$feedback."\n";

	$fromaddress = "From: webserver@example.com";
	
	// invoke mail

	mail($toaddress, $subject, $mailcontent, $fromaddress);				
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Order form</title>
	<style>
		body {text-align: center;}
	</style>
</head>
<body>
	<h1>Bob's Auto Parts - Feedback submitted</h1>
	<p>Your feedback has been sent.</p>
<?php 



?>

</body>
</html>