<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" />
	</head>
	<body>
		<form method="post" action="/questions.php">
			<center>
				<h1> Write a Question!</h1>
				<p>Subject:</p>
				<input type="text" name="subject"/><br>
				<p>Question:</p>
				<textarea name="question"></textarea><br>
				<button type="submit" value="name">Ask My Question</button>
			</center>
		</form>
	</body>
</html>