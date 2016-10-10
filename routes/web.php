<?php

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

$app->get('/', function () use ($app) {
    return '';
});

// Not sure what's going on here
/*$app->get('/{url}', function($url) use ($app){
	return "This is the url page for " . $url;
});*/

$app->get('/url', 'UrlController@index');

$app->get('/url/{id}', 'UrlController@getUrl');

$app->post('/url', 'UrlController@saveUrl');

$app->put('/url/{id}', 'UrlController@updateUrl');

$app->delete('/url/{id}', 'UrlController@deleteUrl');


