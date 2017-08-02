<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>New Book Entry</title>
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
	<h1>Book-O-Rama New Book Entry</h1>

	<form action="insert_book.php" method="post">
		<fieldset>
			<p>
				<label for="ISBN">ISBN</label>
				<input type="text" id="ISBN" name="ISBN" maxlength="13" size="13">
			</p>
			<p>
				<label for="Author">Author</label>
				<input type="text" id="Author" name="Author" maxlength="30" size="30">
			</p>
			<p>
				<label for="Title">Title</label>
				<input type="text" id="Title" name="Title" maxlength="60" size="30">
			</p>
			<p>
				<label for="Price">Price</label>
				<input type="text" id="Price" name="Price" maxlength="7" size="7">
			</p>


		</fieldset>

		<p><input type="submit" value="Add new book madafaca"></p>
	</form>
</body>
</html>