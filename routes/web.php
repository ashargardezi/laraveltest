<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;




Route::controller(PageController::class)-> group(function(){
    Route::get('/', [PageController::class, 'showWelcome'])->name('welcome');
    Route::get('/home', [PageController::class, 'showHome'])->name('home');
    Route::get('/users', [PageController::class, 'showUsers'])->name('users');
    Route::get('/createpost', [PageController::class, 'showCreatepost'])->name('createpost');
    Route::get('/bulkpost', [PageController::class, 'showBulpost'])->name('bulkpost');
    Route::get('/login', [PageController::class, 'showLogin'])->name('login');
});









// Route::get('/', function () {
//     return view('welcome');
// })-> name('welcome');
// Route::get('/', [PageController::class, 'showWelcome'])->name('welcome');

// Route::get('/home', function () {
//     return view('home');
// })->name('home');
// Route::get('/home', [PageController::class, 'showHome'])->name('home');


// Route::get('/users', function () {
//     return view('user');
// })->name('users');
// Route::get('/users', [PageController::class, 'showUsers'])->name('users');

// Route::get('/createpost', function () {
//     return view('createpost');
// })->name('createpost');
// Route::get('/createpost', [PageController::class, 'showCreatepost'])->name('createpost');


// Route::get('/bulkpost', function () {
//     return view('bulkpost');
// })->name('bulkpost');
// Route::get('/bulkpost', [PageController::class, 'showBulpost'])->name('bulkpost');

// Route::get('/login', function () {
//     return view('login');
// })->name('login');
// Route::get('/login', [PageController::class, 'showLogin'])->name('login');

