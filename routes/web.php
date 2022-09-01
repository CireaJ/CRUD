<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;

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

Route::get('/', function () {
    return view('layouts.landingpage.landingpage');
});

Auth::routes();


// route for user
Route::get('/user', [usercontroller::class,'show']);

Route::post('/user', [usercontroller::class,'store']);

// route for create
Route::get('user/create',[usercontroller::class,'create']);

Route::get('/edit/{id}',[usercontroller::class,'edit']);

Route::patch('/user/edit/{id}',[usercontroller::class,'update']);





// route for delete
Route::get('user/{id}',[usercontroller::class,'destroy']);



