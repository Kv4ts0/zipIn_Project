<?php
use App\Models\Zip;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', "App\Http\Controllers\zipController@getHomePage");
Route::get('/index', "App\Http\Controllers\zipController@getHomePage");
Route::get('/projects', "App\Http\Controllers\zipController@getProjectsPage");
Route::get('/tours', "App\Http\Controllers\zipController@getToursPage");
Route::get('/tokebi', "App\Http\Controllers\zipController@getTokebiPage");
Route::get('/ziplines', "App\Http\Controllers\zipController@getZipPage");
Route::get('/contact', "App\Http\Controllers\zipController@getContactPage");

Route::middleware('custom-auth')->get('/zip/all', "App\Http\Controllers\zipController@viewAllZip")->name('zips.all');
Route::middleware('custom-auth')->post('/zip/add', "App\Http\Controllers\zipController@addNewZip")->name('zips.add');
Route::middleware('custom-auth')->post('/zip/delete', "App\Http\Controllers\zipController@deleteZip")->name('zips.delete');
Route::middleware('custom-auth')->get('/zip/edit/{id}', "App\Http\Controllers\zipController@editZip")->name('zips.edit');
Route::middleware('custom-auth')->post('/zip/update/{id}', "App\Http\Controllers\zipController@updateZip")->name('zips.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('custom/register', [App\Http\Controllers\AuthorizationController::class, 'register'])->name('auth.custom.register')->middleware('guest');
Route::post('custom/login', [App\Http\Controllers\AuthorizationController::class, 'login'])->name('auth.custom.login')->middleware('guest');
Route::post('custom/reset-password', [App\Http\Controllers\AuthorizationController::class, 'reset'])->name('auth.custom.reset')->middleware('guest');
Route::post('custom/logout', [App\Http\Controllers\AuthorizationController::class, 'logout'])->name('auth.custom.logout')->middleware('auth');