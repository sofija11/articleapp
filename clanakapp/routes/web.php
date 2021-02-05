<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClanakController;
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
Route::get('/', [ClanakController::class, 'index']);
Route::get('/dodajClanak', function () {
    return view('dodajClanak');
})->name('dodajClanak')->middleware('ulogovan');

Route::post('/login',"KorisnikController@login");
Route::get('/logout',"KorisnikController@logout");

Route::resource('clanak','ClanakController');

Route::get('/exportuj','CSVController@exportData');