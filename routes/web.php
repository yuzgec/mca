<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){});
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('/form', [HomeController::class, 'form'])->name('form');

Route::group(["prefix"=>"go", 'middleware' => ['auth','web', 'admin']],function() {
    Route::get('/', 'DashboardController@index')->name('go');
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::auto('/page', PageController::class);
    Route::auto('/pagecategory', PageCategoryController::class);
    Route::auto('/product', ProductController::class);
    Route::auto('/productcategory', ProductCategoryController::class);
    Route::auto('/blog', BlogController::class);
    Route::auto('/blogcategory', BlogCategoryController::class);
    Route::auto('/service', ServiceController::class);
    Route::auto('/servicecategory', ServiceCategoryController::class);
    Route::auto('/slider', SliderController::class);
    Route::auto('/settings', SettingController::class);
    Route::auto('/reference', ReferenceController::class);
});

require __DIR__.'/auth.php';
