<?php
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\SlidersController;
use App\Http\Controllers\Admin\TeamsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});
Route::get('/',[\App\Http\Controllers\Site\HomeController::class,'index'])->name('index');

Route::group(['prefix' => '/admin', 'as' => 'admin-panel.'],function () {

    Route::group(['middleware' => 'isLogin'], function(){
        Route::get("/",                 [AuthController::class, 'index'])->name('login');
        Route::post("/",                [AuthController::class, 'login'])->name('login.submit');
    });
    Route::group(['middleware' => 'notLogin'], function(){

        Route::view("/dashboard", 'dashboard.index')->name('index');

        Route::get("/about-us",         [AboutController::class, 'index'])->name('about-us');

        Route::get("/contact-us",       [ContactController::class, 'index'])->name('contact-us');

        Route::get("/sliders",          [SlidersController::class, 'index'])->name('sliders');

        Route::get("/services",         [ServicesController::class, 'index'])->name('services');

        Route::get("/information",      [InformationController::class, 'index'])->name('information');

        Route::get("/team",             [TeamsController::class, 'index'])->name('team');

        Route::get("/settings",         [SettingsController::class, 'index'])->name('settings');
        Route::post("/settings/update", [SettingsController::class, 'update'])->name('settings.update');

        Route::get("/logout",           [AuthController::class, 'logout'])->name('logout');
    });
});
