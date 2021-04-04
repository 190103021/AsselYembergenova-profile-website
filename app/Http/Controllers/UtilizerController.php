<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilizer;


class UtilizerController extends Controller
{
    public function index(){
    	return view('utilizers');
    }

    public function store(Request $request){
    	Utilizer::create([
          'name' => $request->name,
          'surname' => $request->surname,
          'email' => $request ->email,
          'image' => $request -> image
    	]);

    	return back();
    }
}
