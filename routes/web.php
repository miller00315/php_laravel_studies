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

Route::get('/', [\App\Http\Controllers\MainController::class, 'main'])->name('site.index');

Route::get('/about-us', [\App\Http\Controllers\AboutUsController::class, 'main'])->name('site.about-us');

Route::get('/contact-us', [\App\Http\Controllers\ContactController::class, 'main'])->name('site.contact-us');

Route::get('/login', function () {
    return 'Login';
})->name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/providers', function () {
        return 'Providers';
    })->name('site.app.providers');

    Route::get('/clients', function () {
        return 'Clients';
    })->name('site.app.clients');

    Route::get('/products', function () {
        return 'Products';
    })->name('site.app.products');
});

Route::get('/campaign1', function () {
    echo ('campaign1');
})->name('site.campaign1');

Route::get('/campaign3', function () {
    return redirect()->route('site.campaign1');
})->name('site.campaign3');

Route::redirect('/campaign2', '/campaign1');

Route::fallback(function () {
    echo ('Rota inexistente. Clique <a href="' . route('site.index') . '">aqui</a> para voltar para a home');
});

Route::get('/test/{p1}/{p2}', [\App\Http\Controllers\TestController::class, 'main'])->name('site.test');
