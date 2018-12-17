<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Image;
use App\Webinfo;

class WebController extends Controller
{
    public function index(){
    	$images = Image::where('ima_estado', 'ACTIVO')->get();
    	$info = Webinfo::first();
    	$data = [
    		'images'=> $images,
    		'info'=> $info
    	];

    	return view('principal', $data);
    }
}
