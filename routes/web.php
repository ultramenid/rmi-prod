<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Cms\CorporateNetworkController;
use App\Http\Controllers\Cms\CorporateProfilePageController;
use App\Http\Controllers\CorporateProfileController;
use App\Http\Controllers\Cms\DashboardController;
use App\Http\Controllers\Cms\FinancialAndOwnershipController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MethodologiController;
use App\Http\Controllers\Cms\MethodologyPageController;
use App\Http\Controllers\Cms\OperationAreaController;
use App\Http\Controllers\Cms\SpotlightCasesController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

//https force https
// URL::forceScheme('https');

Route::redirect('/', '/en');

//front end
Route::group(['prefix' => '{lang}'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/methodology', [MethodologiController::class, 'index'])->name('methodology');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/corporateprofile', [CorporateProfileController::class, 'index'])->name('corporateprofile');
    Route::get('/corporate/{id}', [CorporateProfileController::class, 'detail'])->name('corporatedetail');
});




//backend
//if has session redirect to dashboard
Route::group(['middleware' => 'checkSession'], function () {
    Route::get('/cms/dashboard', [DashboardController::class, 'index']);
    Route::get('/cms/settings', [SettingsController::class, 'index']);
    Route::get('/cms/page/methodology', [MethodologyPageController::class, 'index']);
    Route::get('/cms/corporates' , [CorporateProfilePageController::class, 'index'])->name('corporatesmaster');


    Route::get('/cms/page/overview', [CorporateProfilePageController::class, 'overview']);
    Route::get('/cms/corporates/{id}', [CorporateProfilePageController::class, 'edit']);
    // Route::get('/cms/page/financialandownership', [FinancialAndOwnershipController::class, 'index']);
    // Route::get('/cms/page/corporatenetwork', [CorporateNetworkController::class, 'index']);
    // Route::get('/cms/page/spotlightcases', [SpotlightCasesController::class, 'index']);


});

//if there is no session , redirect to login page
Route::group(['middleware' => 'hasSession'], function () {
    Route::get('/cms/login', [LoginController::class, 'index']);
});


//route logout
Route::get('/cms/page/logout', function () {
    session()->flush();
    return redirect('/cms/login');
});

//redirect if the URL doesn’t match any of those rules
Route::any('{query}', function() { return redirect('/'); })->where('query', '.*');
