<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{

    websiteController,
    beritawebController,
};

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

Route::group([
    'middleware' =>  ["web"],
    'prefix' => "/"
], function ($router) {
    Route::get('/', [websiteController::class, 'index']);
    Route::get('/about', [websiteController::class, 'about']);
    Route::get('/kontak', [websiteController::class, 'kontak']);
    // Route::get('/misi', [websiteController::class, 'misi']);
});
Route::group([
    'middleware' =>  ["web"],
    'prefix' => "/"
], function ($router) {
    Route::get('/berita', [beritawebController::class, 'show']);
    Route::get('/beritaview', [beritawebController::class, 'beritaview']);
    Route::get('/visimisi', [websiteController::class, 'visimisi']);
});
