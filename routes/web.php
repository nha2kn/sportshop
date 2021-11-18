<?php

use App\Http\Controllers\Front\HomeController;
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

