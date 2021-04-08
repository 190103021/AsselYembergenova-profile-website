<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Models\Utilizer;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UtilizerController;
use App\Http\Controllers\MailController;
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



Route::get('/post/add', function() {
    DB::table('posts')->insert([
        'title' => 'News',
        'body' => "All news around the world"
    ]);
});


Route::get('/', function () {
    return view('welcome');
});


Route::get('post', [BlogController::class, 'index']);


Route::get('/post/create', function() {
    return view('blog.create');
});

Route::post('/post/create', [BlogController::class, 'store'])-> name('add-post');
Route::get('post/{id}', [BlogController::class, 'get_post']);


Route::get('/utilizers', [UtilizerController::class, 'index']);
Route::post('/utilizers/create', [UtilizerController::class, 'store'])-> name('add-image');
Route::get('/utilizers/create', function() {
    return view('utilizers');
});
Route::get('utilizers/all', [UtilizerController::class, 'getAllUtilizers']);

Route::get('mail/send', [MailController::class, 'send']);



Route::get('/about/{lang}', function($lang){
    App::setlocale($lang);
    return view('about');
});
Route::get('/skillslanguages/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('skillslanguages');
});

Route::get('/contactme/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('contactme');
});

Route::get('/homepage/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('homepage');
});
