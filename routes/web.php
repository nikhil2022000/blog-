<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\excelController;
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
Route::get('/excel', function () {
    return view('excel');
});
Route::any('user',[excelController::class,'import'])->name('user');

Route::get('/pro2', function () {
    return view('excel2');
});

////////////////////////////////////////////////////////////////////////////////////////////////////
Route::any('/site',[excelController::class,'coll']);

Route::get('/import', function (){
    return view('project.Import');
});
Route::any('/data',[excelController::class,'enter']);
Route::get('/form', function (){
    return view('project.form');
});
Route::any('insert',[excelController::class,'insert']);
Route::any('fetch',[excelController::class,'fetch']);
Route::any('/emaillog',[excelController::class,'emaillogin']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
