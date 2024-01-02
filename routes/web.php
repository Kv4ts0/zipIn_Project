<?php
use App\Models\Zip;
use App\Models\Tour;
use App\Models\Tokebi;
use App\Models\Slide;
use App\Models\Stat;
use App\Models\Blog;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', "App\Http\Controllers\zipController@getHomePage");
Route::get('/index', "App\Http\Controllers\zipController@getHomePage");
Route::get('/projects', "App\Http\Controllers\zipController@getProjectsPage");
Route::get('/tours', "App\Http\Controllers\zipController@getToursPage");
Route::get('/tokebi', "App\Http\Controllers\zipController@getTokebiPage");
Route::get('/ziplines', "App\Http\Controllers\zipController@getZipPage");
Route::get('/contact', "App\Http\Controllers\zipController@getContactPage");

//Zip routes
Route::middleware('custom-auth')->get('/zip/all', "App\Http\Controllers\zipController@viewAllZip")->name('zips.all');
Route::middleware('custom-auth')->post('/zip/add', "App\Http\Controllers\zipController@addNewZip")->name('zips.add');
Route::middleware('custom-auth')->post('/zip/delete', "App\Http\Controllers\zipController@deleteZip")->name('zips.delete');
Route::middleware('custom-auth')->get('/zip/edit/{id}', "App\Http\Controllers\zipController@editZip")->name('zips.edit');
Route::middleware('custom-auth')->post('/zip/update/{id}', "App\Http\Controllers\zipController@updateZip")->name('zips.update');

//Tour routes
Route::middleware('custom-auth')->get('/tour/all', 'App\Http\Controllers\tourController@viewAllTour')->name('tours.all');
Route::middleware('custom-auth')->post('/tour/add', 'App\Http\Controllers\tourController@addNewTour')->name('tours.add');
Route::middleware('custom-auth')->post('/tour/delete', 'App\Http\Controllers\tourController@deleteTour')->name('tours.delete');
Route::middleware('custom-auth')->get('/tour/edit/{id}', 'App\Http\Controllers\tourController@editTour')->name('tours.edit');
Route::middleware('custom-auth')->post('/tour/update/{id}', 'App\Http\Controllers\tourController@updateTour')->name('tours.update');

//Tokebi routes
Route::middleware('custom-auth')->get('/tokebi/all', 'App\Http\Controllers\tokebiController@viewAlltokebi')->name('tokebi.all');
Route::middleware('custom-auth')->post('/tokebi/add', 'App\Http\Controllers\tokebiController@addNewtokebi')->name('tokebi.add');
Route::middleware('custom-auth')->post('/tokebi/delete', 'App\Http\Controllers\tokebiController@deletetokebi')->name('tokebi.delete');
Route::middleware('custom-auth')->get('/tokebi/edit/{id}', 'App\Http\Controllers\tokebiController@edittokebi')->name('tokebi.edit');
Route::middleware('custom-auth')->post('/tokebi/update/{id}', 'App\Http\Controllers\tokebiController@updatetokebi')->name('tokebi.update');

//Blog routes
Route::middleware('custom-auth')->get('/blog/all', 'App\Http\Controllers\blogController@viewAllBlog')->name('blogs.all');
Route::middleware('custom-auth')->post('/blog/add', 'App\Http\Controllers\blogController@addNewBlog')->name('blogs.add');
Route::middleware('custom-auth')->post('/blog/delete', 'App\Http\Controllers\blogController@deleteBlog')->name('blogs.delete');
Route::middleware('custom-auth')->get('/blog/edit/{id}', 'App\Http\Controllers\blogController@editBlog')->name('blogs.edit');
Route::middleware('custom-auth')->post('/blog/update/{id}', 'App\Http\Controllers\blogController@updateBlog')->name('blogs.update');

//Slide routes
Route::middleware('custom-auth')->get('/slide/all', 'App\Http\Controllers\slideController@viewAllSlide')->name('slides.all');
Route::middleware('custom-auth')->post('/slide/add', 'App\Http\Controllers\slideController@addNewSlide')->name('slides.add');
Route::middleware('custom-auth')->post('/slide/delete', 'App\Http\Controllers\slideController@deleteSlide')->name('slides.delete');
Route::middleware('custom-auth')->get('/slide/edit/{id}', 'App\Http\Controllers\slideController@editSlide')->name('slides.edit');
Route::middleware('custom-auth')->post('/slide/update/{id}', 'App\Http\Controllers\slideController@updateSlide')->name('slides.update');

//Stat routes
Route::middleware('custom-auth')->get('/stat/all', 'App\Http\Controllers\statController@viewAllStat')->name('stats.all');
Route::middleware('custom-auth')->post('/stat/add', 'App\Http\Controllers\statController@addNewStat')->name('stats.add');
Route::middleware('custom-auth')->post('/stat/delete', 'App\Http\Controllers\statController@deleteStat')->name('stats.delete');
Route::middleware('custom-auth')->get('/stat/edit/{id}', 'App\Http\Controllers\statController@editStat')->name('stats.edit');
Route::middleware('custom-auth')->post('/stat/update/{id}', 'App\Http\Controllers\statController@updateStat')->name('stats.update');



Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('custom/register', [App\Http\Controllers\AuthorizationController::class, 'register'])->name('auth.custom.register')->middleware('guest');
Route::post('custom/login', [App\Http\Controllers\AuthorizationController::class, 'login'])->name('auth.custom.login')->middleware('guest');
Route::post('custom/reset-password', [App\Http\Controllers\AuthorizationController::class, 'reset'])->name('auth.custom.reset')->middleware('guest');
Route::post('custom/logout', [App\Http\Controllers\AuthorizationController::class, 'logout'])->name('auth.custom.logout')->middleware('auth');