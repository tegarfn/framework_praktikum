<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BajuController;
use App\Models\Baju;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/table', function () {
    return view('table',[
        "bajus" => Baju::all()
        ]);
});


Route::get('/register', function () {
    return view('register');
})->name("register");

Route::post('/action-register', [AuthController::class, 'actionRegister']);

Route::get('/baju', [BajuController::class, 'index'])->name('baju.index');
Route::get('/baju/create', [BajuController::class, 'create'])->name('baju.create');
Route::post('/baju/store', [BajuController::class, 'store'])->name('baju.store');
Route::get('/baju/show/{id}', [BajuController::class, 'show'])->name('baju.show');
