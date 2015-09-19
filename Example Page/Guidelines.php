<?php 

$db = new SQLite3('sqlitedb');
 //$db->exec('CREATE TABLE bar (foo STRING)');
 //$db->exec('INSERT INTO bar(foo) VALUES ("Yoo Stupid")');
 $results = $db->query('SELECT foo FROM bar');
 $row = $results->fetchArray();
 var_dump($row);
// foreach ($result as $entry) {
//     echo 'Name: ' . $entry['name'] . '  E-mail: ' . $entry['email'];
// }
?>