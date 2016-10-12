<?php namespace App\Custom;

use Hashids\Hashids;

class mytinyURL{

	function getTinyURL($index){
	
		// we are mapping the index of the input URL to [a-zA-Z0-9]
		// Need to get this lumen ready! :)
		$map = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; // length of 62

		$hash = "";

		if($index == 0) $hash .= $map[0];

		while($index>0){
			$remainder = $index%62;
			//echo $remainder;
			$hash .= $remainder;//substr($map,$remainder,1);

			$index = (int)($index/62);	
		}

		$hashids = new Hashids("This is my salt");
		$hash = $hashids->encode($hash);

		return strrev($hash); // Works well
	}

}

?>