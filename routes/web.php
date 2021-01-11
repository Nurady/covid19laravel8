<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TotalcaseController;
use App\Http\Controllers\Admin\PositipController;
use App\Http\Controllers\Admin\CoverageController;
use App\Http\Controllers\Admin\RecoverController;
use App\Http\Controllers\Admin\DeathController;
use App\Http\Controllers\Admin\CareController;
use App\Http\Controllers\Admin\QuarantineController;
use App\Http\Controllers\Admin\TravelerController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SuspectController;
use App\Http\Controllers\Admin\ProbableController;
use App\Http\Controllers\Admin\ReleaseController;
use App\Http\Controllers\Admin\PublicationController;
use App\Http\Controllers\Admin\HospitalController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PresspageController;
use App\Http\Controllers\CoveragepageController;
use App\Http\Controllers\PublicationpageController;
use App\Http\Controllers\HospitalpageController;
use App\Http\Controllers\ChartpageController;

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

Route::get('/admin', [DashboardController::class, 'index'])
        ->name('dashboard');
Route::get('/', [HomeController::class, 'index'])
        ->name('home');

Route::get('/release-page', [PresspageController::class, 'index'])
        ->name('releasepage');

Route::get('/coverage-page', [CoveragepageController::class, 'index'])
        ->name('coveragepage');

Route::get('/publication-page', [PublicationpageController::class, 'index'])
        ->name('publicationpage');

Route::get('/hospital-page', [HospitalpageController::class, 'index'])
        ->name('hospitalpage');

Route::get('/chart-page', [ChartpageController::class, 'index'])
        ->name('chartpage');

Route::resource('totalcases', TotalcaseController::class);
Route::resource('positips', PositipController::class);
Route::resource('coverage', CoverageController::class);
Route::resource('recovers', RecoverController::class);
Route::resource('deaths', DeathController::class);
Route::resource('cares', CareController::class);
Route::resource('quarantines', QuarantineController::class);
Route::resource('travelers', TravelerController::class);
Route::resource('contacts', ContactController::class);
Route::resource('suspects', SuspectController::class);
Route::resource('probables', ProbableController::class);
Route::resource('release', ReleaseController::class);
Route::resource('publications', PublicationController::class);
Route::resource('hospital', HospitalController::class);

Auth::routes(['register' => false]);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/admin', function () {
//     return view('layouts.admin.app');
// });
