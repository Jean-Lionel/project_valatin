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

Route::get('/apropos-client/{apropos}','ClientController@apropos')->name('apropos');

Route::get('/police-commissariat-client/{commissariat}','ClientController@commissariat')->name('commissariat');

Route::middleware(['auth'])->resource('products', ProductController::class);
Route::middleware(['auth'])->resource('articles', ArticleController::class);
Route::middleware(['auth'])->resource('slides', SlideController::class);
Route::middleware(['auth'])->resource('publicites', PubliciteController::class);
Route::middleware(['auth'])->resource('publications', PublicationController::class);
Route::middleware(['auth'])->resource('contacts', ContactController::class);
Route::middleware(['auth'])->resource('apropos', AproposController::class);
Route::middleware(['auth'])->resource('commessarias', CommecariaController::class);
Route::middleware(['auth'])->resource('files', DocumentController::class);
Route::middleware(['auth'])->resource('socialnetworks', SocialNetworkController::class);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
