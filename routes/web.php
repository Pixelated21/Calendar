<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\StudentController;
use App\Http\Livewire\Home;
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


    return view('welcome');
});

Route::get('/calendar', [CalendarController::class, 'calendar']);
Route::get('/student', [StudentController::class, 'index']);
Route::get('/search', Home::class);
