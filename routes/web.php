<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home/index');
});

Route::get('/home', function () {
    return view('home/index');
});

Route::get('/user-account-setting', function () {
    return view('User/user-account-setting');
});

Route::get('/user-add', function () {
    return view('User/user-add');
});

Route::get('/user-list', function () {
    return view('User/user-list');
});

Route::get('/user-privacy-setting', function () {
    return view('User/user-privacy-setting');
});

Route::get('/user-profile', function () {
    return view('User/user-profile');
});

Route::get('/user-profile-edit', function () {
    return view('User/user-profile-edit');
});
