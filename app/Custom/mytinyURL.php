<?php namespace App\Custom;

class mytinyURL{

	function getTinyURL($index){
	
		// we are mapping the index of the input URL to [a-zA-Z0-9]
		// Need to get this lumen ready! :)
		$map = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; // length of 62

		$URL = "http://short/";
		$num = "";

		if($index == 0) $num .= $map[0];

		while($index>0){
			$remainder = $index%62;
			//echo $remainder;
			$num .= substr($map,$remainder,1);
			$index = (int)($index/62);	
		}

		return $URL . strrev($num); // Works well
	}

}

?>