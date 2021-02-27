<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/skillslanguages', function () {
    return view('skillslanguages');
})->name('skillslanguages');

Route::get('/contactme', function () {
    return view('contactme');
})->name('contactme');

Route::get('/post/create', function() {
    DB::table('post')->insert([
    	'title' => 'News',
    	'body' => "All news around the world"
    ]);
});



Route::get('/', function () {
    return view('welcome');
});

