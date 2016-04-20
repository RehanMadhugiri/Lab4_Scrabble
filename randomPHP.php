<?php
		
		$main = array();
		$temp = array();
		$string  = strtolower($_REQUEST["str"]);
		$first = substr($string, 0, 1);
		echo "$string";
		echo "$first";


		function update(){
    		global $main, $temp;
    		$count = 0;
    		$main = array();
   
    		foreach ($temp as &$value) {
        		$main[] = trim($value);
    		}
   		 unset($value); // break the reference with the last element

    //$main = $temp;
    $temp = array();
}


		$myfile = fopen("wordsEn.txt", "r") or die("Unable to open file!");
		while(!feof($myfile)) { 
            
    		$current = fgets($myfile); // gets the current word in txt file
    		$main[] = $current; // adds to main array    
		}
		fclose($myfile);


		//1. first letter(s)
		if($first != null){
    
    		for($x = 0; $x < sizeof($main); $x++) {

        		$current = $main[$x];
       		 	$number = substr_compare($first,$current,0,strlen($first),TRUE); // compares first letters of input and first letters of current word
       		 	echo "$number";

        	if($number == 0){
           		 $temp[] = $current; 
           		 echo "success";
        	}          
        	update();
    }


}

echo implode(",", $main);


///http://stackoverflow.com/questions/6159683/read-each-line-of-txt-file-to-new-array-element


?>