<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\ProductController;
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
//     return view('public.index');
// });

// Route::get('/',[ClientController::class,'index']);

Route::get('/','ClientController@index')->name('accueil');

Route::get('/article/{id}','ClientController@article')->name('article');
Route::get('/contact/{contact}','ClientController@contact')->name('contact');
Route::get('/publicite/{publicite}','ClientController@publicite')->name('publicite');



Route::resource('products', ProductController::class);
Route::resource('articles', ArticleController::class);
Route::resource('slides', SlideController::class);
Route::resource('publicites', PubliciteController::class);
Route::resource('publications', PublicationController::class);
Route::resource('contacts', ContactController::class);
Route::resource('apropos', AproposController::class);
Route::resource('commessarias', CommecariaController::class);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
