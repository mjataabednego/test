<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('hom');
});
Route::get('hom', [HomeController::class, 'hom'])->name('hom');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('service', [HomeController::class, 'service'])->name('service');
Route::get('machine', [HomeController::class, 'machine'])->name('machine');
Route::get('warehouse', [HomeController::class, 'warehouse'])->name('warehouse');
Route::get('postharvest', [HomeController::class, 'postharvest'])->name('postharvest');
Route::get('industry', [HomeController::class, 'industry'])->name('industry');
Route::get('market', [HomeController::class, 'market'])->name('market');
Route::get('blog', [HomeController::class, 'blog'])->name('blog');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('team', [HomeController::class, 'team'])->name('team');
Route::get('sms', [HomeController::class, 'sms'])->name('sms');
Route::get('gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('more', [HomeController::class, 'more'])->name('more');
Route::get('ordermachine', [HomeController::class, 'ordermachine'])->name('ordermachine');
Route::get('rent', [HomeController::class, 'rent'])->name('rent');
Route::get('pay', [HomeController::class, 'pay'])->name('pay');
Route::get('log', [HomeController::class, 'log'])->name('log');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
