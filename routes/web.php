<?php

use App\Http\Controllers\CardController;
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

Route::get('/', [CardController::class ,'home'])->name('welcome');
Route::get('/card/list', [CardController::class ,'index'])->name('card.list');
Route::get('/card/{id?}',[CardController::class,'create'])->name('card.create');
Route::post('/card/store',[CardController::class,'store'])->name('card.store');
Route::post('/card/destroy/{id}',[CardController::class,'destroy'])->name('card.destroy');
