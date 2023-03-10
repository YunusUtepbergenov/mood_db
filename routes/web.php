<?php

use App\Http\Controllers\CourtController;
use App\Http\Controllers\PageController;
use App\Models\District;
use App\Models\Minor;
use App\Models\Region;
use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('dashboard');

Route::get('/analysis', [PageController::class, 'analysis'])->name('page.analysis');

Route::get('court/upload', [CourtController::class, 'upload'])->name('court.upload');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
