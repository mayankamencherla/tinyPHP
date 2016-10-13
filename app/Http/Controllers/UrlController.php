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

			try{

				$myURL = new mytinyURL();
				$hash = $myURL->getTinyURL(Redis::dbSize()); 
				$tinyurl = url() . "/short/" . $hash;

				Redis::set($hash,$url);
			}

			catch(Exception $e){
				print $e;
			}
			
			echo "<a href='/short/$hash'>$tinyurl</a>"; 
		}	

	}

	public function redirectURL($hash){

			$redis = Redis::connection();

			try{
				$url = Redis::get($hash);
			}

			catch(Exception $e){
				print $e;
			}

			return redirect($url);
	}
}