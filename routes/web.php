<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');

    // view('welcome');
});

Route::get('/about', function () {
    return inertia('About', ['user' => 'Mike']); // тоже самое что Inertia::render('Home');
});

Route::inertia('/direct', 'Direct', ['status' => 'done']);
