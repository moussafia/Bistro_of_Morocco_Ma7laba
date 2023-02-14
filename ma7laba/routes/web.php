<?php

use App\Http\Controllers\PlatController;
use App\Models\plat;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckStatus;

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
    return view('welcome');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/redirect',[CheckStatus::class,'index'])->name('normalUser');
    Route::get('user',function(){
        return view('user',['fetsh'=>plat::all()]);
    })->name('user');
});

Route::middleware([
    'auth',
    'CheckUser'
])->group(function () {
    Route::resource('posts', PlatController::class);
    Route::get('posts',function(){
        return view('dashboard',['fetsh'=>plat::all()]);
    })->name('page.home');
    Route::get('add', function () {
        return view('pages.add');
    })->name('addPlat');
    
    Route::get('/dashboard', function () {
        return view('dashboard',['fetsh'=>plat::all()]);
    })->name('dashboard');
    Route::get('Menu',function(){
        return view('pages.menu',['fetsh'=>plat::all()]);
    })->name('menu');
});

