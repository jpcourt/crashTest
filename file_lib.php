<?php

	function read_file($path){

		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $path);
		curl_setopt($curl, CURLOPT_HEADER, 0);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_BINARYTRANSFER,1);
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
		$rawdata = curl_exec($curl);

		if(curl_errno($curl)){
			echo "Erreur dans la lecture du fichier : ".date("Y-m-d")." ".date("H:i:s")." ".curl_error($curl)."<br>";
			return false;
		}else{
			echo $rawdata;
			return $rawdata;
		}
	}

	function write_file($filepath, $data){
		if(file_exists($filepath)){
			shell_exec('rm '.$filepath);
			echo 'Fichier effacé';
		}
		$handle = fopen($filepath,'x');
		fwrite($handle, $data);
		fclose($handle);
		unset($handle);
		echo "Fichier bien écrit !";
	}


?>