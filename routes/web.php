<?php

use App\Http\Controllers\MyController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get(
    '/about',
    function() {
        return 'Santiano sound gallery';
    }
);


Route::get('/1', 
    function() {
        return 'Я обыный route(';
    }
);

Route::get('/2', [MyController::class, 'index']);

Route::get('/3', [MyController::class, 'show']);