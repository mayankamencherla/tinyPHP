<?php

use App\Http\UrlControllers; // calling our Controller
use Illuminate\Support\Facades\Redis;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function() use ($app){
	return view('frontpage');
});

// Using post because we are posting form data from before
$app->post('/shortURL','UrlController@shortURL');

$app->get('{url}',function($url) use ($app){
	$redis = Redis::connection();
	$new_url = Redis::get($url);
	echo $new_url;
});

?>