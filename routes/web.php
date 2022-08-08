<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\WebsiteController;
use App\Http\Controllers\Admin\AdminController;
use GuzzleHttp\Middleware;

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

Route::group(['prefix' => 'website', 'middleware' => 'auth'], function(){
    Route::get('/', [WebsiteController::class, 'index'])->name('website.home');
});


Route::group(['prefix' => 'dashboard', 'middleware'=> 'auth'], function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard.index');
});














// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
