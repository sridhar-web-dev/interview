<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/all-roles', function()
{
    return view('roles');
});

Route::get('/roles/single', function()
{
    return view('rolesinner');
});