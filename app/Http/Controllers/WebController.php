<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Image;
use App\Webinfo;
use App\InfoNosotros;

class WebController extends Controller
{
    public function index(){
    	$images = Image::where('ima_estado', 'ACTIVO')->get();
    	$info = Webinfo::first();
    	$cards = InfoNosotros::all();
    	$data = [
    		'images'=> $images,
    		'info'=> $info,
    		'cards'=> $cards
    	];

    	return view('principal', $data);
    }
}
