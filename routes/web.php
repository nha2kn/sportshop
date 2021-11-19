<?php

use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ShopController;
use App\Models\Account;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\User;
use Facade\FlareClient\View;
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

Route::get('/', [HomeController::class, 'index']);

Route::prefix('shop')->group(function() {
    Route::get('/product/{id}', [ShopController::class, 'show']);
    Route::post('/product/{id}', [ShopController::class, 'postComment']);
    Route::get('/', [ShopController::class, 'index']);
});

Route::prefix('cart')->group(function() {
    Route::get('add/{id}', [CartController::class, 'add']);
    Route::get('/', [CartController::class, 'index']);
    Route::get('delete/{rowId}', [CartController::class, 'delete']);
    Route::get('/update', [CartController::class, 'update']);
});

