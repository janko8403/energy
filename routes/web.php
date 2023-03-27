<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

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

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    return ["Cache is cleared", "Config is cleared"];
});


Route::get('/', function () {
    if( auth()->check()) return redirect('admin/dashboard');
    return view('auth.login');
});

Auth::routes([
  'register' => false,
]);

Route::group(['prefix'=>'admin', 'middleware' => 'roles', 'roles' => ['Admin']], function() {
    Route::get('/dashboard', [AdminController::class, 'przywidz']);
    // Route::get('/dashboard/przywidz', [AdminController::class, 'przywidz']);
    Route::get('/dashboard/mlawa', [AdminController::class, 'mlawa']);
    Route::get('/clients', [AdminController::class, 'client']);
    Route::post('/add-client', [AdminController::class, 'addClient']);
    Route::post('/edit-client', [AdminController::class, 'editClient']);
    Route::delete('/remove-client/{id}', [AdminController::class, 'removeClient']);
    Route::get('/measurement', [AdminController::class, 'measurement']);
    // Route::get('/measurement2', [AdminController::class, 'measurement2']);
    Route::post('/filter-measurement', [AdminController::class, 'filterMeasurement']);
    // Route::post('/filter-measurement2', [AdminController::class, 'filterMeasurement2']);
    Route::get('/logs', [AdminController::class, 'logs']);
});
Route::get('/last-power-value', [AdminController::class, 'lastPowerValue']);
Route::get('/last-date-value', [AdminController::class, 'lastDateValue']);
Route::get('/cron', [AdminController::class, 'cron']);
Route::get('/getcron', [AdminController::class, 'getcron']);

