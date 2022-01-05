<?php
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\SlidesController;
use App\Http\Controllers\Admin\TeamsController;
use Illuminate\Support\Facades\Route;



Route::get('/',           [\App\Http\Controllers\Site\HomeController::class,'index'])->name('homepage');

Route::get('/about-us',   [\App\Http\Controllers\Site\AboutController::class,'index'])->name('about-us');

Route::get('/contact-us', [\App\Http\Controllers\Site\ContactController::class,'index'])->name('contact-us');

Route::get('/services',   [\App\Http\Controllers\Site\ServiceController::class,'index'])->name('services');

Route::group(['prefix' => '/admin', 'as' => 'admin-panel.'],function () {

    Route::group(['middleware' => 'isLogin'], function(){
        Route::get("/",                  [AuthController::class, 'index'])->name('login');
        Route::post("/",                 [AuthController::class, 'login'])->name('login.submit');
    });
    Route::group(['middleware' => 'notLogin'], function(){

        Route::view("/dashboard", 'dashboard.index')->name('index');

        Route::get("/about-us",          [AboutController::class, 'index'])->name('about-us');
        Route::post("/about-us/update",  [AboutController::class, 'update'])->name('about-us.update');

        Route::get("/contact-us",        [ContactController::class, 'index'])->name('contact-us');
        Route::post("/contact-us/update",[ContactController::class, 'updateContact'])->name('contact-us.update');

        Route::resource("slide",         SlidesController::class);

        Route::resource("services",       ServicesController::class,);

        Route::get("/information",       [InformationController::class, 'index'])->name('information');

        Route::resource("team",           TeamsController::class);


        Route::get("/settings",          [SettingsController::class, 'index'])->name('settings');
        Route::post("/settings/update",  [SettingsController::class, 'update'])->name('settings.update');

        Route::get("/logout",            [AuthController::class, 'logout'])->name('logout');
    });
});
