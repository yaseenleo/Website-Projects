<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;

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

Route::get('/', [PageController::class, 'show'])
    ->name('home');

Route::middleware('doNotCacheResponse')->prefix('user')->group(function () {
    Route::get('thank-you', [PageController::class, 'redirectThankYou'])
        ->name('thank-you');

    Route::get('yes', [PageController::class, 'cacheAll']);
});

Route::post('contact',  [PageController::class, 'storeQuery']);

Route::post('quote', [PageController::class, 'storeQuote']);

Route::post('consultation', [PageController::class, 'storeConsultation']);

Route::middleware('cache.headers:public;max_age=31536000;etag')->group(function () {
    Route::middleware((config('app.env') === 'production') ? ['page-cache'] : [])->group(function () {
        Route::get('{slug}', [PageController::class, 'show'])
            ->where('slug', '[A-Za-z-]+')
            ->name('pages');
    });
});
