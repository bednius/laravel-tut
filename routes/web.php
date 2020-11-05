<?php

use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Client\Request;

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

Route::redirect('/', '/register');

Route::get('/confirm/{hash}', [ConfirmController::class, 'confirmRegistration']);
Route::delete('/confirm/{hash}', [ConfirmController::class, 'removeUser']);


Route::post('register', [RegisterController::class, 'registerUser']);
Route::get('register', [RegisterController::class, 'getRegisterView']);

