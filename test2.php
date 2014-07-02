<?php

	require_once 'file_lib.php';

	$key = $_GET['key'];
	$value = $_GET['value'];

	$new_line = $key." : ".$value."\r\n";

	append_file('data/keyValue.txt', $new_line);


?>