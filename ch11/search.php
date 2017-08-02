<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Database search</title>
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
	<h1>Book-O-Rama Catalog Search</h1>

	<form action="results.php" method="post">
		<p>Choose search type:
		<select name="searchtype" id="">
			<option value="Author">Author</option>
			<option value="Title">Title</option>
			<option value="ISBN">ISBN</option>
		</select>
		</p>
		<p>
			<strong>Enter search term:</strong><br>
			<input type="text" name="searchterm" size="40">
		</p>
		<p><input type="submit" name="submit" value="Search"></p>
	</form>
</body>
</html>