<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Livewire\MapLocation;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index']); 
Route::get('/post/detail/{id}',[ArticleController::class,'show'])->name('post.detail');
Route::get('/map', MapLocation::class);







Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
