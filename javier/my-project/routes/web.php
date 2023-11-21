<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignController;

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

Route::get('/hola/{id}', function ($id) {
    return "Hello ". $id;
});

Route::get('/hola', function () {
    return "Adeu Javier";
});

//Route::prefix('SignController')->group(function (){
    Route::get('/sign/signin/{v1}/{v2}/{v3}/{v4}', [SignController::class, 'signin']);
    Route::get('/sign/signup/{v1}/{v2}/{v3}', [SignController::class, 'signup']);
    //}   
//);
// Route::get('/sign/signin', function () {
//     return view('signin')
// });
// Route::get('/sign/signup', function () {
//     return view('signup')
// });