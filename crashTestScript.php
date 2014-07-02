<?php

	require_once 'file_lib.php';

	$url = 'http://karradine.fr/crashTest/jsonTestFile.json';

	$fileContent = read_file($url);

	write_file('http://karradine.fr/crashTest/jsonTestFile2.json', $fileContent."LECTURE OK");

?>