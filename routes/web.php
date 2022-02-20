<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'index'])->name('home');

Route::get('/about',  [PagesController::class, 'about'])->name('about');

Route::get('/contact',  [PagesController::class, 'contact'])->name('contact');

Route::get('/privacy',  [PagesController::class, 'privacy'])->name('privacy');

/*
|--------------------------------------------------------------------------
| Hosting Routes
|--------------------------------------------------------------------------
*/

Route::get('/hosting/nvme', function () {
    return view('hosting.nvme');
})->name('hosting_nvme');

Route::get('/hosting/shared', function () {
    return view('hosting.shared');
})->name('hosting_shared');

Route::get('/hosting/ssd', function () {
    return view('hosting.ssd');
})->name('hosting_ssd');
