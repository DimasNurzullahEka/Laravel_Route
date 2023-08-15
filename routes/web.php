<?php

use App\Http\Controllers\LatianController;
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

Route::get('/', [LatianController::class,'index'])->name('front_home');
//Menyebutkan variabel username dan password
// Route::get('about/{username}/{age}', function ($username,$age) {
//     return view('about',['un'=>$username,'ag'=>$age]);
// });
Route::get('/about',[LatianController::class,'about'])->name('front_about');
Route::get('/profile/{username}/{age}',[LatianController::class,'profile'])->name('front_profile');
