
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" />
	</head>
	<body>
		<center>
			<?php 
				$db = new SQLite3('questionsdb');
				//$db->exec('CREATE TABLE questions (id INTEGER PRIMARY KEY, subject TEXT, question TEXT)');
				$db->exec('INSERT INTO questions(subject, question) VALUES ("' . $_POST['subject'] . '", "' . $_POST['question'] . '");');
				$results = $db->query('SELECT * FROM questions');
				while ($row = $results->fetchArray()) {
					$isEmpty = ($row['subject'] == "" and $row['question'] == "" );
					if(!$isEmpty){			
						echo("<p><a href='thread.php?id=" . $row['id'] . "'>ID:" . $row['id'] . "</a><br>
									Subject: " . $row['subject'] . "<br/>
						 			Question: " . $row["question"] . "
						 		</p><br><br>");

					}
				//	var_dump($row['question'] . $row['subject']);
				}
			 ?>
		 </center>
	</body>
</html>