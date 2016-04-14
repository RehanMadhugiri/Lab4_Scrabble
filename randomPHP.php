<?php
	/*$numLetters = $_REQUEST["numL"]; 
	$matches = array();*/

	$filename = "wordsEn.txt"
/*
	$pattern = "{".$numLetters-1."}";

	preg_match_all($pattern, "output.txt", $matches);
	var_dump($matches);
*/
	/*$file = fopen($filename, "r");
	$i = 0;
	while (!feof($file)) {
		$line_of_text = fgets($file);
		$members = explode('\n', $line_of_text);
		fclose($file);
	}*/

	$fp = @fopen($filename, 'r'); 

	if ($fp) {
   		$array = explode("\n", fread($fp, filesize($filename)));
	}

?>