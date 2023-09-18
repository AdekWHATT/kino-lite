<?php
use App\Router\Route;
use App\Controllers\MovieController;
use App\Controllers\HomeController;

return [
    Route::get('/home', [HomeController::class, 'index']),
    Route::get('/movies',[MovieController::class, 'index'])
];