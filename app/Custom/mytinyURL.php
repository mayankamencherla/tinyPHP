<?php namespace App\Custom;

use Hashids\Hashids;

class mytinyURL{

	function getTinyURL($index){
	
		$map = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; 

		$hash = $index;

		// Getting salt from env
		$salt = getenv('SALT');

		$hashids = new Hashids($salt,$map);
		$hash = $hashids->encode($hash);

		return strrev($hash); 
	}
}

?>