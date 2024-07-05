<?php

use App\Http\Controllers\Admin\aboutUsController;
use App\Http\Controllers\Admin\aboutUsSettingController;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\gallerySettingController;
use App\Http\Controllers\Admin\offerController;
use App\Http\Controllers\Admin\offerSettingController;
use App\Http\Controllers\Admin\productController;
use App\Http\Controllers\Admin\productSettingController;
use App\Http\Controllers\Admin\teamSettingController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\weatherController;
use App\Http\Middleware\isAdmin;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'aboutUs'])->name('aboutUs');
Route::get('/team',[HomeController::class,'team'])->name('team');
Route::get('/Offers',[HomeController::class,'offers'])->name('Offers');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/shop',[HomeController::class,'shop'])->name('shop');
Route::get('/single-product/{id}',[HomeController::class,'singleProduct'])->name('single-product');

Route::get('/weatherPage',function(){
    return view('frontend.weather');
});
Route::get('/weather', [weatherController::class, 'getWeatherData'])->name('weather');


/** admin routes */

// admin pannel , don't forget to give it a middleware later... and remove the dashboard route above to replace
Route::group(['prifex' => 'admin', 'as' => 'admin.' ,'middleware'=>['auth','verified',isAdmin::class]  ], function () {
// Route::group(['prifex' => 'admin', 'as' => 'admin.' ,'middleware'=>['auth','verified']  ], function () {
    // About-us section routes.
    Route::get('/dashboard', [dashboardController::class,'index'])->name('dashboard');
    Route::resource('/aboutUs', aboutUsController::class);
    Route::resource('/aboutUs-settings', aboutUsSettingController::class);

    Route::resource('/offers-settings', offerSettingController::class);
    Route::resource('/offers',offerController::class);

    Route::resource('/products-settings', productSettingController::class);
    Route::resource('/products',productController::class);

    Route::resource('/team-settings',teamSettingController::class);

    Route::resource('/gallery-settings',gallerySettingController::class);
    Route::view('/test','admin.products');
});






require __DIR__.'/auth.php';

