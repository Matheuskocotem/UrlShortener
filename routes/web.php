<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlShortenerController;

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

Route::get('/', [UrlShortenerController::class, 'create']);
Route::post('/shorten', [UrlShortenerController::class, 'store']);
Route::get('/{short_url}', [UrlShortenerController::class, 'show']);
