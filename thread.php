<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" />
</head>
<body>
<center>
	<?php 
		$id = $_GET['id'];
		$db = new SQLite3('questionsdb');
		//$db->exec('CREATE TABLE thread (answer TEXT)');
		$results = $db->query('SELECT * FROM questions WHERE id = ' . $id . '');
			while ($row = $results->fetchArray()) {
				echo("<p>ID:" . $row['id'] . "<br>
					Subject: " . $row['subject'] . "<br/>
					Question: " . $row["question"] . "
					</p><br><br>");
			}
	 ?>
</center>
</body>
</html>