<?php

use App\Http\UrlControllers\UrlController; // calling our Controller
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

$app->post('/shortURL','UrlController@shortURL');

$app->get('/{hash}', array('as'=>'hash','uses'=>'UrlController@redirectURL'));

$app->get('/short/{hash}', array('as'=>'hash','uses'=>'UrlController@redirectURL'));

?>