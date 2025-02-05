<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'home.home');
Route::get('/page2', [HomeController::class, 'page2']);
Route::get('/page3', [HomeController::class, 'page3']);
Route::get('/page4', [HomeController::class, 'page4']);
Route::get('/page5', [HomeController::class, 'page5']);
Route::get('/page6', [HomeController::class, 'page6']);
Route::get('/page7', [HomeController::class, 'page7']);
Route::get('/page8', [HomeController::class, 'page8']);
Route::get('/page9', [HomeController::class, 'page9']);
Route::get('/page10', [HomeController::class, 'page10']);
Route::get('/page11', [HomeController::class, 'page11']);
Route::get('/page12', [HomeController::class, 'page12']);
Route::get('/page13', [HomeController::class, 'page13']);
Route::get('/page14', [HomeController::class, 'page14']);
Route::get('/page15', [HomeController::class, 'page15']);
Route::get('/page16', [HomeController::class, 'page16']);
// Route::view('/page2', 'home.page2');
// Route::view('/page3', 'home.page3');
// Route::view('/page4', 'back.page4');
// Route::view('/page5', 'home.page5');
// Route::view('/page6', 'back.page6');
// Route::view('/page7', 'home.page7');
// Route::view('/page8', 'back.page8');
// Route::view('/page9', 'home.page9');
// Route::view('/page10', 'back.page10');
// Route::view('/page11', 'home.page11');
// Route::view('/page12', 'back.page12');
// Route::view('/page13', 'back.page13');
// Route::view('/page14', 'home.page14');
// Route::view('/page15', 'home.page15');
// Route::view('/page16', 'home.page16');
// Route::view('/page17', 'back.page17');