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

// Welcome Page
Route::get('/', function() {
    return view('welcome');
})->name('home');
Route::get('/about-us', function() {
    return view('about');
})->name('about');
Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/service-page', function () {
    return view('service');
})->name('service');

// Route::get('/service/{service_id}/{service_name?}', function ($service_id,$service_name=null) {
//     return $service_id." ".$service_name;
// })->name('service');

// Route::get('users/{id}/{name}', function ($id,$name) {
//     echo $id, $name;
// })->where(['id' => '[0-9]+','name => [A-Zz-a]+']);

// Route::get('category/{category_name}', function ($category_name) {
//     echo $category_name;
// })->whereIn('category_name',['shirt','pen','movie']);
// Route::get('/search/{keyword}', function ($keyword) {
//     echo $keyword;
// })->where('$search','.*');
