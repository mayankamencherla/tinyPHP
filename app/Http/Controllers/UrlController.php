<?php

namespace App\Http\Controllers;

use App\Url;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Resources\Views;
use App\Custom\mytinyURL;

class UrlController extends Controller{
	public function shortURL(){

		echo view('shortURL');
	
		if(empty($_POST["url"])){					
			echo "URL is required in the box";
		}

		else{

			$url = $_POST["url"];
			$redis = Redis::connection();
			$host = $redis->getConnection()->getParameters()->host;
			$port = $redis->getConnection()->getParameters()->port;	

			echo $host . ' ' . $port;

			try{
				// Creating a new tiny URL object and retrieving the short URL using it's method
				$myURL = new mytinyURL();
				//$tinyurl = $myURL->getTinyURL($redis->dbSize()); 


				// Each short URL is the key and the value is the original URL
				//$redis->set($tinyurl,$url);
			}

			catch(Exception $e){
				print $e;
			}
			
			//echo "<a href='$url'>$tinyurl</a>"; // Doesn't work the way it should
		}	

	}
}