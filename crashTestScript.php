<?php

	require_once 'file_lib.php';

	$url = 'jsonTestFile.json';

	$fileContent = read_file($url)."LECTURE OK";

	$resultWrite = write_file('jsonTestFile2.json', $fileContent);

	if($resultWrite){
		echo 'LECTURE / ECRITURE OK';
	}else{
		echo 'KO KO KO KO KO';
	}

?>