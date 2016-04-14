<?php
	/*$numLetters = $_REQUEST["numL"]; 
	$matches = array();*/

	$filename = "wordsEn.txt";
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

	$file = fopen($filename, "r");
		$members = array();

		while (!feof($file)) {
   			$members[] = fgets($file);
		}

		fclose($file);

		var_dump($members);



///http://stackoverflow.com/questions/6159683/read-each-line-of-txt-file-to-new-array-element


?>