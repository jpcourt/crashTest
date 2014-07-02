<?php

	require_once 'file_lib.php';

	$url = 'http://karradine.fr/crashTest/jsonTestFile2.json';

	$fileContent = read_file($url);

	write_file('data/jsonTestFile2.json', $fileContent." LECTURE OK");

?>