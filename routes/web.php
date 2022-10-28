<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\WebsiteController;

use App\Http\Controllers\Admin\AdminController;


use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\PortfolioCategoryController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\Basic_InfoController;

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
        Route::get('/edit/{slug}', [AboutController::class, 'edit'])->name('about.edit');
        Route::get('/view/{slug}', [AboutController::class, 'view'])->name('about.view');
        Route::put('/update', [AboutController::class, 'update'])->name('about.update');
        Route::get('/softdelete/{slug}', [ContactController::class, 'softdelete'])->name('about.softdelete');
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


    Route::group(['prefix' => 'experience', 'middleware' => 'auth'], function(){
        Route::get('/', [ExperienceController::class, 'index'])->name('experience.index');
        Route::get('/create', [ExperienceController::class, 'create'])->name('experience.create');
        Route::post('/', [ExperienceController::class, 'store'])->name('experience.store');
        Route::get('/edit/{slug}', [ExperienceController::class, 'edit'])->name('experience.edit');
        Route::get('/view/{slug}', [ExperienceController::class, 'view'])->name('experience.view');
        Route::put('/update',[ExperienceController::class, 'update'])->name('experience.update');
        Route::get('/softdelete/{slug}', [ExperienceController::class, 'softdelete'])->name('experience.softdelete');
        Route::get('/delete/{slug}', [ExperienceController::class, 'destroy'])->name('experience.destroy');
    });


    Route::group(['prefix' => 'education', 'middleware' => 'auth'], function(){
        Route::get('/', [EducationController::class, 'index'])->name('education.index');
        Route::get('/create', [EducationController::class, 'create'])->name('education.create');
        Route::post('/', [EducationController::class, 'store'])->name('education.store');
        Route::get('/edit/{slug}', [EducationController::class, 'edit'])->name('education.edit');
        Route::get('/view/{slug}', [EducationController::class, 'view'])->name('education.view');
        Route::put('/update',[EducationController::class, 'update'])->name('education.update');
        Route::get('/softdelete/{slug}', [EducationController::class, 'softdelete'])->name('education.softdelete');
        Route::get('/delete/{slug}', [EducationController::class, 'destroy'])->name('education.destroy');
    });

    Route::group(['prefix' => 'contact_mess', 'middleware' => 'auth'], function(){
        Route::get('/', [ContactMessageController::class, 'index'])->name('contact_mess.index');
        Route::post('/store', [ContactMessageController::class, 'store'])->name('contact_mess.store');
        Route::get('/view/{slug}', [ContactMessageController::class, 'view'])->name('contact_mess.view');
        Route::get('/softdelete/{slug}', [ContactMessageController::class, 'softdelete'])->name('contact_mess.softdelete');
        Route::get('/delete/{slug}', [ContactMessageController::class, 'destroy'])->name('contact_mess.destroy');
    });

    Route::group(['prefix' => 'portfolio_category', 'middleware' => 'auth'], function(){
        Route::get('/', [PortfolioCategoryController::class, 'index'])->name('portfolio_category.index');
        Route::get('create', [PortfolioCategoryController::class, 'create'])->name('portfolio_category.create');
        Route::post('/', [PortfolioCategoryController::class, 'store'])->name('portfolio_category.store');
        Route::get('/edit/{slug}', [PortfolioCategoryController::class, 'edit'])->name('portfolio_category.edit');
        Route::get('/view/{slug}', [PortfolioCategoryController::class, 'view'])->name('portfolio_category.view');
        Route::put('/update', [PortfolioCategoryController::class, 'update'])->name('portfolio_category.update');
        Route::get('/softdelete/{slug}', [PortfolioCategoryController::class, 'softdelete'])->name('portfolio_category.softdelete');
    });

    Route::group(['prefix' => 'skills', 'middleware' => 'auth'], function(){
        Route::get('/', [SkillController::class, 'index'])->name('skill.index');
        Route::get('create', [SkillController::class, 'create'])->name('skill.create');
        Route::post('/', [SkillController::class, 'store'])->name('skill.store');
        Route::get('/edit/{slug}', [SkillController::class, 'edit'])->name('skill.edit');
        Route::get('/view/{slug}', [SkillController::class, 'view'])->name('skill.view');
        Route::put('/update', [SkillController::class, 'update'])->name('skill.update');
        Route::get('/softdelete/{slug}', [SkillController::class, 'softdelete'])->name('skill.softdelete');
    });

    Route::group(['prefix' => 'service', 'middleware' => 'auth'], function(){
        Route::get('/', [ServiceController::class, 'index'])->name('service.index');
        Route::get('create', [ServiceController::class, 'create'])->name('service.create');
        Route::post('/', [ServiceController::class, 'store'])->name('service.store');
        Route::get('/edit/{slug}', [ServiceController::class, 'edit'])->name('service.edit');
        Route::get('/view/{slug}', [ServiceController::class, 'view'])->name('service.view');
        Route::put('/update', [ServiceController::class, 'update'])->name('service.update');
        Route::get('/softdelete/{slug}', [ServiceController::class, 'softdelete'])->name('service.softdelete');
    });

    Route::get('dashboard/basic_info', [Basic_InfoController::class, 'index']);
    Route::post('dashboard/basic_info/update', [Basic_InfoController::class, 'update']);

});





require __DIR__.'/auth.php';
