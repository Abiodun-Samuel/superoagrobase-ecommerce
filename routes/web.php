<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Default/Home.vue', ['name' => 'Abiodun Samuel']);
});
Route::get('/about', function () {
    return inertia('Dashboard/About.vue');
});
