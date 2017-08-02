
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Feedback form</title>
	<style>
		body {text-align: center;}
	</style>
</head>
<body>
	<h1>Customer feedback</h1>
	<p>Please tell us what you think</p><br>

	<form action="processfeedback.php" method="POST">
	<br>
		<label for="name">Your name</label><br>
		<input type="text" name="name"><br><br>

		<label for="email">Your email</label><br>
		<input type="email" name="email"><br><br>

	

		<label for="feedback">Your feedback</label><br>
		<textarea name="feedback" id="" cols="30" rows="10"></textarea><br><br>

		<button type="submit">Send feedback</button>
	</form>

</body>
</html>