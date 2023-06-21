<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\machineController;
use App\Http\Controllers\warehouseController;
use App\Http\Controllers\postharvestController;
use App\Http\Controllers\industryController;
use App\Http\Controllers\marketController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\smsController;
use App\Http\Controllers\rentController;
use App\Http\Controllers\payController;
use App\Http\Controllers\ordermachineController;
use App\Http\Controllers\AdminHomeController;

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
    return view('home');
 });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('hom', [HomeController::class, 'hom'])->name('hom');
Route::get('about', [blogController::class, 'about'])->name('about');
Route::get('service', [serviceController::class, 'service'])->name('service');
Route::get('postharvest', [postharvestController::class, 'postharvest'])->name('postharvest');
Route::get('blog', [blogController::class, 'blog'])->name('blog');
Route::get('contact', [blogController::class, 'contact'])->name('contact');
Route::get('team', [blogController::class, 'team'])->name('team');
Route::get('sms', [smsController::class, 'sms'])->name('sms');
Route::get('gallery', [blogController::class, 'gallery'])->name('gallery');
Route::get('more', [blogController::class, 'more'])->name('more');

// Route::get('log', [HomeController::class, 'log'])->name('log');


Route::group(['middleware' => 'isCompany'] , function() {

    // all company routes goes here
    Route::get('industry', [industryController::class, 'industry'])->name('industry');

});
Route::group(['middleware' => 'isFarmer'] , function() {
    
    // all farmer routes goes here
    Route::get('market', [marketController::class, 'market'])->name('market');
    Route::get('ordermachine', [ordermachineController::class, 'ordermachine'])->name('ordermachine');
    Route::get('rent', [rentController::class, 'rent'])->name('rent');
    Route::get('pay', [payController::class, 'pay'])->name('pay');
    Route::get('machine', [machineController::class, 'machine'])->name('machine');
    Route::get('warehouse', [warehouseController::class, 'warehouse'])->name('warehouse');


});
// Route::group(['middleware' => 'isAdmin'] , function() {
    
//   Route::get('/admin', [adminController::class, 'index'])->name('admin.index');

// });
Route::middleware('admin')->group(function () {
    Route::get('/Admin',[AdminHomeController::class, 'index'])->name('index');
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

