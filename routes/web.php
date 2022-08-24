<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\WebsiteController;

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ContactMessageController;

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

Route::get('/', [WebsiteController::class, 'about'])->name('website.about');
Route::get('/skill', [WebsiteController::class, 'skill'])->name('website.skill');
Route::get('/service', [WebsiteController::class, 'service'])->name('website.service');
Route::get('/experience', [WebsiteController::class, 'experience'])->name('website.experience');
Route::get('/education', [WebsiteController::class, 'education'])->name('website.education');
Route::get('/portfolio', [WebsiteController::class, 'portfolio'])->name('website.portfolio');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('website.contact');
Route::post('contact-message', [WebsiteController::class, 'contactmess']);


// Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
// Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);

// Route::get('login/github', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub'])->name('login.github');
// Route::get('login/github/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback']);

// Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
// Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);


Route::group(['prefix' => 'dashboard', 'middleware'=> 'auth'], function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard.index');


    Route::group(['prefix' => 'about', 'middleware' => 'auth'], function(){
        Route::get('/', [AboutController::class, 'index'])->name('about.index');
        Route::get('/create', [AboutController::class, 'create'])->name('about.create');
        Route::post('/store', [AboutController::class, 'store'])->name('about.store');
        Route::get('/edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
        Route::get('/view/{id}', [AboutController::class, 'view'])->name('about.view');
        Route::put('/update', [AboutController::class, 'update'])->name('about.update');
        Route::get('/softdelete', [ContactController::class, 'softdelete'])->name('about.softdelete');
        Route::get('/delete', [AboutController::class, 'destroy'])->name('about.destroy');
    });


    Route::group(['prefix' => 'contact', 'middleware' => 'auth'], function(){
        Route::get('/', [ContactController::class, 'index'])->name('contact.index');
        Route::get('/create', [ContactController::class, 'create'])->name('contact.create');
        Route::post('/', [ContactController::class, 'store'])->name('contact.store');
        Route::get('/edit/{slug}', [ContactController::class, 'edit'])->name('contact.edit');
        Route::get('/view/{slug}', [ContactController::class, 'view'])->name('contact.view');
        Route::put('/update',[ContactController::class, 'update'])->name('contact.update');
        Route::get('/softdelete/{slug}', [ContactController::class, 'softdelete'])->name('contact.softdelete');
        Route::get('/delete/{slug}', [ContactController::class, 'destroy'])->name('contact.destroy');
    });

    Route::group(['prefix' => 'contact_mess', 'middleware' => 'auth'], function(){
        Route::get('/', [ContactMessageController::class, 'index'])->name('contact_mess.index');
        Route::post('/store', [ContactMessageController::class, 'store'])->name('contact_mess.store');
        Route::get('/view/{slug}', [ContactMessageController::class, 'view'])->name('contact_mess.view');
        Route::get('/softdelete/{slug}', [ContactMessageController::class, 'softdelete'])->name('contact_mess.softdelete');
        Route::get('/delete/{slug}', [ContactMessageController::class, 'destroy'])->name('contact_mess.destroy');
    });
});





require __DIR__.'/auth.php';
