<?php

use App\Http\Middleware\Admin;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Back\AdminController;
use App\Http\Controllers\SimpleExcelController;

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

Route::get('/', function () {
    return view('auth.login');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::middleware([Admin::class])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::name('admin')->get('/', [UserController::class, 'index']);
        Route::resource('users', UserController::class);
        Route::get('/login', [AdminController::class, 'logout'])->name('logout');
        
        //Import csv File
        Route::get('simple-excel/import', [SimpleExcelController::class, 'index'])->name('importcsv');
        Route::post('simple-excel/import', [SimpleExcelController::class, 'import'])->name('excel.import');
    });
});

