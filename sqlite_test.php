<?php

require_once 'sqlite_class.php';

$db = new dBase('config.sqlite', './data');

$query = 'SELECT * FROM config';

$result = sql_query($db, $query);

if(is_array($result){
	print_r($result);
}else{
	echo $result;
}

?>