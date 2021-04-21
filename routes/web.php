<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScrapperController;

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
    return view('welcome');
});

Route::get('scraper', [ScrapperController::class, 'scraper'])->name('scraper');
Route::get('index', [ScrapperController::class, 'index'])->name('index');

Route::get('/inscription', function () {
    return view('inscription');
})->name('inscription');
Route::get('/interne', function () {
    return view('interne');
})->name('interne');
Route::get('/tendance', function () {
    return view('tendance');
})->name('tendance');
Route::get('/externe', function () {
    return view('externe');
})->name('externe');

