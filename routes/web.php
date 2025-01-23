<?php

use Illuminate\Support\Facades\Route;

Route::view('/auth/confirm-mail', 'auth.auth-confirm-mail')->name('auth.confirm-mail');
Route::view('/auth/lock-screen', 'auth.auth-lock-screen')->name('auth.lock-screen');
Route::view('/auth/recover-password', 'auth.auth-recoverpw')->name('auth.recover-password');
Route::view('/auth/sign-in', 'auth.auth-sign-in')->name('auth.sign-in');
Route::view('/auth/sign-up', 'auth.auth-sign-up')->name('auth.sign-up');

// Halaman Create Page
Route::view('/create/new-note-blank', 'create-page.page-new-note5d2b')->name('create.new-note1');
Route::view('/create/new-note-daily', 'create-page.page-new-note7c5e')->name('create.new-note2');
Route::view('/create/new-note-todo', 'create-page.page-new-note8fb2')->name('create.new-note3');
Route::view('/create/new-note-essay', 'create-page.page-new-notefbe')->name('create.new-note4');

// Halaman Error Page
Route::view('/error/500', 'error-page.pages-error-500')->name('error.500');
Route::view('/maintenance', 'error-page.pages-maintenance')->name('error.maintenance');

// Halaman Home
Route::view('/', 'home.index')->name('home');

// Halaman Layouts
Route::view('/layout/app', 'layouts.app')->name('layout.app');
Route::view('/layout/footer', 'layouts.footer')->name('layout.footer');
Route::view('/layout/loader', 'layouts.loader')->name('layout.loader');
Route::view('/layout/navbar', 'layouts.navbar')->name('layout.navbar');
Route::view('/layout/sidebar', 'layouts.sidebar')->name('layout.sidebar');

// Halaman Page
Route::view('/page/bin', 'page.page-bin')->name('page.bin');
Route::view('/page/planning', 'page.page-planning')->name('page.planning');
Route::view('/page/project-plans', 'page.page-project-plans')->name('page.project-plans');
Route::view('/page/reminder', 'page.page-reminder')->name('page.reminder');
Route::view('/page/routine-notes', 'page.page-routinenotes')->name('page.routine-notes');

// Halaman User
Route::view('/user/account-setting', 'User.user-account-setting')->name('user.account-setting');
Route::view('/user/add', 'User.user-add')->name('user.add');
Route::view('/user/list', 'User.user-list')->name('user.list');
Route::view('/user/privacy-setting', 'User.user-privacy-setting')->name('user.privacy-setting');
Route::view('/user/profile-edit', 'User.user-profile-edit')->name('user.profile-edit');
Route::view('/user/profile', 'User.user-profile')->name('user.profile');