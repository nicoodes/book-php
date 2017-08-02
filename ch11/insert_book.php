<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>New book inserted</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
		body {
			text-align: center;
			margin-top: 5rem;
		}

		h1 {
			margin: 2rem 0;
		}
	</style>
</head>
<body>
	<h1>Book-O-Rama Entry Results</h1>

	<?php 
		if ( !isset($_POST['Author']) || !isset($_POST['Title']) || !isset($_POST['ISBN']) || !isset($_POST['Price']) ) {
			echo "<p>You have not entered all the required details.<br />
				Please go back and try again.</p>";
			exit;
		}


		//create vars
		$isbn = $_POST['ISBN'];
		$author = $_POST['Author'];
		$title = $_POST['Title'];
		$price = $_POST['Price'];
		$price = doubleval($price);

		@$db = new mysqli("localhost", "root", "123456", "books");

		if(mysqli_connect_errno()){
			echo "<p>Could not connect to database.<br />
							Please try again later.</p>";
			exit;
		}

		$query = "INSERT INTO books VALUES(?, ?, ?, ?)";
		$stmt = $db->prepare($query);
		$stmt->bind_param("sssd", $isbn, $author, $title, $price );
		$stmt->execute();

		if($stmt->affected_rows > 0) {
			echo "<p>Book inserted in the database.</p>";
		} else {
			echo "<p>An error has occurred.<br />
					The item was not added</p>";

		}

		$db->close();



	?>

</body>
</html>