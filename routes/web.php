<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToolsController;
use App\Http\Controllers\CamaccController;
use App\Http\Controllers\WiringaccController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\FirstreportController;
use App\Http\Controllers\SecondreportController;
use App\Http\Controllers\ThirdreportController;
use App\Http\Controllers\EndreportController;
use App\Http\Controllers\OvertimeController;
use App\Http\Controllers\AddchecklistController;
use App\Http\Controllers\reportdetailsController;
use App\Http\Controllers\OvertimeDetailsController;
use App\Http\Controllers\PostController;

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
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('layouts.pages.dashboard');
});


// net work team ----------------------------------------------------------------------------------------
Route::get('/tools', [ToolsController::class, 'index']);
Route::get('/camacc', [CamaccController::class, 'index']);
Route::get('/wiringacc', [WiringaccController::class, 'index']);
Route::get('/vehicle', [VehicleController::class, 'index']);
Route::get('/firstreport', [FirstreportController::class, 'index']);
Route::get('/secondreport', [SecondreportController::class, 'index']);
Route::get('/thirdreport', [ThirdreportController::class, 'index']);
Route::get('/endreport', [EndreportController::class, 'index']);
Route::get('/overtime', [OvertimeController::class, 'index']);

// Admin page
Route::get('/addchecklist', [AddchecklistController::class, 'index']);
Route::get('/reportdetails', [reportdetailsController::class, 'index']);
Route::get('/overtimedetails', [OvertimeDetailsController::class, 'index']);


//login page
Route::resource('posts', PostController::class);
