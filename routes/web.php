<?php

use Illuminate\Support\Facades\Route;

use App\http\Controllers\HomeController;

Route::get('/', function () {
    return view('.user.home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


route::get('/redirect',[HomeController::class, 'redirect']);

route::get('/home',[HomeController::class, 'index']);

route::get('/booking',[HomeController::class, 'index']);