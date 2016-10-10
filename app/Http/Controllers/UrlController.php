<?php

namespace App\Http\Controllers;

use App\Url;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UrlController extends Controller{
	public function index(){
		$urls = Url::all();
		return response()->json($urls);
	}	

	public function getUrl($id){
		$url = Url::find($id);
		return response()->json($url);
	}

	public function saveUrl(Request $request){
		$url = Url::create($request->all());
		return response()->json($url);
	}

	public function deleteUrl($id){
		$url = Url::find($id);

		$url->delete();

		return response()->json('success');
	}

	public function updateUrl(Request $request, $id){
		$url = Url::find($id);

		$url->url = $request->input('url');

		$url->save();

		return response()->json($url);
	}
}