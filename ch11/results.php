<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Database results</title>
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
	<h1>Book-O-Rama Search Results</h1>

	<?php 
	//create short variables
	$searchterm = trim($_POST['searchterm']);
	$searchtype = $_POST['searchtype'];
	// $submit = $_POST['submit'];
	$searchterm = "%{$searchterm}%";
	// tmb funca asi =====         $searchterm = "%$searchterm%";  ===== no olvidar el select con LIKE y no solo = usando %%



	if (!$searchtype || !$searchterm) {
		echo "<p>That is not a valid search type.<br /> 
				Please go back and try again.</p>";
				exit;
	}


	switch ($searchtype) {
		case "Author":
		case "Title":
		case "ISBN":
			break;

		default:
			echo "<p>That is not a valid search type.<br /> 
					Please go back and try again.</p>";
					exit;
	}


	@$db = new mysqli('localhost', 'root', '123456', 'books');

	if (mysqli_connect_errno()) {
		echo "<p>Could not connect to database.<br /> 
				Please go back and try again.</p>";
				exit;
	}

	$query = "SELECT ISBN, Author, Title, Price FROM books WHERE $searchtype like ?";

	$stmt = $db->prepare($query);
	$stmt->bind_param('s', $searchterm);
	$stmt->execute();
	$stmt->store_result();

	$stmt->bind_result($isbn, $author, $title, $price);

	echo "<p>Number of books found: ".$stmt->num_rows."</p>";

	while($stmt->fetch()){
		echo "<p><strong>Title: ".$title."</strong>";
		echo "<br />Author :".$author;
		echo "<br />ISBN: ".$isbn;
		echo "<br />Price: ".number_format($price, 2)."</p>";
	}

	$stmt->free_result();
	$db->close();

	?>

</body>
</html>