<?php

use App\Http\Controllers\Admin\aboutUsController;
use App\Http\Controllers\Admin\aboutUsSettingController;
use App\Http\Controllers\Admin\offerController;
use App\Http\Controllers\Admin\offerSettingController;
use App\Http\Controllers\Admin\productSettingController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home',[HomeController::class,'index'])->name('home');

/** admin routes */

// admin pannel , don't forget to give it a middleware later... and remove the dashboard route above to replace
Route::group(['prifex' => 'admin', 'as' => 'admin.', 'auth'=>'Verified' ], function () {
    // About-us section routes.
    Route::resource('/aboutUs', aboutUsController::class);
    Route::resource('/aboutUs-settings', aboutUsSettingController::class);
    Route::resource('/offers-settings', offerSettingController::class);
    Route::resource('/offers',offerController::class);
    Route::resource('/products-settings', productSettingController::class);
    Route::get('/admine', function () {
        return view('admin.index');
    })->name('panel');

});






require __DIR__.'/auth.php';

