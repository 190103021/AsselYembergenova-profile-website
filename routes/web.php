<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/r-ex', function () {
    return "Hello!!";
});

Route::get('/redirectex', function () {
    return redirect("/test");
});

Route::get('/post/{id}/{age}', function ($id, $age) {
    return "ID: " . $id . ", age: " . $age ;
});

Route::get('/post/{id}/{age?}', function ($id, $age = 15) {
    return "ID: " . $id . ", age: " . $age;
});

Route::get('/post/{id}/{age?}', function ($id, $age=null) {
    return "ID: " . $id . ", age: " . $age ;
})-> where('age', '[\d]+');