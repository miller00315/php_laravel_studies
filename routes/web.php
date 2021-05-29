<?php

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

Route::get('/', [\App\Http\Controllers\MainController::class, 'main']);

Route::get('/about-us', [\App\Http\Controllers\AboutUsController::class, 'main']);

Route::get('/contact-us', [\App\Http\Controllers\ContactController::class, 'main']);

Route::get('/login', function () {
    return 'Login';
});

Route::get('/providers', function () {
    return 'Providers';
});

Route::get('/clients', function () {
    return 'Clients';
});

Route::get('/products', function () {
    return 'Products';
});
