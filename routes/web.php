<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\services\SozdanieSaitovController;
use App\Http\Controllers\services\MobilnyePrilozheniyaController;
use App\Http\Controllers\services\SermController;
use App\Http\Controllers\services\ProdvizhenieSaitovController;
use App\Http\Controllers\services\RazrabotkaFirmennogoStilyaController;
use App\Http\Controllers\services\SozdanieLogotipaController;
use App\Http\Controllers\services\CustomSoftwareController;
use App\Http\Controllers\services\sozdanieSaitov\KorporativnyiSiteController;
use App\Http\Controllers\services\sozdanieSaitov\InternetMagazinController;
use App\Http\Controllers\services\sozdanieSaitov\LandingPageController;



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
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about', [AboutController::class,'index'])->name('about');
Route::get('/clients',[ClientController::class,'index'])->name('client');
Route::get('/portfolio',[PortfolioController::class,'index'])->name('portfolio');
Route::get('/contacts',[ContactsController::class,'index'])->name('contacts');
Route::get('/services',[ServicesController::class,'index'])->name('services');

//services
Route::get('/sozdanie-saitov',[SozdanieSaitovController::class,'index'])->name('sozdanie-saitov');
Route::get('/mobilnye-prilozheniya',[MobilnyePrilozheniyaController::class,'index'])->name('mobilnye-prilozheniya');
Route::get('/serm',[SermController::class,'index'])->name('serm');
Route::get('/prodvizhenie-saitov',[ProdvizhenieSaitovController::class,'index'])->name('prodvizhenie-saitov');
Route::get('/razrabotka-firmennogo-stilya',[RazrabotkaFirmennogoStilyaController::class,'index'])->name('razrabotka-firmennogo-stilya');
Route::get('/sozdanie-logotipa',[SozdanieLogotipaController::class,'index'])->name('sozdanie-logotipa');
Route::get('/custom-software',[CustomSoftwareController::class,'index'])->name('custom-software');

//sozdanie-saitov
Route::get('/korporativnyi-site',[KorporativnyiSiteController::class,'index'])->name('korporativnyi-site');
Route::get('/internet-magazin',[InternetMagazinController::class,'index'])->name('internet-magazin');
Route::get('/landing-page',[LandingPageController::class,'index'])->name('landing-page');
















