<?php

require_once 'sqlite_class.php';

$db_name = $_GET['name'];
$size = $_GET['size'];

$db = new dBase($db_name.'.sqlite', './data');

$q = $db->exec('CREATE TABLE IF NOT EXISTS table1 (key1 INT, key2 INT, key3 INT, PRIMARY KEY (key1)');

for($i = 0; i < $size; i++){
	$q = $db->exec('INSERT INTO table1 (key1, key2, key3) VALUES ('.$i.', '.$i.', '.$i.')');
}

$query = 'SELECT * FROM table1';

echo "Debut du test\r\n";

$result = sql_query($db, $query);

echo "Lecture de la base :".$db." de taille ".$size."\r\n";

if(is_array($result)){
	print_r($result);
}else{
	echo $result;
}

echo "\r\nFin du test";

?>