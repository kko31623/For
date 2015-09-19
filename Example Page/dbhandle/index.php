<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
		<title></title>
	</head>
	<body>
		<?php 
			$db = new SQLite3('textdb');

			//echo($command);
			 // $command = '
			 // 	CREATE TABLE text(inputVal TEXT);
			 // ';
			 // $db->exec($command);	
			//echo($_POST['potato']);
			 $text = $_POST['potato'];
			 $command = '
			 	 INSERT INTO text (inputVal) VALUES (" ' . $text . ' ");
			';
			 $db->exec($command);
			 $results = $db->query('SELECT inputVal FROM text');
			 
			 while ($row = $results->fetchArray()) {
				if($row["inputVal"]!="  "){
					echo("<p style='display: inline;'>" . $row["inputVal"] . "&nbsp; &nbsp;</p>");
				}	
			 }
		 ?>
	 </body>
</html>