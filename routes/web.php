<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home\WelcomeController as WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $films = config('db');

    return view('pages.ComicsHome', compact('films'));


})->name('homePage');


