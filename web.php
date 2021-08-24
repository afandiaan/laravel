<?php


/*
|--------------------------------------------------------------------------
| Web Routesgit
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login',[App\Http\Controllers\AuthController::class,'login'])->name('loginpage');

Route::get('/', function () {
    $title = 'afandiaan.com | PPDB';
    return view('welcome',compact ('title'));
});

route::get('/ppdb', [App\Http\Controllers\Ppdb_Controller::class, 'index'])->name('ppdb');
route::post('/ppdb',[App\Http\Controllers\Ppdb_Controller::class, 'store'])->name('ppdb.post');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
