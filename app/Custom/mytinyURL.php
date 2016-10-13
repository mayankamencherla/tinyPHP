<?php namespace App\Custom;

use Hashids\Hashids;

class mytinyURL{

	function getTinyURL($index){
	
		// we are mapping the index of the input URL to [a-zA-Z0-9]
		$map = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; // length of 62

		$hash = $index;

		// hashids gets mapped to the characters in the map variable.
		$hashids = new Hashids("This is my salt",$map);
		$hash = $hashids->encode($hash);

		return strrev($hash); 
	}

	// Writing my own tiny url function using hashing algorithm
	function customTinyUrl($index){
		// we are mapping the index of the input URL to [a-zA-Z0-9]
		$map = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; // length of 62

		$hash = "";

		if($index == 0) $hash .= $map[0];

		while($index>0){
			$remainder = $index%62;
			$hash .= $substr($map,$remainder,1);

			$index = (int)($index/62);	
		}

		return strrev($hash);
	}

}

?>