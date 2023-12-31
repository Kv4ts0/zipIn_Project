<?php
use App\Models\Zip;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', "App\Http\Controllers\zipController@getHomePage");
Route::get('/index', "App\Http\Controllers\zipController@getHomePage");
Route::get('/projects', "App\Http\Controllers\zipController@getProjectsPage");
Route::get('/tours', "App\Http\Controllers\zipController@getToursPage");
Route::get('/tokebi', "App\Http\Controllers\zipController@getTokebiPage");
Route::get('/ziplines', "App\Http\Controllers\zipController@getZipPage");
Route::get('/contact', "App\Http\Controllers\zipController@getContactPage");

Route::get('/zip/create', "App\Http\Controllers\zipController@createZip");
Route::get('/zip/all', "App\Http\Controllers\zipController@viewAllZip");
