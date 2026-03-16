<?php

use App\Http\Controllers\Admin\AboutimageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\SliderimageController;
use App\Http\Controllers\Admin\VideoGalleryController;
use App\Http\Controllers\User\AboutUsController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\GalleryController;
use App\Http\Controllers\User\PageController;
use App\Http\Controllers\User\PortfolioController;
use App\Http\Controllers\User\ServicesController;
use App\Http\Controllers\User\UserIndexController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('admin')->name('admin.')->group(function () {

    // ------------------ admin panel routes ---------------------------------
    Route::controller(AdminController::class)->group(function () {
        Route::get('/index', 'index')->name('index');
    });

    //logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    // ------------------ admin blogs routes -----------------------------------
    Route::controller(BlogController::class)->group(function () {
        Route::get('blog/index', 'index')->name('blog.index');
        Route::get('blog/create', 'create')->name('blog.create');
        Route::post('blog/store', 'store')->name('blog.store');
        Route::get('blog/edit/{id}', 'edit')->name('blog.edit');
        Route::post('blog/update/{id}', 'update')->name('blog.update');
        Route::get('blog/delete/{id}', 'destroy')->name('blog.destroy');
    });

    // ------------------ admin contactsUs routes -----------------------------------
    Route::controller(ContactUsController::class)->group(function () {
        Route::get('contact/index', 'index')->name('contact.index');
        Route::post('contact/store', 'store')->name('contact.store');
        Route::delete('/contact/destroy/{id}', 'destroy')->name('contact.destroy');
    });

    // ------------------ admin gallery routes -----------------------------------
    Route::controller(AdminGalleryController::class)->group(function () {
        Route::get('gallery/index', 'index')->name('gallery.index');
        Route::get('gallery/create', 'create')->name('gallery.create');
        Route::post('gallery/store', 'store')->name('gallery.store');
        Route::get('gallery/edit/{id}', 'edit')->name('gallery.edit');
        Route::post('gallery/update/{id}', 'update')->name('gallery.update');
        Route::get('gallery/delete/{id}', 'destroy')->name('gallery.destroy');
    });

    // ------------------ admin settings routes -----------------------------------
    Route::controller(SettingsController::class)->group(function () {
        Route::get('settings/create', 'create')->name('settings.create');
        Route::post('settings/store', 'store')->name('settings.store');
    });

    //video
    Route::controller(VideoGalleryController::class)->group(function () {
        Route::get('/video/index', [VideoGalleryController::class, 'index'])->name('video.index');
        Route::get('/video/create', [VideoGalleryController::class, 'create'])->name('video.create');
        Route::post('/video/store', [VideoGalleryController::class, 'store'])->name('video.store');
        Route::get('/video/edit/{id}', [VideoGalleryController::class, 'edit'])->name('video.edit');
        Route::post('/video/update/{id}', [VideoGalleryController::class, 'update'])->name('video.update');
        Route::get('/video/destroy/{id}', [VideoGalleryController::class, 'destroy'])->name('video.destroy');
    });
    //slider
    Route::get('/slider/index', [SliderimageController::class, 'index'])->name('slider.index');
    Route::post('/slider/store', [SliderimageController::class, 'store'])->name('slider.store');

    //about
    Route::get('/about/index', [AboutimageController::class, 'index'])->name('about.index');
    Route::post('/about/store', [AboutimageController::class, 'store'])->name('about.store');
});

//guest route
Route::middleware('guest')->group(function () {
    Route::controller(AuthController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::get('/register', 'register')->name('register');
        Route::post('/register/store', 'registerStore')->name('register.store');
        Route::post('/login/check', 'loginCheck')->name('login.check');
    });
});

Route::controller(UserIndexController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});
// -------------- about us controller -------------------
Route::controller(AboutUsController::class)->group(function () {
    Route::get('/about', 'index')->name('about');
});
// ------------- services controller ---------------------
Route::controller(ServicesController::class)->group(function () {
    Route::get('/service', 'index')->name('service');
});
// --------------- portfolio controller --------------------
Route::controller(PortfolioController::class)->group(function () {
    Route::get('/portfolio', 'index')->name('portfolio');
});
// ---------------- contact controller -----------------
Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'index')->name('contact');
    Route::post('/contact/store', 'store')->name('contact.store');
});
// ---------------- page controller -----------------
Route::controller(PageController::class)->group(function () {
    // Route::get('/blog','blog')->name('blog');
    Route::get('/blogDetails', 'blogDetails')->name('blogDetails');
    Route::get('/element', 'element')->name('element');
    Route::get('/index/portfolioDetails', 'portfolioDetails')->name('portfolioDetails');
});
Route::get('/blogs',[PageController::class,'blog'])->name('blogs');

//Gallery
Route::get('gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('gallery/video', [GalleryController::class, 'video'])->name('gallery.video');
