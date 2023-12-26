<?php

use App\Http\Controllers\JewelController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/create-jewel',[JewelController::class,'createJewel']);
Route::post('/create-jewel1',[JewelController::class,'createJewel1']);
Route::get('/read-jewels',[JewelController::class,'readJewels']);
Route::get('/edit-jewel/{id}',[JewelController::class,'editJewel']);
Route::patch('/update-jewel/{id}', [JewelController::class,'updateJewel']);
Route::delete('/delete-jewel/{id}',[JewelController::class,'deleteJewel']);

//Category
Route::get('/create-category',[CategoryController::class,'createCategory']);
Route::post('/create-category1',[CategoryController::class,'createCategory1']);