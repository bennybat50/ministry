<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactsController as AdminContactsController;
use App\Http\Controllers\Admin\ContentLibaryController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\SiteController;
use App\Http\Controllers\Admin\SliderContoller;
use App\Http\Controllers\Admin\SubscribersController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Route::get('/',[HomeController::class,  'index']);

Route::post('/subscribe',[HomeController::class, 'subscribe']);

Auth::routes();

Route::get("/admin", function(){
return view('admin.index');
})->middleware('admin');

Route::resource('/admin/pages', PagesController::class)->middleware('admin');
Route::resource('/admin/users', UsersController::class)->middleware('admin');
Route::resource('/admin/sliders', SliderContoller::class)->middleware('admin');
Route::resource('/admin/posts', BlogController::class)->middleware('admin');
Route::resource('/admin/content-libary', ContentLibaryController::class)->middleware('admin');
Route::resource('/admin/gallery', GalleryController::class)->middleware('admin');
Route::resource('/admin/site-items', SiteController::class)->middleware('admin');
Route::resource('/admin/subscribers', SubscribersController::class)->middleware('admin');
Route::resource('/admin/messages', AdminContactsController::class)->middleware('admin');

Route::resource('/message', ContactsController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/post/{id}', [PostController::class, 'view'])->name('blog_view');

Route::post('/search', [PostController::class, 'search'])->name('search');

